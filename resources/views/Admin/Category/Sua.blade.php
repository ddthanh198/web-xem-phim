@extends('Admin.Layout.index')
@section('Content')
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Loại Tin
                            <small>Thêm</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="Admin/Category/Sua/{{$category->id}}" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}" />
                            
                             <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="Name" placeholder="{{$category->name}}" />
                            </div>
                           
                            <button type="submit" class="btn btn-default">Category Update</button>
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