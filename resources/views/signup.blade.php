@extends('mainframe')
@section('title')
<title>Movie Review | Review</title>
@endsection
@section('webMain')

<main>
    <div class="container">
        <div class=" bg-light signup-form">
             @if(count($errors)>0)
                        <div class="alert alert-danger">
                          @foreach($errors->all() as $err)
                          {{$err}}
                          @endforeach()
                        </div>
                        @endif()
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
                      <div id="ErrorUserName"></div>
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
                      <div id="ErrorPassword" ></div>
                    <div class="form-group" id="Signup"> 
                        <button type="submit" class="btn btn-primary btn-block" > Create Account </button>
                    </div> 
                    
                    <p class="text-center">Have an account? <a href="login">Log In</a> </p>
                   

                </form>
        </div> <!-- card.// -->

    </div>

</main>


  <script type="text/javascript">
     $CreatePassword="1";
     $RepeatPassword="-1";
     //kiểm tra 2 mật khẩu có trùng nhau không
          $(document).ready(function(){
            $("#RepeatPassword").blur(function(){
               $CreatePassword=$("#CreatePassword").val();
               $RepeatPassword=$(this).val();
            if($CreatePassword!=$RepeatPassword){
                $("#ErrorPassword").html("Mật khẩu không khớp");
                $("#Signup").html('<div class="form-group" id="Signup"><div  class="btn btn-primary btn-block" > Not Create </div></div>');
            }
            else {$("#ErrorPassword").html("Mật khẩu khớp");
            $("#Signup").html('<div class="form-group" id="Signup"><button type="submit" class="btn btn-primary btn-block" > Create Account </div></div>');
        }

            })
          $("#Name").blur(function(){
            $name=$(this).val();
           
            $.get("CheckUser/"+$name,function(data){
                $("#ErrorUserName").html(data);
            })
          })
          })
        
    </script>

@endsection