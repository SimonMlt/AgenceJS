<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nom' => 'CURPEN',
            'prenom' => 'Jeevesen',
            'email' => 'jeevesen.curpen@gmail.com',
            'password' => Hash::make('rootroot'),
            'adresse' => '88 Boulevard Gallieni',
            'ville' => 'Issy-les-Moulineaux',
            'cp' => '92130',
            'date_naissance' => '1999-07-28',
            'telephone' => '0123456789',
            'role' => 'Admin',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'nom' => 'MALET',
            'prenom' => 'Simon',
            'email' => 'simonmalet92@gmail.com',
            'password' => Hash::make('rootroot'),
            'adresse' => '88 Boulevard Gallieni',
            'ville' => 'Issy-les-Moulineaux',
            'cp' => '92130',
            'date_naissance' => '1999-12-24',
            'telephone' => '0123456789',
            'role' => 'Admin',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'nom' => 'User',
            'prenom' => 'User',
            'email' => 'user@gmail.com',
            'password' => Hash::make('rootroot'),
            'adresse' => '88 Boulevard Gallieni',
            'ville' => 'Issy-les-Moulineaux',
            'cp' => '92130',
            'date_naissance' => '1990-01-02',
            'telephone' => '0123456789',
            'role' => 'User',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'nom' => 'Admin',
            'prenom' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('rootroot'),
            'adresse' => '88 Boulevard Gallieni',
            'ville' => 'Issy-les-Moulineaux',
            'cp' => '92130',
            'date_naissance' => '1990-01-02',
            'telephone' => '0123456789',
            'role' => 'Admin',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
