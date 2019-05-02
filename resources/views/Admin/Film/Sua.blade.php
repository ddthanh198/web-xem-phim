@extends('Admin.Layout.index')
@section('Content')
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thể Loại
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

                    <!--    @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                            @endif()
                        </div> -->

                        <form action="Admin/Film/Sua/{{$film->id}}" method="POST" enctype="multipart/form-data">
                           <input type="hidden" name="_token" value="{{csrf_token()}}" />
                           
                             <label>Name</label>
                            <div class="form-group">
               
                                <input class="form-control" name="Name" placeholder="" value="{{$film->name}}" />
                                  
                            </div>
                             
                            
                              <label>Nổi Bật</label>
                            <div class="form-group">
               
                                <input class="form-control" name="NoiBat" placeholder=""  value="{{$film->NoiBat}}" />
                                  
                            </div>
                              <label>Nation</label>
                            <div class="form-group">
               
                                <input class="form-control" name="Nation" placeholder="" value="{{$film->nation}}" />
                                  
                            </div>
                               <label>Year</label>
                            <div class="form-group">
                                <input class="form-control" name="Year" placeholder="" value="{{$film->year}}" />
                                  
                            </div>
                               <label>Source</label>
                            <div class="form-group">
               
                                <input class="form-control" name="Source" placeholder=""  value="{{$film->source}}" />
                                  
                            </div>  
                            <div class="form-group">
                               <label>Hình ảnh</label>
                               <input type="file" name="HinhAnh" value="{{$film->hinhanh}}">
                           </div>
                              
                            <div class="form-group">
                               <label>Video</label>
                               <input type="file" name="Video" value="{{$film->video}}">
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