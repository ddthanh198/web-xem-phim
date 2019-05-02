<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Film;
use App\User;
class Comment extends Model
{
    //
    protected $table="comment";
     public $timestamps = false;
     public function Film(){
     	return $this->beLongsto('App\Film','idFilm','id');
     }
     public function User(){
     	return $this->beLongsto('App\User','iduser','id');
     }
}
