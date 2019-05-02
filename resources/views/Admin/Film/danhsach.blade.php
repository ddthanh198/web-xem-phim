@extends('Admin.Layout.index')
@section('Content')
  <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Film
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    @if(session('ThongBao'))
                        <div class="alert alert-success">
                            {{session('ThongBao')}}
                            @endif()
                        </div>
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Hình Ảnh</th>
                                <th>Nổi Bật</th>
                                <th>Quốc Gia</th>
                                <th>year</th>
                                <th>source</th>
                                <th>views</th>
                                <th>stars</th>
                                <th>Delete</th>
                                <td>Edit</td>

                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($film as $film)
                            <tr class="odd gradeX" align="center">
                                <td>{{$film->id}}</td>
                                <td>{{$film->name}}</td>
                                <td><a href="Admin/Film/DanhSach"><img src="upload/hinhanh/{{$film->hinhanh}} " width="100px" height="100px"></a></td></td> 
                                <td>{{$film->NoiBat}}</td>
                                <td>{{$film->nation}}</td>
                                <td>{{$film->year}}</td>
                                <td>{{$film->source}}</td>
                                <td>{{$film->views}}</td>
                                <td>{{$film->stars}}</td>
                               
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="Admin/Film/Xoa/{{$film->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="Admin/Film/Sua/{{$film->id}}">Edit</a></td>
                            </tr>
                            @endforeach()
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection