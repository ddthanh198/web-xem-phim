<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    //
    public $timestamps = false;
     protected $table="film";
    public function Comment(){
    	return $this->hasMany('App\Comment','idFilm','id');
    }
    public function FilmAndCategory(){
    	return $this->hasMany('App\FilmAndCategory','idFilm','id');
    }
    
}
