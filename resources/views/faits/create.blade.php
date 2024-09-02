@props(["titre" => "Ajouter un fait"])
<x-layout :titre="$titre">
    <main class="container mt-5">
        <h1 class="text-center mb-4">Ajouter un fait sur les chats</h1>

        <!-- Afficher les erreurs de validation -->
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Erreur!</strong> Veuillez corriger les erreurs suivantes :
                <ul class="mb-0 mt-2">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Afficher le message de succès -->
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Succès!</strong> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Formulaire pour ajouter un nouveau fait -->
        <form action="{{ route('faits.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="contenu" class="form-label">Fait</label>
                <textarea id="contenu" name="contenu" rows="4" class="form-control @error('contenu') is-invalid @enderror" placeholder="Entrez le fait ici...">{{ old('contenu') }}</textarea>
                <!-- Affichage d'un message d'erreur si la validation échoue -->
                @error('contenu')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Ajouter le fait</button>
        </form>
    </main>
</x-layout>
