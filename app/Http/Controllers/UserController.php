<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
         $user->password=bcrypt($request->password);
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
         $user->password=bcrypt($request->password);
        $user->save();
    	return redirect('Admin/User/DanhSach');
    }
    public function Xoa($id){
      $user=User::find($id);
        $user->delete();
        return redirect('Admin/User/DanhSach');
    }
    public function postLogin(Request $request){
        $name=$request->UserName;
        $password=$request->Password;
       if(Auth::attempt(["name"=>$name,"password"=>$password])){
        return redirect("/");
       }
       else return redirect("login");
        
    }
    public function LogOut(){
        Auth::logout();
        return redirect("/");
    }
    public function Signup(Request $request){
        $user=new User;
        $user->name=$request->Name;
        $user->email=$request->Email;
         $user->phonenumber=$request->PhoneNumber;
         $user->password=bcrypt($request->password);
        $user->save();
        return view("login");
    }
}
