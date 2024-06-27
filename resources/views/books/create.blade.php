<x-layout>
    <x-page-heading>Livro</x-page-heading>

    <x-forms.form method="POST" action="/books">
        <x-forms.input label="Título" name="title" placeholder="Título"/>
        <x-forms.input label="ISBN" name="isbn" placeholder="ISBN"/>
        <x-forms.input label="Ano" name="year" placeholder="Ano"/>
        <x-forms.input label="Área" name="area" placeholder="Área"/>
        <x-forms.input label="Editora" name="publisher" placeholder="Editora"/>

        <x-forms.divider/>

        <x-forms.select label="Biblioteca" name="library_id">
            @if($libraries)
                @foreach($libraries as $library)
                    <option value="{{ $library->id }}">{{ $library->name }}</option>
                @endforeach
            @else
                <option>Sem bibliotecas cadastradas...</option>
            @endif
        </x-forms.select>

        <x-forms.divider/>

        <x-forms.select label="Autores" name="authors">
            @if($authors)
                @foreach($authors as $author)
                    <option class="text-black" value="{{ $library->id }}">{{ $author->first_name }} {{ $author->last_name }}</option>
                @endforeach
            @else
                <option>Sem autores cadastradas...</option>
            @endif
        </x-forms.select>

        <x-forms.button>Adicionar</x-forms.button>
    </x-forms.form>
</x-layout>
