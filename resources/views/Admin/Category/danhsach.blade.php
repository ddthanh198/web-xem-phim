@extends('Admin.Layout.index')
@section('Content')
  <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Category
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
                                <th>numFilm</th>
                                <th>Delete</th>
                                <td>Edit</td>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($category as $category)
                            <tr class="odd gradeX" align="center">
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->numFilm}}</td>
                               
                               
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="Admin/Category/Xoa/{{$category->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="Admin/Category/Sua/{{$category->id}}">Edit</a></td>
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