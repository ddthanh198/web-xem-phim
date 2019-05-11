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
         $this->validate($request,
            ['PhoneNumber'=>'required|min:9',
             'Name'=>'required|unique:User,name|'
            ],
            ['Name.required'=>'Tên UserName đã tồn tại',
             'Phone.required'=>"Số điện thoại nhập tối thiểu 10 ký tự"
            ]);
        $user=new User;
        $user->admin=0;
        $user->name=$request->Name;
        $user->email=$request->Email;
         $user->phonenumber=$request->PhoneNumber;
         $user->password=bcrypt($request->password);
        $user->save();
        return redirect("login");
    }
    public function CheckUser($name){
           $data=User::Where('name',$name)->get();
        if(count($data)>0) echo "Tên UserName Đã Tồn tại";
       else echo "Tên UserName được nhé";
    }
    public function GetEditUser(){
        return view("Admin/User/Sua");
    }
    public function PostEditUser(Request $request){
        $user=Auth::User();
         $this->validate($request,
            ['PhoneNumber'=>'required|min:9',
             'Name'=>'required|unique:User,name|'
            ],
            ['Name.required'=>'Tên UserName đã tồn tại',
             'Phone.required'=>"Số điện thoại nhập tối thiểu 10 ký tự",
            ]);
        
        $user->admin=0;
        $user->name=$request->Name;
        $user->email=$request->Email;
         $user->phonenumber=$request->PhoneNumber;
         $user->password=bcrypt($request->password);
        $user->save();
        return redirect("/");
    }
}
