<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('notes')->insert([
            'etudiant_id'=>1,
            'matiere_id'=>1,
            'moyenne'=>16,
            'appreciation_id'=>1,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
    }
}
