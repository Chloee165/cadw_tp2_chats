@props(['titre' => 'Faits sur les chats'])
<x-layout :titre="$titre">
    <main id="liste">
        <h1>Liste de faits sur les chats</h1>
        <div class="container mt-5">
            <div class="scrollable-list">
                <!-- Affichage de chaque fait sur les chats à l'aide d'une boucle -->
                @foreach ($faits as $fait)
                    <!-- Création d'une carte pour chaque fait -->
                    <x-fact-card :id="$fait->id" :fact="$fait->court_fait" />
                @endforeach
            </div>
        </div>
    </main>
</x-layout>
