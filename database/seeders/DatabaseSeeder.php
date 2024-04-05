<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Factories\EtudiantFactory;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            // InscriptionSeeder::class
            // NoteSeeder::class
            // UserSeeder::class,
            ClasseSeeder::class,
            // EtudiantSeeder::class
            // AppreciationSeeder::class
            // MatiereSeeder::class
        ]);
    }
}
