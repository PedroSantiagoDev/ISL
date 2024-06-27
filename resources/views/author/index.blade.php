<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl">Conheca os Principais Autores</h1>
        </section>

        <section>
            <x-section-heading>Todos os Autores</x-section-heading>
            <div class="mt-6 space-y-6">
                @foreach($authors as $author)
                    <x-author-card-wide :$author />
                @endforeach
            </div>
        </section>
    </div>
</x-layout>
