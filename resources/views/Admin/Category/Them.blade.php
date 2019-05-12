@extends('Admin.Layout.index')
@section('Content')
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Category
                            <small>Thêm</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->a
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="Admin/Category/Them" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}" />
                           
                             <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="Name" placeholder="Nhập Name" />
                            </div>
                           
                            <button type="submit" class="btn btn-default">Category Add</button>
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