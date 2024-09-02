<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fait;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class FaitSeeder extends Seeder
{
    /**
     * Exécute les seeds de la base de données.
     *
     */
    public function run(): void
    {
        // Définir le chemin du fichier JSON
        $filePath = database_path('data/cat-facts.json');

        // Vérifier si le fichier existe
        if (!File::exists($filePath)) {
            throw new \Exception("Fichier non trouvé à l'emplacement : " . $filePath);
        }

        // Lire le contenu du fichier JSON
        $json = File::get($filePath);

        // Décoder le JSON en tableau associatif
        $data = json_decode($json, true);

        // Vérifier les erreurs de décodage JSON
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new \Exception("Erreur de décodage JSON : " . json_last_error_msg());
        }

        // Vérifier la présence de la clé 'data' et s'assurer qu'il s'agit d'un tableau
        if (isset($data['data']) && is_array($data['data'])) {
            // Boucler à travers chaque élément du tableau 'data'
            foreach ($data['data'] as $faitData) {
                // Vérifier que la clé 'fact' existe dans chaque élément
                if (isset($faitData['fact'])) {
                    // Créer un nouvel enregistrement dans la table 'faits'
                    Fait::create([
                        'contenu' => $faitData['fact']
                    ]);
                } else {
                    // Enregistrer un avertissement si la clé 'fact' est manquante
                    Log::warning('Clé "fact" manquante dans les données : ' . json_encode($faitData));
                }
            }
        } else {
            // Lancer une exception si la structure JSON est invalide
            throw new \Exception("Structure JSON invalide : clé 'data' attendue contenant un tableau.");
        }
    }
}
