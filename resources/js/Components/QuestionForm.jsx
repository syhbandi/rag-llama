import usePost from "@/hooks/usePost";
import React, { useEffect, useRef, useState } from "react";

const QuestionForm = () => {
    const [query, setQuery] = useState("");
    const [chats, setChats] = useState([]);
    const { data, loading, error, postData } = usePost("/api/ask");

    const lastMessageRef = useRef(null);

    const scrollToBottom = () => {
        lastMessageRef.current.scrollIntoView({ behavior: "smooth" });
    };

    const handleSubmit = (e) => {
        e.preventDefault();
        if (!query) return;
        setQuery("");
        postData({ query });
    };

    useEffect(() => {
        if (data) {
            setChats([...chats, data]);
        }
    }, [data]);

    useEffect(() => {
        if (chats.length > 0) {
            scrollToBottom();
        }
    }, [chats]);

    return (
        <div className="space-y-3 mx-auto h-screen flex flex-col">
            <div className="overflow-y-auto flex-1 mx-auto pb-3 pt-11">
                {chats?.map((chat, index) => (
                    <div
                        className="space-y-3 w-full lg:w-1/2 mx-auto px-6"
                        key={index}
                    >
                        <div className="ml-auto py-3 px-5 rounded-full bg-neutral-100 w-fit">
                            {chat.question}
                        </div>
                        <p className="text-neutral-800">{chat.answer}</p>
                        <p>References : {chat?.references?.join(",")}</p>
                    </div>
                ))}
                {loading && (
                    <div className="mx-aut text-center mb-3">Loading...</div>
                )}
                <div ref={lastMessageRef} />
            </div>
            <form
                onSubmit={handleSubmit}
                className="mt-auto mx-auto w-full lg:w-1/2 py-3 px-6"
            >
                <div className="flex gap-3">
                    <input
                        name="query"
                        value={query}
                        onChange={(e) => setQuery(e.target.value)}
                        placeholder="Ask me anything..."
                        className="flex-1 min-h-11 max-h-32 bg-neutral-100 border border-neutral-200 rounded-full focus:ring-orange-600 focus:outline-none focus:border-orange-600"
                    />
                    <button
                        type="submit"
                        className="h-11 w-11 bg-orange-600 rounded-full self-end flex items-center justify-center"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            className="h-4 w-4 text-white"
                        >
                            <path
                                strokeLinecap="round"
                                strokeLinejoin="round"
                                strokeWidth={2}
                                d="M3 10l9-9m0 0l9 9m-9-9v18"
                            />
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    );
};

export default QuestionForm;
