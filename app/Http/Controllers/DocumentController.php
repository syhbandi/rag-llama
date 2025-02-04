<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Pgvector\Laravel\Distance;
use Pgvector\Laravel\Vector;
use Smalot\PdfParser\Parser;

class DocumentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf|max:2048',
        ]);

        $path = $request->file('file')->store('documents');
        $filePath = Storage::disk('local')->path($path);

        $parser = new Parser();
        $pdf = $parser->parseFile($filePath);
        $text = $pdf->getText();


        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('TOGETHER_AI_API_KEY'),
        ])->post('https://api.together.xyz/v1/embeddings', [
            'model' => 'togethercomputer/m2-bert-80M-8k-retrieval',
            'input' => $text,
        ]);

        $embedding = $response->json()['data'][0]['embedding'];

        $document = new Document();
        $document->path = $path;
        $document->content = $text;
        $document->embedding = $embedding;
        $document->save();

        return response()->json($document, 201);
    }

    public function ask(Request $request)
    {
        $request->validate([
            'query' => 'required|string',
        ]);

        // embedd the question
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('TOGETHER_AI_API_KEY'),
        ])->post('https://api.together.xyz/v1/embeddings', [
            'model' => 'togethercomputer/m2-bert-80M-8k-retrieval',
            'input' => $request->question,
        ]);

        $embeddedQuestion = $response->json()['data'][0]['embedding'];
        $vector = new Vector($embeddedQuestion);

        $documents = Document::query()
            ->orderByRaw('embedding <-> ?', [$vector])
            ->limit(3)
            ->get();

        if ($documents->isEmpty()) {
            return response()->json(['message' => 'No relevant references found.'], 404);
        }

        $retrieved_embeddings = $documents->pluck('embedding')->toArray();
        $retrieved_context = json_encode($retrieved_embeddings); // Convert embeddings into JSON

        // 4️⃣ Use AI to generate a response using only embeddings
        $prompt = "You are an AI assistant. Use the following numerical embeddings to infer the context and answer the user's question accurately.\n\n";
        $prompt .= "Embeddings Data:\n$retrieved_context\n\n";
        $prompt .= "User Question: " . $request->question . "\n\n";
        $prompt .= "Provide a clear and helpful answer.";

        $aiResponse = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('TOGETHER_AI_API_KEY'),
        ])->post('https://api.together.xyz/v1/completions', [
            'model' => 'meta-llama/Llama-2-7b-chat-hf',
            'prompt' => $prompt,
            'max_tokens' => 300,
            'temperature' => 0.7,
        ]);

        return response()->json($aiResponse->json());
    }
}
