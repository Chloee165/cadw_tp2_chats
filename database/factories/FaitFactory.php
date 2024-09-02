<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fait;
use Illuminate\Support\Facades\File;

class FaitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $filePath = database_path('data' . DIRECTORY_SEPARATOR . 'cat-facts.json');

        if (!File::exists($filePath)) {
            throw new \Exception("File not found at path: " . $filePath);
        }

        $json = File::get($filePath);
        $faits = json_decode($json, true);

        foreach ($faits as $faitData) {
            Fait::create([
                'contenu' => $faitData['fact'] ?? $faitData
            ]);
        }
    }
}
