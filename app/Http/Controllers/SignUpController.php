<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SignUpController extends Controller
{
    public function signUpForm() {
        return view('signup');
    }

    public function signUp(Request $request) {

        $name = $request->input('username');
        $password = $request->input('password');
        $phonenumber = '';
        $email = '';

        DB::insert('insert into user (name, password, phonenumber, email) values(?, ?, ?, ?)',[$name, $password, $phonenumber, $email]);

        echo "Sign Up Successfully!<br/>";
    }
}
