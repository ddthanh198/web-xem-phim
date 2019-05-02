@extends('Admin.Layout.index')
@section('Content')
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Admin
                            <small>Sửa</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="Admin/Admin/Sua/{{$admin->id}}" method="POST">
                           
                            
                        
                             <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="Name" placeholder="" value="{{$admin->name}}" />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" name="Email" placeholder="" value="{{$admin->email}}" />
                            </div>
                             <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" name="password" placeholder="Nhập mật khẩu"  type="password" />
                            </div>
                            <button type="submit" class="btn btn-default">Admin Update</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
        @endsection