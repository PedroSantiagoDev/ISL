<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl">Vamos Encontrar o Seu Próximo Livro</h1>

            <x-forms.form action="/search" class="mt-6">
                <x-forms.input :label="false" name="q" placeholder="Lógica de Programação..."></x-forms.input>
            </x-forms.form>
        </section>

        <section class="pt-10">
            <x-section-heading>Livros em Destaque</x-section-heading>

            <div class="grid lg:grid-cols-3 gap-8 mt-6">
{{--                @foreach($featuredBooks as $book)--}}
{{--                    <x-book-card :$book />--}}
{{--                @endforeach--}}
            </div>
        </section>

        <section>
            <x-section-heading>Todos os Livros</x-section-heading>

            <div class="mt-6 space-y-6">
{{--                @foreach($books as $book)--}}
{{--                    <x-book-card-wide :$book />--}}
{{--                @endforeach--}}
            </div>
        </section>
    </div>
</x-layout>
