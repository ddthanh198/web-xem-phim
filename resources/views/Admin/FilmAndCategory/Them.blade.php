@extends('Admin.Layout.index')
@section('Content')
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">FilmAndCategory
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

                    <!-- 	@if(session('thongbao'))
                    	<div class="alert alert-success">
                    		{{session('thongbao')}}
                    		@endif()
                    	</div> -->

                        <form action="Admin/FilmAndCategory/Them" method="POST" >
                           <input type="hidden" name="_token" value="{{csrf_token()}}" />
                           <div class="form-group">
                            <label>Film</label>
                            <select class="form-control" name="IdFilm">
                                    @foreach($film as $film)
                                    <option value="{{$film->id}}" name="IdFilm">{{$film->name}}</option>
                                    @endforeach()
                                </select>
                                
                                  
                            </div>
                            <div class="form-group">
                                <label>Category</label>
                            <select class="form-control" name="IdCategory">
                                    @foreach($category as $category)
                                    <option value="{{$category->id}}" name="IdCategory">{{$category->name}}</option>
                                    @endforeach()
                                </select>
                                
                                  
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