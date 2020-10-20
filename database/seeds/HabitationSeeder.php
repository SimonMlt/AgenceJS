<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
            'slug' => strtolower(Str::random(10)),
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
        DB::table('habitation')->insert([
            'nom' => 'Belle maison à Cannes',
            'slug' => strtolower(Str::random(10)),
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vel maximus quam. Maecenas hendrerit molestie turpis, sit amet cursus arcu cursus nec. Praesent vestibulum velit erat, a rutrum purus eleifend vel. Praesent quis dignissim turpis. Aenean ac et.',
            'ville' => 'Cannes',
            'cp' => '06150',
            'cuisine' => '2',
            'salle_de_bain' => '3',
            'toilettes' => '2',
            'nb_pieces' => '9',
            'nb_chambres' => '6',
            'surface' => '263',
            'annee' => '2010',
            'prix' => '1613000',
            'image1' => 'habitation/maison.jpg',
            'image2' => 'habitation/maison.jpg',
            'image3' => 'habitation/maison.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'user_id' => '2',
            'category_id' => '2',
        ]);
        DB::table('habitation')->insert([
            'nom' => 'Magnifique Villa à Saint-Tropez',
            'slug' => strtolower(Str::random(10)),
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vel maximus quam. Maecenas hendrerit molestie turpis, sit amet cursus arcu cursus nec. Praesent vestibulum velit erat, a rutrum purus eleifend vel. Praesent quis dignissim turpis. Aenean ac et.',
            'ville' => 'Saint-Tropez',
            'cp' => '83990',
            'cuisine' => '4',
            'salle_de_bain' => '5',
            'toilettes' => '4',
            'nb_pieces' => '15',
            'nb_chambres' => '12',
            'surface' => '639',
            'annee' => '2019',
            'prix' => '7199000',
            'image1' => 'habitation/villa.jpg',
            'image2' => 'habitation/villa.jpg',
            'image3' => 'habitation/villa.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'user_id' => '1',
            'category_id' => '3',
        ]);
        DB::table('habitation')->insert([
            'nom' => 'Bel appartement Paris 18',
            'slug' => strtolower(Str::random(10)),
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
        DB::table('habitation')->insert([
            'nom' => 'Belle maison à Cannes',
            'slug' => strtolower(Str::random(10)),
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vel maximus quam. Maecenas hendrerit molestie turpis, sit amet cursus arcu cursus nec. Praesent vestibulum velit erat, a rutrum purus eleifend vel. Praesent quis dignissim turpis. Aenean ac et.',
            'ville' => 'Cannes',
            'cp' => '06150',
            'cuisine' => '2',
            'salle_de_bain' => '3',
            'toilettes' => '2',
            'nb_pieces' => '9',
            'nb_chambres' => '6',
            'surface' => '263',
            'annee' => '2010',
            'prix' => '1613000',
            'image1' => 'habitation/maison.jpg',
            'image2' => 'habitation/maison.jpg',
            'image3' => 'habitation/maison.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'user_id' => '2',
            'category_id' => '2',
        ]);
        DB::table('habitation')->insert([
            'nom' => 'Magnifique Villa à Saint-Tropez',
            'slug' => strtolower(Str::random(10)),
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vel maximus quam. Maecenas hendrerit molestie turpis, sit amet cursus arcu cursus nec. Praesent vestibulum velit erat, a rutrum purus eleifend vel. Praesent quis dignissim turpis. Aenean ac et.',
            'ville' => 'Saint-Tropez',
            'cp' => '83990',
            'cuisine' => '4',
            'salle_de_bain' => '5',
            'toilettes' => '4',
            'nb_pieces' => '15',
            'nb_chambres' => '12',
            'surface' => '639',
            'annee' => '2019',
            'prix' => '7199000',
            'image1' => 'habitation/villa.jpg',
            'image2' => 'habitation/villa.jpg',
            'image3' => 'habitation/villa.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'user_id' => '1',
            'category_id' => '3',
        ]);
        DB::table('habitation')->insert([
            'nom' => 'Bel appartement Paris 18',
            'slug' => strtolower(Str::random(10)),
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
        DB::table('habitation')->insert([
            'nom' => 'Belle maison à Cannes',
            'slug' => strtolower(Str::random(10)),
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vel maximus quam. Maecenas hendrerit molestie turpis, sit amet cursus arcu cursus nec. Praesent vestibulum velit erat, a rutrum purus eleifend vel. Praesent quis dignissim turpis. Aenean ac et.',
            'ville' => 'Cannes',
            'cp' => '06150',
            'cuisine' => '2',
            'salle_de_bain' => '3',
            'toilettes' => '2',
            'nb_pieces' => '9',
            'nb_chambres' => '6',
            'surface' => '263',
            'annee' => '2010',
            'prix' => '1613000',
            'image1' => 'habitation/maison.jpg',
            'image2' => 'habitation/maison.jpg',
            'image3' => 'habitation/maison.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'user_id' => '2',
            'category_id' => '2',
        ]);
        DB::table('habitation')->insert([
            'nom' => 'Magnifique Villa à Saint-Tropez',
            'slug' => strtolower(Str::random(10)),
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vel maximus quam. Maecenas hendrerit molestie turpis, sit amet cursus arcu cursus nec. Praesent vestibulum velit erat, a rutrum purus eleifend vel. Praesent quis dignissim turpis. Aenean ac et.',
            'ville' => 'Saint-Tropez',
            'cp' => '83990',
            'cuisine' => '4',
            'salle_de_bain' => '5',
            'toilettes' => '4',
            'nb_pieces' => '15',
            'nb_chambres' => '12',
            'surface' => '639',
            'annee' => '2019',
            'prix' => '7199000',
            'image1' => 'habitation/villa.jpg',
            'image2' => 'habitation/villa.jpg',
            'image3' => 'habitation/villa.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'user_id' => '1',
            'category_id' => '3',
        ]);
        DB::table('habitation')->insert([
            'nom' => 'Bel appartement Paris 18',
            'slug' => strtolower(Str::random(10)),
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
        DB::table('habitation')->insert([
            'nom' => 'Belle maison à Cannes',
            'slug' => strtolower(Str::random(10)),
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vel maximus quam. Maecenas hendrerit molestie turpis, sit amet cursus arcu cursus nec. Praesent vestibulum velit erat, a rutrum purus eleifend vel. Praesent quis dignissim turpis. Aenean ac et.',
            'ville' => 'Cannes',
            'cp' => '06150',
            'cuisine' => '2',
            'salle_de_bain' => '3',
            'toilettes' => '2',
            'nb_pieces' => '9',
            'nb_chambres' => '6',
            'surface' => '263',
            'annee' => '2010',
            'prix' => '1613000',
            'image1' => 'habitation/maison.jpg',
            'image2' => 'habitation/maison.jpg',
            'image3' => 'habitation/maison.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'user_id' => '2',
            'category_id' => '2',
        ]);
        DB::table('habitation')->insert([
            'nom' => 'Magnifique Villa à Saint-Tropez',
            'slug' => strtolower(Str::random(10)),
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vel maximus quam. Maecenas hendrerit molestie turpis, sit amet cursus arcu cursus nec. Praesent vestibulum velit erat, a rutrum purus eleifend vel. Praesent quis dignissim turpis. Aenean ac et.',
            'ville' => 'Saint-Tropez',
            'cp' => '83990',
            'cuisine' => '4',
            'salle_de_bain' => '5',
            'toilettes' => '4',
            'nb_pieces' => '15',
            'nb_chambres' => '12',
            'surface' => '639',
            'annee' => '2019',
            'prix' => '7199000',
            'image1' => 'habitation/villa.jpg',
            'image2' => 'habitation/villa.jpg',
            'image3' => 'habitation/villa.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'user_id' => '1',
            'category_id' => '3',
        ]);
    }
}
