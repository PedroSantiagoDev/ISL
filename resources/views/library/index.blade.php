<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl">Conheca as Bibliotecas</h1>
        </section>
                <section>
                    <x-section-heading>Todas as Bibliotecas</x-section-heading>
                    <div class="mt-6 space-y-6">
                        @foreach($libraries as $library)
                            <x-library-card-wide :$library />
                        @endforeach
                    </div>
                </section>
    </div>
</x-layout>

