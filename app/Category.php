<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categorie_habitation";
    protected $fillable = ['name'];

    public $timestamps = false;

    /**
     * Get all posts with the same category
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function habitation()
    {
        return $this->hasMany('App\Habitation', 'category_id', 'id');
    }
}

