<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Film;
class CommentController extends Controller
{
    //
    public function DanhSach(){
    	$comment=Comment::all();
    	return view('Admin/Comment/DanhSach',['comment'=>$comment]);
    }
   
    public function Xoa($id){
      $comment=Comment::find($id);
        $comment->delete();
        return redirect('Admin/Comment/DanhSach');
    }
     public function XoaComment($id){
      $comment=Comment::find($id);
        $comment->delete();
       return redirect('WatchFilm');
        
    }
    public function Insert($idFilm,$idUser,$content){
       
        $comment=new Comment;
        $comment->iduser=$idUser;
        $comment->idFilm=$idFilm;
        $comment->content=$content;
        $comment->time=now();
        $comment->save();
        $name=$comment->User->name;
       return view("Watch/InsertComment",['comment'=>$comment]);
      

    }
    public function Test(){
        return view('test');
       
    }
    public function CommentTest(){
        return view("WatchFilm/InsertComment");
    }
}
