import QuestionForm from "@/Components/QuestionForm";
import { Head, Link } from "@inertiajs/react";

export default function Welcome({ data }) {
    console.log(data);
    return (
        <>
            <Head title="RAG System" />
            <QuestionForm />
        </>
    );
}
