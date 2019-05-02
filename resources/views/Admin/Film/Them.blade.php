@extends('Admin.Layout.index')
@section('Content')
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Film
                            <small>Thêm</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">

                      @if(count($errors)>0)
                      <div class="alert alert-danger">
                           @foreach($errors->all() as $err)
                                   {{$err}}<br>
                           @endforeach()
                           </div>
                      @endif()

                    <!--  @if(session('thongbao'))
                      <div class="alert alert-success">
                        {{session('thongbao')}}
                        @endif()
                      </div> -->

                        <form action="Admin/Film/Them" method="POST" enctype="multipart/form-data">
                           <input type="hidden" name="_token" value="{{csrf_token()}}" />
                            
                             
                            <div class="form-group">
                                <label>Tên Phim</label>
                                <input class="form-control" name="Name" placeholder="Nhập Tên Phim" />
                                  
                            </div>
                              
                            
                              <label>NoiBat</label>
                            <div class="form-group">
               
                                <input class="form-control" name="NoiBat" placeholder="Nhập Nổi Bật" />
                                  
                            </div>
                              <label>Name</label>
                            <div class="form-group">
               
                                <input class="form-control" name="Nation" placeholder="Nhập Quốc Gia" />
                                  
                            </div>
                               <label>Year</label>
                            <div class="form-group">
               
                                <input class="form-control" name="Year" placeholder="Nhập Năm" />
                                  
                            </div>
                             
                              
                           
                            <div class="form-group">
                               <label>Video</label>
                               <input type="file" name="Video">
                           </div>
                           <div class="form-group">
                               <label>Hình ảnh</label>
                               <input type="file" name="HinhAnh">
                           </div>
                            <button type="submit" class="btn btn-default">Thêm</button>
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