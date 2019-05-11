@extends('Admin.Layout.index')
@section('Content')
<!-- Page Content -->
<!-- jQuery -->
    <script src="admin_asset/bower_components/jquery/dist/jquery.min.js"></script>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Admin
                            <small>Thêm</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                     @if(count($errors)>0)
                        <div class="alert alert-danger">
                          @foreach($errors->all() as $err)
                          {{$err}}
                          @endforeach()
                        </div>
                        @endif()
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="Admin/Admin/Them" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}" />
                           
                             <div class="form-group">
                                <label>PhoneNumber</label>
                                <input class="form-control" name="PhoneNumber" placeholder="Nhập PhoneNumber" id="PhoneNumber"/>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" name="Email" placeholder="Nhập Email" type="email" />
                            </div>
                             <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="Name" placeholder="Nhập Name" id="Name"/>
                            </div>
                            <div id="ErrorUserName"></div>
                             <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" name="password" placeholder="Nhập PhoneNumber"  type="password" id="CreatePassword"/>
                            </div>
                             <div class="form-group">
                                <label>Repeat Password</label>
                                <input class="form-control" name="password" placeholder="Nhập PhoneNumber"  type="password" id="RepeatPassword"/>
                            </div>
                            <div id="ErrorPassword"></div>
                          <div class="form-group" id="Signup"> 
                        <button type="submit" class="btn btn-primary btn-block" > Create Account </button>
                    </div>
                     <div class="form-group" id="Signup"> 
                        <button type="reset" class="btn btn-primary btn-block" > Reset</button>
                    </div> 
                    
                   
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
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