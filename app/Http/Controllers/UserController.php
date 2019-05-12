<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Category;
use DB;
use Hash;

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

        $users = DB::select('select * from user where name = ?', [$name]);

        if (count($users) > 0) {
            $user = $users[0];
            if (Hash::check($password, $user->password)) {
                return redirect("/");
            }
        }
        return redirect("login");
    }

    public function LogOut(){
        Auth::logout();
        return redirect("/");
    }
<<<<<<< HEAD

=======
>>>>>>> develop
    public function Signup(Request $request){
        $name = $request->Name;
        $users = DB::select('select * from user where name = ?', [$name]);
        if (count($users) > 0) {
            return redirect("signup");
        } 

        $user=new User;
        $user->name=$request->Name;
        $user->email=$request->Email;
        $user->phonenumber=$request->PhoneNumber;
        $user->password=bcrypt($request->password);
        $user->save();
<<<<<<< HEAD

=======
>>>>>>> develop
        return redirect("/");
    }

    public function signUpForm() {
        return view('signup');
    }

    public function loginForm() {
        return view('login');
    }

}
