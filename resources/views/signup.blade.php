@extends('mainframe')
@section('title')
<title>Movie Review | Review</title>
@endsection
@section('webMain')

<main>
    <div class="container">
        <div class=" bg-light signup-form">
                <h4 class="card-title mt-3 text-center">Create Account</h4>
<<<<<<< HEAD
                <form action="signup" method="post">
                         <input type="hidden" name="_token" value="{{csrf_token()}}" />
=======
<<<<<<< HEAD
                <form action="signup" method="post">
                         <input type="hidden" name="_token" value="{{csrf_token()}}" />
=======
                <form action="/create" method="post" ">
                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
>>>>>>> 83837fcb7daf3c33bb36f61846a662266d41e361
>>>>>>> develop
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
<<<<<<< HEAD
                        <input name="PhoneNumber" class="form-control" placeholder="Phone Number" type="text">
=======
<<<<<<< HEAD
                        <input name="PhoneNumber" class="form-control" placeholder="Phone Number" type="text">
=======
                        <input name="fullName" class="form-control" placeholder="Full name" type="text">
>>>>>>> 83837fcb7daf3c33bb36f61846a662266d41e361
>>>>>>> develop
                    </div>

                    <!-- <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                        </div>
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> develop
                        <input name="Email" class="form-control" placeholder="Email address" type="email">
                    </div> 
=======
                        <input name="" class="form-control" placeholder="Email address" type="email">
                    </div>  -->
>>>>>>> 83837fcb7daf3c33bb36f61846a662266d41e361
                    
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
<<<<<<< HEAD
                        <input name="Name" class="form-control" placeholder="Username" type="text" id="Name">
=======
<<<<<<< HEAD
                        <input name="Name" class="form-control" placeholder="Username" type="text" id="Name">
=======
                        <input name="username" class="form-control" placeholder="Username" type="text">
>>>>>>> 83837fcb7daf3c33bb36f61846a662266d41e361
>>>>>>> develop
                    </div>

                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
<<<<<<< HEAD
                        <input name="password" class="form-control" placeholder="Create password" type="password" id="CreatePassword">
=======
<<<<<<< HEAD
                        <input name="password" class="form-control" placeholder="Create password" type="password" id="CreatePassword">
=======
                        <input name="password" class="form-control" placeholder="Create password" type="password">
>>>>>>> 83837fcb7daf3c33bb36f61846a662266d41e361
>>>>>>> develop
                    </div> 

                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input class="form-control" placeholder="Repeat password" type="password" id="RepeatPassword">
                    </div> 
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block"> Create Account </button>
                    </div> 
                    
                    <p class="text-center">Have an account? <a href="login">Log In</a> </p>
                </form>
        </div> <!-- card.// -->

    </div>
</main>


  <script type="text/javascript">
     $CreatePassword="1";
     $RepeatPassword="-1";
          $(document).ready(function(){
            $("#RepeatPassword").blur(function(){
               $CreatePassword=$("#CreatePassword").val();
               $RepeatPassword=$(this).val();
            if($CreatePassword!=$RepeatPassword)
                alert("Vui Lòng nhập mật khẩu trùng nhau");

            })
          })
        
    </script>

@endsection