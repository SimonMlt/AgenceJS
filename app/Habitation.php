<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habitation extends Model
{
    protected $table = "habitation";

    protected $fillable = ['nom', 'slug', 'description', 'ville', 'cp', 'cuisine', 'salle_de_bain', 'toilettes', 'nb_pieces', 'nb_chambres', 'surface', 'annee', 'prix', 'image1', 'image2', 'image3', 'user_id'];

//    /**
//     * Get category of post
//     * @return \Illuminate\Database\Eloquent\Relations\HasOne
//     */
//    public function category()
//    {
//        return $this->hasOne('App\Category', 'id', 'category_id');
//    }
//
    /**
     * Get post's user
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

}
