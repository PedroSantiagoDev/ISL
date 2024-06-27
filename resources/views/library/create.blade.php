<x-layout>
    <x-page-heading>Biblioteca</x-page-heading>

    <x-forms.form method="POST" action="/library">
        <x-forms.input label="Nome" name="name" placeholder="Nome"/>
        <x-forms.input label="Endereço" name="address" placeholder="Endereço"/>

        <x-forms.button>Adicionar</x-forms.button>
    </x-forms.form>
</x-layout>
