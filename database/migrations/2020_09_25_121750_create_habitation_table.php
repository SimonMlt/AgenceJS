<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabitationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habitation', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('slug')->unique();
            $table->text('description');
            $table->string('ville');
            $table->string('cp');
            $table->boolean('cuisine');
            $table->boolean('salle_de_bain');
            $table->boolean('toilettes');
            $table->integer('nb_pieces');
            $table->integer('nb_chambres');
            $table->float('surface');
            $table->integer('annee');
            $table->float('prix', 11, 2);
            $table->string('image1');
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('habitation');
    }
}
