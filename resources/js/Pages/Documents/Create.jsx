import React from "react";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Head, useForm } from "@inertiajs/react";
import { FiFile, FiUploadCloud } from "react-icons/fi";
import InputError from "@/Components/InputError";

const Create = () => {
    const { data, setData, post, processing, errors } = useForm({
        file: null,
    });

    const handleSubmit = (e) => {
        e.preventDefault();
        post(route("documents.store"));
    };

    return (
        <AuthenticatedLayout
            header={
                <h2 className="text-xl font-semibold leading-tight text-gray-800">
                    Upload Documents
                </h2>
            }
        >
            <Head title="Documents" />
            <div className="container mx-auto max-w-7xl px-5 lg:px-8 space-y-3 py-10">
                <div className="rounded bg-white shadow p-5 w-full lg:w-1/2">
                    <form onSubmit={handleSubmit}>
                        <div className="mb-4">
                            <label
                                htmlFor="file"
                                className="block space-y-3 cursor-pointer"
                            >
                                <div className="font-medium">Document</div>
                                <div className="w-full border-dashed border-2 border-neutral-200 rounded-lg h-24 flex flex-col items-center justify-center">
                                    <FiUploadCloud className="text-orange-600 text-3xl" />
                                    <div className="mt-1 text-sm text-neutral-600">
                                        Browse File
                                    </div>
                                </div>
                            </label>
                            <input
                                type="file"
                                name="file"
                                id="file"
                                accept=".pdf"
                                hidden
                                onChange={(e) =>
                                    setData("file", e.target.files[0])
                                }
                            />

                            {data.file && (
                                <div className="flex items-center gap-2 mt-2 rounded-lg border border-neutral-200 p-3">
                                    <FiFile className="text-orange-600" />
                                    {data.file.name}
                                </div>
                            )}
                            <InputError
                                message={errors.file}
                                className="mt-2"
                            />
                        </div>
                        <div className="flex justify-end">
                            <button
                                type="submit"
                                className="h-11 bg-orange-600 hover:bg-orange-700 font-medium text-white px-5 flex items-center justify-center rounded-lg disabled:opacity-65"
                                disabled={processing}
                            >
                                {processing ? "Uploading..." : "Upload"}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </AuthenticatedLayout>
    );
};

export default Create;
