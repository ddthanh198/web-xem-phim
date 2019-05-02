<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Category;
class AdminController extends Controller
{
    //
    public function DanhSach(){
    	$admin=Admin::all();
    	return view('Admin/Admin/DanhSach',['admin'=>$admin]);
    }
    public function GetThem(){
    	
    	return view('Admin/admin/Them');
    }
    public function PostThem(Request $request){
    	$admin=new Admin;
        $admin->name=$request->Name;
        $admin->email=$request->Email;
       $admin->password=$request->password;
        $admin->save();
    	return redirect('Admin/Admin/DanhSach');
    }
    public function GetSua($id){
      $admin=Admin::find($id);
        return view('Admin/Admin/Sua',['admin'=>$admin]);
    }
    public function PostSua($id,Request $request){
    	$admin=Admin::find($id);
    	
        $admin->name=$request->Name;
        $admin->email=$request->Email;
         $admin->password=$request->password;
        $admin->save();
    	return redirect('Admin/Admin/DanhSach');
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
