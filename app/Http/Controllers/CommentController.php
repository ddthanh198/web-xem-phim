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
<<<<<<< HEAD
        $comment->time=now();
=======
        $comment->time="1997-04-02";
>>>>>>> develop
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
        $comment=Comment::Where('id',$idComment);
         echo "<td><input class='form-control' name='EditComment' value='$comment->content' /></td>
         <td></td><td></td>
         <td>Hủy &nbsp;&nbsp;&nbsp; Lưu</td>";
    }
}
