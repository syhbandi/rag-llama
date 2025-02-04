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

        dd($response->json());


        $embedding = $response->json()['data'][0]['embedding'];

        $document = new Document();
        $document->path = $path;
        $document->content = $text;
        $document->embedding = $embedding;
        $document->save();

        return response()->json($document, 201);
    }

    public function index()
    {
        $documents = Document::paginate(10);
        return response()->json($documents);
    }

    public function ask(Request $request)
    {
        $request->validate([
            'query' => 'required|string',
        ]);

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('TOGETHER_AI_API_KEY'),
        ])->post('https://api.together.xyz/v1/embeddings', [
            'model' => 'togethercomputer/m2-bert-80M-8k-retrieval',
            'input' => $request->input('query'),
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

        $contents = $documents->pluck('content')->join("\n\n");

        $ai_response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('TOGETHER_AI_API_KEY'),
        ])->post('https://api.together.xyz/v1/completions', [
            'model' => 'meta-llama/Llama-2-7b-chat-hf',
            'prompt' => "Based on the following information, answer the user's question:\n\n"
                . "Information:\n" . $contents . "\n\n"
                . "Question: " . $request->input('query') . "\n"
                . "Answer:",
            'max_tokens' => 500,
            'temperature' => 0.7,
        ]);

        $answer = $ai_response->json()['choices'][0]['text'];

        // Step 5: Return the answer to the user
        return response()->json([
            'question' => $request->input('query'),
            'answer' => trim($answer),
        ]);
    }
}
