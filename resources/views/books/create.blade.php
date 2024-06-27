<x-layout>
    <x-page-heading>Livro</x-page-heading>

    <x-forms.form method="POST" action="/books">
        <x-forms.input label="Título" name="title" placeholder="Título"/>
        <x-forms.input label="ISBN" name="isbn" placeholder="ISBN"/>
        <x-forms.input label="Ano" name="year" placeholder="Ano"/>
        <x-forms.input label="Área" name="area" placeholder="Área"/>
        <x-forms.input label="Editora" name="publisher" placeholder="Editora"/>

        <x-forms.divider />

        <x-page-heading>Autor</x-page-heading>

        <x-forms.input label="Nome" name="name" placeholder="Nome"/>
        <x-forms.input label="Sobrenome" name="surname" placeholder="Sobrenome"/>
        <x-forms.input label="Biografia" name="biography" placeholder="Biografia"/>

        <x-forms.divider />

        <x-page-heading>Biblioteca</x-page-heading>

        <x-forms.input label="Nome" name="name" placeholder="Nome"/>
        <x-forms.input label="Endereço" name="address" placeholder="Endereço"/>

        <x-forms.button>Adicionar</x-forms.button>
    </x-forms.form>
</x-layout>

{{--$table->id();--}}
{{--$table->string('title');--}}
{{--$table->string('isbn');--}}
{{--$table->string('year');--}}
{{--$table->string('area');--}}
{{--$table->string('publisher');--}}
{{--$table->timestamps();--}}
