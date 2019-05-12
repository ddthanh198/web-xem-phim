@extends('Admin.Layout.index')
@section('Content')
  <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">User
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
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Delete</th>
                                <td>Edit</td>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user as $user)
                            <tr class="odd gradeX" align="center">
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->phonenumber}}</td>
                               
                               
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="Admin/User/Xoa/{{$user->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="Admin/User/Sua/{{$user->id}}">Edit</a></td>
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