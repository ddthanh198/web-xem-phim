<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;
use DB;
use App\Comment;
class InformationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function infor($id){
        $film =new Film();
        $data= $film->where('id',$id)->get();
        $cate= DB::select( DB::raw("SELECT name FROM category WHERE id IN(SELECT idCategory FROM filmandcategory WHERE idFilm=".$id.")"));
        $comment=new Comment();
        $Cdata = $comment->where('idFilm',$id)->orderBy('time','asc')->get();
        // var_dump($Cdata);
        // var_dump($data);
        // var_dump($comment);
        return view('information',['filmInfo'=>$data,'comment'=>$Cdata,'cate'=>$cate,'id'=>$id]);
    }
}