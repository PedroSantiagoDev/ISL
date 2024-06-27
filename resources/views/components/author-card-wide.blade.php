@props(['author'])

<x-panel class="flex gap-x-6">
    <div>
        <img src="..." alt="Foto do Autor" class="w-24 h-24 object-cover rounded-full">
    </div>

    <div class="flex-1 flex flex-col">
        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-800">
            <a href="#">
                {{ $author->first_name }} {{ $author->last_name }}
            </a>
        </h3>

        <p class="text-sm text-gray-400 mt-1">
            Biografia: {{ $author->biography }}
        </p>

        <div class="mt-auto">
            <p class="text-sm text-gray-400">
                Livros:
                @foreach($author->books as $book)
                    <span class="inline-block bg-gray-200 rounded-full px-2 py-1 text-xs font-semibold text-gray-700 mr-2">
                        {{ $book->title }}
                    </span>
                @endforeach
            </p>
        </div>
    </div>
</x-panel>
