@props(['book'])

<x-panel class="flex gap-x-6">
    <div>
        <img src="..." alt="Capa do Livro" class="w-24 h-32 object-cover">
    </div>

    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-400 transition-colors duration-300">
            Editora: {{ $book->publisher }}
        </a>

        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-800">
            <a href="#">
                Título: {{ $book->title }}
            </a>
        </h3>

        <p class="text-sm text-gray-400 mt-1">
            ISBN: {{ $book->isbn }}
        </p>

        <div class="mt-auto">
            <p class="text-sm text-gray-400">
                Autores:
                @foreach($book->authors as $author)
                    <span class="inline-block bg-gray-200 rounded-full px-2 py-1 text-xs font-semibold text-gray-700 mr-2">
                        {{ $author->first_name }} {{ $author->last_name }}
                    </span>
                @endforeach
            </p>
        </div>
    </div>
</x-panel>
