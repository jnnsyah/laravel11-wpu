<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    @foreach ($posts as $p)
        <article class="py-8 max-w-screen-md border-b border-gray-300">
            <a href="/posts/{{$p['slug']}}" class="hover:underline">
            <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{$p['title']}}</h2>
            </a>
            <div class="text-base text-gray-500">
                <a href="#" class="hover:text-gray-700">{{$p['author']}}</a> | {{$p['date']}}
            </div>
            <p class="my-4 font-light">{{Str::limit($p['body'], 150)}}</p>
            <a href="/posts/{{$p['slug']}}" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
        </article>
    @endforeach
</x-layout>