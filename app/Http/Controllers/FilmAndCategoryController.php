<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FilmAndCategory;
use App\Film;
use App\Category;
class FilmAndCategoryController extends Controller
{
    //
    public function DanhSach(){
        $category=FilmAndCategory::all();
        return view('Admin\FilmAndCategory\DanhSach',['category'=>$category]);
    }
    public function GetThem(){
        $film=Film::all();
        $category=Category::all();
        return view('Admin/FilmAndCategory/Them',['film'=>$film,'category'=>$category]);
    }
    public function PostThem(Request $request){
        $FilmAndCategory=new FilmAndCategory;
        $FilmAndCategory->idFilm=$request->IdFilm;
        $FilmAndCategory->idCategory=$request->IdCategory;
       $FilmAndCategory->save();
        return view('Admin/FilmAndCategory/DanhSach');
    }
    public function GetSua($idFilm,$idCategory){
        $film=Film::find($idFilm);
        $category=Category::find($idCategory);
        return view('Admin/FilmAndCategory/Sua',['film'=>$film],['category'=>$category]);
    }
    public function PostSua($idFilm,$idCategory,Request $request){
       $search=FilmAndCategory::Where('idFilm','like',$idFilm)->Where('idCategory','like',$idCategory)->delete();
      $search=new FilmAndCategory;
       $search->idFilm=$request->IdFilm;
        $search->idCategory=$request->IdCategory;
       
        $search->save();
        return redirect('Admin/FilmAndCategory/DanhSach');
      
    }
    public function Xoa($idFilm,$idCategory){
        FilmAndCategory::Where('idFilm','like',$idFilm)->Where('idCategory','like',$idCategory)->delete();
        return redirect('Admin/FilmAndCategory/DanhSach');
    }
    public function TimKiem(){
        
    }

}
