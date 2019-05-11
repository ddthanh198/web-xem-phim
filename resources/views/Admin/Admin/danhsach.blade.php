@extends('Admin.Layout.index')
@section('Content')
<?php 
use Illuminate\Support\Facades\Auth;
$user=Auth::User();
$id=$user->id;
?>
  <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Admin
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                   
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                
                                <th>Delete</th>
                                <td>Edit</td>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($admin as $admin)
                            @if($admin->admin==1||$admin->admin==2)
                            <tr class="odd gradeX" align="center">
                               @if($admin->id==$id)
                                <th>{{$admin->id}}</th>
                                @else <td>{{$admin->id}}</td>
                                @endif
                                <td>{{$admin->name}}</td>
                                <td>{{$admin->email}}</td>
                                
                               
                               @if($admin->id==$id||$user->admin==2)
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="Admin/Admin/Xoa/{{$admin->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="Admin/Admin/Sua/{{$admin->id}}">Edit</a></td>
                                @else
                                <td></td>
                                <td></td>
                                @endif
                            </tr>
                            @endif
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