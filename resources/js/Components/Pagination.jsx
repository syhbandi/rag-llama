import { Link } from "@inertiajs/react";
import React from "react";

const Pagination = ({ links }) => {
    return (
        <div className="flex items-center gap-1">
            {links.map((link, index) => (
                <Link
                    href={link.url}
                    key={index}
                    disabled={link.active}
                    className={`h-8 flex items-center justify-center bg-white first:rounded-l-lg last:rounded-r-lg border border-neutral-200 hover:bg-neutral-100 px-3 ${
                        !link.url ? "opacity-50 pointer-events-none" : ""
                    } ${
                        link.active ? "bg-neutral-100 pointer-events-none" : ""
                    }`}
                >
                    {link.label.includes("Previous")
                        ? "Previous"
                        : link.label.includes("Next")
                        ? "Next"
                        : link.label}
                </Link>
            ))}
        </div>
    );
};

export default Pagination;
