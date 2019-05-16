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
       

        
    }
    public function Insert($idFilm,$idUser,$content){
       
        $comment=new Comment;
        $comment->iduser=$idUser;
        $comment->idFilm=$idFilm;
        $comment->content=$content;
        $comment->time="1997-04-02";
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
    public function EditComment($idComment){
        $comment=Comment::where('id',$idComment)->get()->shift();
       
        return view("Watch/SaveEditComment",["comment"=>$comment]);
    }
    public function SaveEditComment($content,$idComment){
       $comment=Comment::where('id',$idComment)->get()->shift();
       $comment->content=$content;
       $comment->save();
        echo $comment->content;
    }
    public function DeleteComment($id){
        $comment=Comment::find($id)->delete();
    }
    public function XemThemComment($Trang,$idFilm){
    
        $count=Comment::where("idFilm",$idFilm)->get();
        $comment=Comment::where("idFilm",$idFilm)->get();
        $comment1=$comment->splice($Trang*4,4);
        if(count($count)>$Trang*4)
        return view('Watch/XemThemComment',['comment'=>$comment1]);
    }
}
