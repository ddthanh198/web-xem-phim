<?php

namespace App\Http\Controllers;
use App\Film;
use App\Category;
use App\FilmAndCategory;

use Illuminate\Http\Request;

class TrangChuController extends Controller
{
    //
    public function category(){
    	
    	return view('Page.trangchu');
    }
  
}
