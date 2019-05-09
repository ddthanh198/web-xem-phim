<?php

namespace App;
use App\Film;
use App\FilmAndCategory;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
     public $timestamps = false;
    protected $table="category";
    public function filmHome(){
    	return $this->hasManyThrough('App\Film','App\FilmAndCategory','idFilm','idCategory','id');
    }
    public function FilmAndCategory(){
    	return $this->hasMany('App\FilmAndCategory','idCategory','id');
    }
}
