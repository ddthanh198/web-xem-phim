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
<<<<<<< HEAD
// Route::get('/signup', function () {
//    return view('signup'); 
// });
Route::get('/infor/{id}',['as'=>'infor','uses'=> 'HomeController@infor']);
=======
Route::get('/signup', function () {
   return view('signup'); 
});
Route::get('/infor/{id}',['as'=>'infor','uses'=> 'InformationController@infor']);
<<<<<<< HEAD
=======
>>>>>>> 4aa25f1... nang cap trang information.blade, khôi phục lại mainframe, edit, delete bình luận đang còn lỗi
>>>>>>> develop
Route::get('/search', function () {
   return view('search'); 
});

//Route::get('/watch/{id}',['as'=>'watch','uses'=>'HomeController@watch']);
Route::get('/watch/{id}',function ($id){
	return view('watch',['idFilm'=>$id]);
});

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


//
Route::group(['prefix'=>'Admin','middleware'=>'Admin'],function(){

Route::group(['prefix'=>'Film'],function(){
Route::get('DanhSach','FilmController@DanhSach');
Route::get('Them','FilmController@GetThem');
Route::post('Them','FilmController@PostThem');
Route::get('Sua/{id}','FilmController@GetSua');
Route::post('Sua/{id}','FilmController@PostSua');
Route::get('Xoa/{id}','FilmController@Xoa');
});

Route::group(['prefix'=>'Category'],function(){
Route::get('DanhSach','CategoryController@DanhSach');
Route::get('Them','CategoryController@GetThem');
Route::post('Them','CategoryController@PostThem');
Route::get('Sua/{id}','CategoryController@GetSua');
Route::post('Sua/{id}','CategoryController@PostSua');
Route::get('Xoa/{id}','CategoryController@Xoa');
});

Route::group(['prefix'=>'User'],function(){
Route::get('DanhSach','UserController@DanhSach');
Route::get('Them','UserController@GetThem');
Route::post('Them','UserController@PostThem');
Route::get('Sua/{id}','UserController@GetSua');
Route::post('Sua/{id}','UserController@PostSua');
Route::get('Xoa/{id}','UserController@Xoa');
});

Route::group(['prefix'=>'Admin'],function(){
Route::get('DanhSach','AdminController@DanhSach');
Route::get('Them','AdminController@GetThem');
Route::post('Them','AdminController@PostThem');
Route::get('Sua/{id}','AdminController@GetSua');
Route::post('Sua/{id}','AdminController@PostSua');
Route::get('Xoa/{id}','AdminController@Xoa');
});

Route::group(['prefix'=>'Comment'],function(){
Route::get('DanhSach','CommentController@DanhSach');

Route::get('Xoa/{id}','CommentController@Xoa');
});

Route::group(['prefix'=>'FilmAndCategory'],function(){
Route::get('DanhSach','FilmAndCategoryController@DanhSach');
Route::get('Them','FilmAndCategoryController@GetThem');
Route::post('Them','FilmAndCategoryController@PostThem');
Route::get('Sua/{idFilm}/{idCategory}','FilmAndCategoryController@GetSua');
Route::post('Sua/{idFilm}/{idCategory}','FilmAndCategoryController@PostSua');
Route::get('Xoa/{idFilm}/{idCategory}','FilmAndCategoryController@Xoa');
});
Route::post('TimKiem','FilmAndCategoryController@TimKiem');
});
Route::get('/TrangChu','TrangChuController@category');

Route::get('/DangNhap',function(){
	return view('Page.dangnhap');
});
//
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> develop
Route::get('WatchFilm',function(){
	return view('watch');
});
Route::get('/Ajax/Like/{idUser}/{idFilm}','AjaxController@GetLike');
Route::get('/Ajax/Dislike/{idUser}/{idFilm}','AjaxController@GetDislike');
Route::get('/Ajax/DestroyLike/{idUser}/{idFilm}','AjaxController@DestroyLike');
Route::get('Comment/Xoa/{id}','CommentController@XoaComment');

Route::get('Comment','CommentController@Comment');

Route::get('CheckUserAdmin/{user}','AdminController@CheckUserAdmin');
Route::get("CommentTest","CommentController@CommentTest");

Route::get("SearchFilm/{id}","FilmController@SearchFilm");

<<<<<<< HEAD

Route::post("login","UserController@postLogin");

=======
<<<<<<< HEAD

Route::post("login","UserController@postLogin");
=======
>>>>>>> af3950bfbad09599f95c528ca76f29c19f9ff187
>>>>>>> develop
Route::get("/LogOut","UserController@LogOut");

Route::get("signup","UserController@signUpForm");
Route::post("signup","UserController@Signup");

Route::get("login","UserController@loginForm");
Route::post("login","UserController@postLogin");



Route::group(['middleware'=>['web']],function(){
 Route::get("Session",function(){
 	Session::put('Test','Laravel');
 	echo "đã chạy session";
 });
 Route::get('Comment/Insert/{idFilm}/{idUser}/{content}','CommentController@Insert');
});

Route::get('WatchFilm/{id}','FilmController@WatchFilm');



<<<<<<< HEAD

Route::get("EditComment/{idComment}","CommentController@EditComment");
Route::get("RightFilm/{id}","FilmController@RightFilm");
=======
=======

<<<<<<< HEAD
Route::get('signup', 'SignUpController@signUpForm');
Route::post('create', 'SignUpController@signUp');
>>>>>>> 83837fcb7daf3c33bb36f61846a662266d41e361
=======
Route::get("EditComment/{idComment}","CommentController@EditComment");
Route::get("RightFilm/{id}","FilmController@RightFilm");
>>>>>>> 46df54a... nd admin comment like search
>>>>>>> develop
