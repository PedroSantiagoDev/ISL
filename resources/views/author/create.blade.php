<x-layout>
    <x-page-heading>Autor</x-page-heading>

    <x-forms.form method="POST" action="/author">
        <x-forms.input label="Nome" name="first_name" placeholder="Nome"/>
        <x-forms.input label="Sobrenome" name="last_name" placeholder="Sobrenome"/>
        <x-forms.input label="Biografia" name="biography" placeholder="Biografia"/>

        <x-forms.button>Adicionar</x-forms.button>
    </x-forms.form>
</x-layout>
