import DeleteButton from "@/Components/DeleteButton";
import Pagination from "@/Components/Pagination";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { dateFormat } from "@/utils";
import { Head, Link } from "@inertiajs/react";
import React from "react";

const Index = ({ documents }) => {
    console.log(documents);

    return (
        <AuthenticatedLayout
            header={
                <h2 className="text-xl font-semibold leading-tight text-gray-800">
                    Documents
                </h2>
            }
        >
            <Head title="Documents" />
            <div className="container mx-auto max-w-7xl px-5 lg:px-8 space-y-3 py-10">
                <div className="flex items-center justify-between">
                    <Link
                        role="button"
                        href="/documents/create"
                        className="ml-auto h-11 flex items-center justify-center px-5 bg-orange-500 rounded-lg text-white font-medium hover:bg-orange-600"
                    >
                        Add Document
                    </Link>
                </div>
                {documents.data.length ? (
                    documents.data.map((doc) => (
                        <div
                            key={doc.id}
                            className="bg-white shadow-sm sm:rounded-lg p-5 relative group/item"
                        >
                            <h1 className="text-xl font-semibold">
                                {doc.original_name}
                            </h1>
                            <p className="text-gray-700 text-sm">
                                {dateFormat(doc.created_at)}
                            </p>
                            <p className="line-clamp-3 text-neutral-500 mt-2">
                                {doc.content}
                            </p>
                            <div className="absolute top-0 right-0 m-3 invisible group-hover/item:visible">
                                <DeleteButton id={doc.id} />
                            </div>
                        </div>
                    ))
                ) : (
                    <div className="text-center">No documents found</div>
                )}
                <div className="flex items-center justify-center py-3">
                    <Pagination links={documents.links} />
                </div>
            </div>
        </AuthenticatedLayout>
    );
};

export default Index;
