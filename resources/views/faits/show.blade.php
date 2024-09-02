@props(['titre' => 'Le saviez vous?'])
<x-layout :titre="$titre">
    <main>
        <div class="container-fluid vh-100 d-flex justify-content-center align-items-center">
            <div class="fact-card text-center p-4 rounded shadow-sm">
                <p class="lead">{{ $fait->contenu }}</p>
            </div>
        </div>
    </main>
</x-layout>
