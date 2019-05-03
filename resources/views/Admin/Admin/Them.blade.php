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
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="Admin/Admin/Them" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}" />
                           
                             <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="Name" placeholder="Nhập Name" id="Name"/>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" name="Email" placeholder="Nhập Email" />
                            </div>
                             <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" name="password" placeholder="Nhập PhoneNumber"  type="password"/>
                            </div>
                            <button type="submit" class="btn btn-default">Admin Add</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
       <script type="text/javascript">
          $(document).ready(function(){
            $("#Name").blur(function(){
               $user=$(this).val();
              $.get("CheckUserAdmin/"+$user,function(data){
               if(data==0) alert("Tên Admin Đã Trùng");
               else  alert("OK rồi bạn nhé");
              })

            })
          })
        </script>
        @endsection