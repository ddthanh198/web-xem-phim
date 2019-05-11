<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\User;
use App\Category;
class AdminController extends Controller
{
    //
    public function DanhSach(){
    	$admin=User::all();
    	return view('Admin/Admin/DanhSach',['admin'=>$admin]);
    }
    public function GetThem(){
    	
    	return view('Admin/admin/Them');
    }
     public function PostThem(Request $request){
         $this->validate($request,
            ['PhoneNumber'=>'required|min:9',
             'Name'=>'required|unique:User,name|'
            ],
            ['Name.required'=>'Tên UserName đã tồn tại',
             'Phone.required'=>"Số điện thoại nhập tối thiểu 10 ký tự"
            ]);
        $user=new User;
        $user->admin=1;
        $user->name=$request->Name;
        $user->email=$request->Email;
         $user->phonenumber=$request->PhoneNumber;
         $user->password=bcrypt($request->password);
        $user->save();
        return redirect("Admin/Admin/DanhSach");
    }
    public function GetSua($id){
      $admin=Admin::find($id);
        return view('Admin/Admin/Sua',['admin'=>$admin]);
    }
    public function PostSua($id,Request $request){
    	 $this->validate($request,
            ['PhoneNumber'=>'required|min:9',
             'Name'=>'required|unique:User,name|'
            ],
            ['Name.required'=>'Tên UserName đã tồn tại',
             'Phone.required'=>"Số điện thoại nhập tối thiểu 10 ký tự"
            ]);
      $user=Auth::User();
        $user->admin=1;
        $user->name=$request->Name;
        $user->email=$request->Email;
         $user->phonenumber=$request->PhoneNumber;
         $user->password=bcrypt($request->password);
        $user->save();
        return redirect("Admin/Admin/DanhSach");
    }
    public function Xoa($id){
      $Admin=Admin::find($id);
        $Admin->delete();
        return redirect('Admin/Admin/DanhSach');
    }
    public function CheckUserAdmin($user){
        $data=Admin::Where('name',$user)->get();
        if(count($data)>0) echo 0;
        else  echo 1;
        
        
    }
}
