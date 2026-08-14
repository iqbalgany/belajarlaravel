<x-layout :title="$title">
    <article class="py-6 max-w-3xl-md border-b border-gray-300">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
        <div class="text-gray-500">
            <a href="">{{ $post->author->name }}</a> | 1 Januari 2026
        </div>
        <p class="my-4 font-light">{{ $post['body'], 100 }}</p>
        <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to all posts</a>
    </article>
</x-layout>
