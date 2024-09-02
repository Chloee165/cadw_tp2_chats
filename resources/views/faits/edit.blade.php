@props(['titre' => 'Modification'])
<x-layout :titre="$titre">
    <div class="container">
        <h1>Modifier le fait</h1>

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

        <!-- Formulaire de modification du fait -->
        <form action="{{ route('faits.update', $fait->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Champ de contenu du fait -->
            <div class="form-group mb-3">
                <label for="contenu" class="form-label">Contenu du fait</label>
                <input type="text" id="contenu" name="contenu" class="form-control"
                    value="{{ old('contenu', $fait->contenu) }}" required maxlength="255">
            </div>

            <!-- Bouton de soumission -->
            <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
            <a href="{{ route('faits.index') }}" class="btn btn-secondary">Annuler</a>
        </form>
    </div>
</x-layout>
