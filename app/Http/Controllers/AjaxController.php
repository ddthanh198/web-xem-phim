<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DanhGia;
class AjaxController extends Controller
{
    //
    public function GetLike($idUser,$idFilm){
    	$data=DanhGia::where('idUser',$idUser)->where('idFilm',$idFilm)->get();
    	if(count($data)>0) {
    		DanhGia::where('idUser',$idUser)->where('idFilm',$idFilm)->delete();}
    	
   $danhgia=new DanhGia;
   $danhgia->idUser=$idUser;
   $danhgia->idFilm=$idFilm;
   $danhgia->Liked=1;
   $danhgia->save();
    }
      public function GetDislike($idUser,$idFilm){
      	$data=DanhGia::where('idUser',$idUser)->where('idFilm',$idFilm)->get();
    	if(count($data)>0) {
    		DanhGia::where('idUser',$idUser)->where('idFilm',$idFilm)->delete();}
   $danhgia=new DanhGia;
   $danhgia->idUser=$idUser;
   $danhgia->idFilm=$idFilm;
   $danhgia->Liked=0;
   $danhgia->save();
    }
     public function DestroyLike($idUser,$idFilm){
        $data=DanhGia::where('idUser',$idUser)->where('idFilm',$idFilm)->get();
      if(count($data)>0) {
        DanhGia::where('idUser',$idUser)->where('idFilm',$idFilm)->delete();}
   $danhgia=new DanhGia;
   $danhgia->idUser=$idUser;
   $danhgia->idFilm=$idFilm;
   $danhgia->Liked=-1;
   $danhgia->save();
    }

}
