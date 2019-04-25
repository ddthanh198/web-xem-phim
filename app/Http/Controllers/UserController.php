<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Category;
class UserController extends Controller
{
    //
    public function DanhSach(){
    	$user=User::all();
    	return view('Admin/User/DanhSach',['user'=>$user]);
    }
    public function GetThem(){
    	
    	return view('Admin/User/Them');
    }
    public function PostThem(Request $request){
    	$user=new User;
        $user->name=$request->Name;
        $user->email=$request->Email;
         $user->phonenumber=$request->PhoneNumber;
        $user->save();
    	return redirect('Admin/User/DanhSach');
    }
    public function GetSua($id){
      $user=User::find($id);
        return view('Admin/User/Sua',['user'=>$user]);
    }
    public function PostSua($id,Request $request){
    	$user=User::find($id);
    	 
        $user->name=$request->Name;
        $user->email=$request->Email;
         $user->phonenumber=$request->PhoneNumber;
        $user->save();
    	return redirect('Admin/User/DanhSach');
    }
    public function Xoa($id){
      $user=User::find($id);
        $user->delete();
        return redirect('Admin/User/DanhSach');
    }
}
