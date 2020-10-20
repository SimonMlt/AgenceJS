<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorie_habitation')->insert([
            'name' => 'Appartement',
        ]);
        DB::table('categorie_habitation')->insert([
            'name' => 'Maison',
        ]);
        DB::table('categorie_habitation')->insert([
            'name' => 'Villa',
        ]);
    }
}
