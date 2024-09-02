@props(['titre' => 'Chats'])
<x-layout :titre="$titre">
    <section class="faits-chats-section">
        <div class="fait-chats">
            <h1>Fait aléatoire sur les chats</h1>
            <p>{{ $fait->contenu }}</p>
        </div>
        <div class="img-chats">
            @foreach ($chatImages as $chatImage)
                <img src="{{ $chatImage['url'] }}" alt="Images de chat aléatoire">
            @endforeach
        </div>
    </section>

    </main>
</x-layout>
