<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class HabitationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('habitation')->insert([
            'nom' => 'Bel appartement Paris 18',
            'slug' => Str::random(10),
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vel maximus quam. Maecenas hendrerit molestie turpis, sit amet cursus arcu cursus nec. Praesent vestibulum velit erat, a rutrum purus eleifend vel. Praesent quis dignissim turpis. Aenean ac et.',
            'ville' => 'Paris',
            'cp' => '75000',
            'cuisine' => '1',
            'salle_de_bain' => '1',
            'toilettes' => '1',
            'nb_pieces' => '3',
            'nb_chambres' => '2',
            'surface' => '61',
            'annee' => '1995',
            'prix' => '595000',
            'image1' => 'habitation/appartement.jpeg',
            'image2' => 'habitation/appartement.jpeg',
            'image3' => 'habitation/appartement.jpeg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'user_id' => '1',
            'category_id' => '1',
        ]);
    }
}
