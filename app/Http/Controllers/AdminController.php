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
        $admini->name=$request->Name;
        $admin->email=$request->Email;
        $admin->phonenumber=$request->PhoneNumber;
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
         $admin->phonenumber=$request->PhoneNumber;
        $admin->save();
    	return redirect('Admin/Admin/DanhSach');
    }
    public function Xoa($id){
      $Admin=Admin::find($id);
        $Admin->Admin();
        return redirect('Admin/Admin/DanhSach');
    }
}
