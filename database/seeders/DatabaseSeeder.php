<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\etudiant;
use App\Models\User;
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
        User::factory()
        ->has(etudiant::factory()->count(4))
        ->count(10)
        ->create();
        // $this->call([
        //     InscriptionSeeder::class
        //     NoteSeeder::class
        //     UserSeeder::class,
        //     ClasseSeeder::class,
        //     EtudiantSeeder::class
        //     AppreciationSeeder::class
        //     MatiereSeeder::class
        // ]);
        
    }
}
