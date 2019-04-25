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
}
