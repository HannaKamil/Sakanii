@extends('include.adminMaster')
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12" style="direction: rtl">
                <h1 class="page-header">كل الاعضاء</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="">
            <div class="row" style="direction: rtl; ">
                <div class="my-container">
                    <h3>جدول الاعضاء</h3>
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr style="color: #FFF; background-color: #0c0c0c">
                            <th class="text-right">الاسم </th>
                            <th class="text-right">اسم المستخدم </th>
                            <th class="text-right">رقم المحمول </th>
                            <th class="text-right">البريد الاكترونى </th>
                            <th class="text-right">الدور </th>
                            <th class="text-right">وقت الانضمام </th>
                            <th class="text-right">حذف </th>
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
                </div>
                <!-- /.table-responsive -->
                <!-- /.panel-body -->

                <!-- /.panel -->
                <!-- /.col-lg-12 -->
            </div>


        </div>


        <!-- /.table-responsive -->



    </div>
@endsection