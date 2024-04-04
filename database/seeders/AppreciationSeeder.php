<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppreciationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('appreciations')->insert([
            'code'=>'NA',
            'name'=>'Non acquis',
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
    }
}
