import { useForm } from "@inertiajs/react";
import React from "react";
import { FiTrash } from "react-icons/fi";

const DeleteButton = ({ id }) => {
    const { delete: deleteDocument, errors } = useForm({
        id,
    });

    const handleSubmit = (e) => {
        e.preventDefault();

        confirm("Are you sure you want to delete this document?") &&
            deleteDocument(route("documents.delete"));
    };

    return (
        <form onSubmit={handleSubmit}>
            <button className="h-9 w-9 rounded-full hover:bg-neutral-50 flex items-center justify-center gap-2 ">
                <FiTrash className="text-red-600" />
            </button>
            {errors.id && <div className="text-red-500">{errors.id}</div>}
        </form>
    );
};

export default DeleteButton;
