<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;
use App\Category;
class CategoryController extends Controller
{
    //
    public function DanhSach(){
    	$category=Category::all();
    	return view('Admin/Category/DanhSach',['category'=>$category]);
    }
    public function GetThem(){
    	
    	return view('Admin/Category/Them');
    }
    public function PostThem(Request $request){
    	$category=new Category;
       
        $category->name=$request->Name;
       
        $category->save();
    	return redirect('Admin/Category/DanhSach');
    }
    public function GetSua($id){
      $category=category::find($id);
        return view('Admin/Category/Sua',['category'=>$category]);
    }
    public function PostSua($id,Request $request){
    	$category=category::find($id);
    
        $category->name=$request->Name;
       
        $category->save();
    	return redirect('Admin/Category/DanhSach');
    }
    public function Xoa($id){
      $category=category::find($id);
        $category->delete();
        return redirect('Admin/Category/DanhSach');
    }
}
