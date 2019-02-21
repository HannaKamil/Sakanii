@extends('include.adminMaster')
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Users Control</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        this table contain all users
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr style="color: #ff5500; background-color: #0c0c0c">
                                <th>Name <i class="fa fa-user" style="color: #1e7e34"></i></th>
                                <th>Username <i class="fa fa-user" style="color: #1e7e34"></i></th>
                                <th>Phone_number <i class="fa fa-phone" style="color: #1e7e34"></i></th>
                                <th>Email <i class="fa fa-mail-forward" style="color: #1e7e34"></i></th>
                                <th>Role <i class="fa fa-gear" style="color: #1e7e34"></i></th>
                                <th>Created_at <i class="fa fa-clock-o" style="color: #1e7e34"></i></th>
                                <th>Remove <i class="fa fa-times" style="color: #e3342f" ></i></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr class="odd gradeX">
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->username}}</td>
                                    <td>{{$user->phone_number}}</td>
                                    <td> {{$user->email}}</td>
                                    <td>
                                        @if($user->role == '1')
                                            {{'Admin'}}
                                            @elseif ($user->role == '2')
                                                {{'Owner'}}
                                            @else
                                                {{'Student'}}
                                            @endif
                                    </td>
                                    <td class="center">{{$user->created_at}}</td>
                                    <td> <a class="btn btn-danger" href="/udelete/{{$user->id}}"> <i class="fa fa-remove"></i> Delete </a> </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$users->links()}}
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
@endsection