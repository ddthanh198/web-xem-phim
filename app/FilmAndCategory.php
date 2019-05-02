<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Film;
use App\Category;
class FilmAndCategory extends Model
{
    //
    protected $table="filmandcategory";
    public $timestamps = false;
    public function film(){
    	return $this->beLongsto('App\Film','idFilm','id');
    }
    public function category(){
    	return $this->beLongsto('App\Category','idCategory','id');
    }
    

}
