<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;
use App\Category;
class FilmController extends Controller
{
    //
    public function DanhSach(){
        $film=Film::all();
        return view('Admin/Film/DanhSach',['film'=>$film]);
    }
    public function GetThem(){
        return view('Admin/Film/Them');
    }
    
    public function PostThem(Request $request){
   $film=new Film;
        if($request->hasFile('Video')){
            $file=$request->file('Video');
            $name=$file->getClientOriginalName();
            $file->move('upload/film/',$name);
           $film->source="upload/film/".$name;
        }
         if($request->hasFile('HinhAnh')){
            $file=$request->file('HinhAnh');
            $name=$file->getClientOriginalName();
            $file->move('upload/hinhanh/',$name);
           $film->hinhanh=$name;
        }
        
        
        $film->nation=$request->Nation;
        $film->NoiBat=$request->NoiBat;
        $film->name=$request->Name;
        $film->year=$request->Year;
        $film->save();
        return redirect('Admin/Film/Them');
    }
    public function GetSua($id){
      $film=Film::find($id);
        return view('Admin/Film/Sua',['film'=>$film]);
    }
    public function PostSua($id,Request $request){
         if($request->hasFile('Video')){
            $file=$request->file('Video');
            $name=$file->getClientOriginalName();
            $file->move('upload/film/',$name);
           $film->source="upload/film/".$name;
        }
         if($request->hasFile('HinhAnh')){
            $file=$request->file('HinhAnh');
            $name=$file->getClientOriginalName();
            $file->move('upload/hinhanh/',$name);
           $film->hinhanh=$name;
        }
        $film=Film::find($id);
        $film->nation=$request->Nation;
        $film->NoiBat=$request->NoiBat;
        $film->name=$request->Name;
        $film->year=$request->Year;
        $film->save();
        return redirect('Admin/Film/DanhSach');
    }
    public function Xoa($id){
        $film=Film::find($id);
        $film->delete();
        return redirect('Admin/Film/DanhSach');
    }
    public function SearchFilm($idFilm){
         return view("Watch/DisplayComment",["idFilm"=>$idFilm]);
    }
   public function RightFilm($id){
  return view("Watch/AjaxSearchFilm",["idFilm"=>$id]);
   }

}