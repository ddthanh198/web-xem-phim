@extends('mainframe')
@section('title')
<title>Movie Review | Review</title>
@endsection
@section('webMain')
<main>
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card bg-light">
                <div class="card-header">
                    <h3>Sign In</h3>
                </div>
                <div class="card-body">
                    <form action="login" method="post">
                         <input type="hidden" name="_token" value="{{csrf_token()}}" />
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
<<<<<<< HEAD
                            <input type="text" class="form-control" placeholder="username" name="username">
=======
                            <input type="text" class="form-control" placeholder="username" name="UserName">
>>>>>>> develop
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
<<<<<<< HEAD
                            <input type="password" class="form-control" placeholder="password" name="password">
=======
                            <input type="password" class="form-control" placeholder="password" name="Password">
>>>>>>> develop
                        </div>
                        <!-- <div class="row align-items-center remember">
                            <input type="checkbox" style="color:black">Remember Me
                        </div> -->
                        <div class="form-group">
                            <input type="submit" value="Login" class="btn float-right login_btn">
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                        Don't have an account?<a href="#">Sign Up</a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="#">Forgot your password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection