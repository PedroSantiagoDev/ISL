<x-layout>
    <x-page-heading>Registar</x-page-heading>

    <x-forms.form method="POST" action="/register" enctype="multipart/form-data">
        <x-forms.input label="Nome" name="name" />
        <x-forms.input label="Email" name="email" type="email" />
        <x-forms.input label="Senha" name="password" type="password" />
        <x-forms.input label="Confirmação de Senha" name="password_confirmation" type="password" />

        <x-forms.button>Criar Conta</x-forms.button>
    </x-forms.form>
</x-layout>
