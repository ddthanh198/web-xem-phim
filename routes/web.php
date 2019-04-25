<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('main');

});

Route::get('/review', function () {
   return view('review'); 
});
Route::get('/login', function () {
   return view('login'); 
});
Route::get('/signup', function () {
   return view('signup'); 
});
Route::get('/infor/{id}',['as'=>'infor','uses'=> 'HomeController@infor']);
Route::get('/search', function () {
   return view('search'); 
});

Route::get('/watch/{id}',['as'=>'watch','uses'=>'HomeController@watch']);
// Route::get("/about",function(){
// 	return view('about');
// });

//Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get("createDB",function(){
	
	//echo DB::table('users')->select(DB::raw('id,name as Uname,email'))->whereRaw('id>2 and email like "%gmail.com" or id < 2')->get();
	$conn = mysqli_connect('localhost', "root", "");
	if(! $conn )
{
  die('Khong the ket noi: ' . mysqli_error());
}{
	echo 'Ket noi thanh cong<br />';
	mysqli_close();
}
});
