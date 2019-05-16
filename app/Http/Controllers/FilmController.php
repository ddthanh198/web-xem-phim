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
        
         $film->content=$request->Content;
          $film->NSX=$request->NSX;
           $film->author=$request->Author;
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
          $film=Film::find($id);
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
      
         $film->content=$request->Content;
          $film->NSX=$request->NSX;
           $film->author=$request->Author;
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
    public function SearchFilm($TextSearch){
         return view("Watch/DisplayComment",["TextSearch"=>$TextSearch]);
    }
   public function RightFilm($id){
  return view("Watch/AjaxSearchFilm",["idFilm"=>$id]);
   }
   public function XemThemFilm($TrangFilm,$TextSearch){
       $count=Film::where('id','like','%'.$TextSearch."%")->get();
        $RightFilm=Film::where('id','like','%'.$TextSearch."%")->get();
        $RightFilm1=$RightFilm->splice($TrangFilm*4,4);
        if(count($count)>$TrangFilm*4)
        return view('Watch/XemThemFilm',['RightFilm'=>$RightFilm1]);
   }
  public function XemThemFilmHome($TrangFilm){
    $count=Film::where('NoiBat',0)->get();
    $RightFilm=Film::where('NoiBat',0)->get();
    $RightFilm1=$RightFilm->splice($TrangFilm*4,4);
    if(count($count)>$TrangFilm*4)
        return view('Watch/XemThemFilm',['RightFilm'=>$RightFilm1]);
  }
}