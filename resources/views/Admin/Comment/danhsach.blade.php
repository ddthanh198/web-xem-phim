@extends('Admin.Layout.index')
@section('Content')
  <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Comment
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
                                <th>id</th>
                                <th>User</th>
                                <th>Phim</th>
                                <th>content</th>
                                <th>Time</th>
                                <th>Delete</th>
                                <td>Edit</td>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($comment as $comment)
                            <tr class="odd gradeX" align="center">
                                <td>{{$comment->id}}</td>
                                <td>{{$comment->User->name}}</td>
                                <td>{{$comment->Film->name}}</td>
                                <td>{{$comment->content}}</td>

                                <td>{{$comment->time}}</td>
                               
                               
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="Admin/Comment/Xoa/{{$comment->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="Admin/Comment/Sua/{{$comment->id}}">Edit</a></td>
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