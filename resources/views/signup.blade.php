@extends('mainframe')
@section('title')
<title>Movie Review | Review</title>
@endsection
@section('webMain')

<main>
    <div class="container">
        <div class=" bg-light signup-form">
                <h4 class="card-title mt-3 text-center">Create Account</h4>
                <form action="signup" method="post">
                         <input type="hidden" name="_token" value="{{csrf_token()}}" />
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
                        <input name="PhoneNumber" class="form-control" placeholder="Phone Number" type="text">
                    </div>

                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                        </div>
                        <input name="Email" class="form-control" placeholder="Email address" type="email">
                    </div> 
                    
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
                        <input name="Name" class="form-control" placeholder="Username" type="text" id="Name">
                    </div>

                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input name="password" class="form-control" placeholder="Create password" type="password" id="CreatePassword">
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
                    
                    <p class="text-center">Have an account? <a href="">Log In</a> </p>
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
        )
        </script>

@endsection