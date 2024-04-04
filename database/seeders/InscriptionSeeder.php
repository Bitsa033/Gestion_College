<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('inscriptions')->insert([
            'etudiant_id'=>2,
            'classe_id'=>1,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
    }
}
