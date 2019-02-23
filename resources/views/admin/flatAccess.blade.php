@extends('include.adminMaster')
@section('content')
    {{--<div id="page-wrapper">--}}
    {{--<div class="row">--}}
    {{--<div class="col-lg-12">--}}
    {{--<h1 class="page-header">Flats</h1>--}}
    {{--</div>--}}
    {{--<!-- /.col-lg-12 -->--}}
    {{--</div>--}}
    {{--<!-- /.row -->--}}
    {{--<div class="row">--}}
    {{--<div class="col-lg-12">--}}
    {{--<div class="panel panel-default">--}}
    {{--<div class="panel-heading">--}}
    {{--All Flats--}}
    {{--</div>--}}
    {{--<!-- /.panel-heading -->--}}
    {{--<div class="panel-body">--}}
    {{--<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">--}}
    {{--<thead>--}}
    {{--<tr style="color: #ff5500; background-color: #0c0c0c">--}}
    {{--<th>flat_location</th>--}}
    {{--<th>flat_address</th>--}}
    {{--<th>flat_price</th>--}}
    {{--<th>bed_price</th>--}}
    {{--<th>flat_description</th>--}}
    {{--<th>Activate</th>--}}
    {{--<th>created_at</th>--}}
    {{--<th>Added_by</th>--}}
    {{--</tr>--}}
    {{--</thead>--}}
    {{--<tbody>--}}
    {{--@foreach($flats as $flat)--}}
    {{--<tr class="odd gradeX">--}}
    {{--<td>{{$flat->flat_location}}</td>--}}
    {{--<td>{{$flat->flat_address}}</td>--}}
    {{--<td>{{$flat->flat_price}}</td>--}}
    {{--<td>{{$flat->bed_price}}</td>--}}
    {{--<td>{{$flat->flat_description}}</td>--}}
    {{--@if ($flat->activate == 0)--}}
    {{--<td><a href="/activate/{{$flat->flat_id}}" class="btn btn-primary">Activate</a></td>--}}
    {{--@elseif ($flat->activate == 1)--}}
    {{--<td>{{'Activated'}}</td>--}}
    {{--@endif--}}

    {{--<td>{{$flat->created_at}}</td>--}}
    {{--@foreach($users as $user)--}}
    {{--@if ($user->id == $flat->id)--}}
    {{--<td>{{$user->name}}</td>--}}
    {{--@endif--}}
    {{--@endforeach--}}
    {{--</tr>--}}

    {{--@endforeach--}}

    {{--</tbody>--}}
    {{--</table>--}}
    {{--{{$flats->links()}}--}}
    {{--<!-- /.table-responsive -->--}}
    {{--</div>--}}
    {{--<!-- /.panel-body -->--}}
    {{--</div>--}}
    {{--<!-- /.panel -->--}}
    {{--</div>--}}
    {{--<!-- /.col-lg-12 -->--}}
    {{--</div>--}}
    {{--<!-- /.row -->--}}

    {{--<!-- /.row -->--}}

    {{--<!-- /.row -->--}}
    {{--<!-- /.row -->--}}
    {{--</div>--}}



    {{--copy--}}

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12" style="direction: rtl">
                <h1 class="page-header">جميع العقارات</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="">
            <div class="row" style="direction: rtl; ">
                <div class="my-container">
                    <h3>جدول العقارات</h3>
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr style="color: #FFF; background-color: #0c0c0c">
                            <th class="text-right">موقع الشقة</th>
                            <th class="text-right">عنوان الشقة</th>
                            <th class="text-right">سعر الشقة</th>
                            <th class="text-right">سعر السرير</th>
                            <th class="text-right">وصف الشقة</th>
                            <th class="text-right">نشطة</th>
                            <th class="text-right">اضيفت فى</th>
                            <th class="text-right">اضيفت بواسطة</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($flats as $flat)
                            <tr class="odd gradeX">
                                <td>{{$flat->flat_location}}</td>
                                <td>{{$flat->flat_address}}</td>
                                <td>{{$flat->flat_price}}</td>
                                <td>{{$flat->bed_price}}</td>
                                <td>{{$flat->flat_description}}</td>
                                @if ($flat->activate == 0)
                                    <td><a href="/activate/{{$flat->flat_id}}" class="btn btn-primary">Activate</a></td>
                                @elseif ($flat->activate == 1)
                                    <td>{{'Activated'}}</td>
                                @endif

                                <td>{{$flat->created_at}}</td>
                                @foreach($users as $user)
                                    @if ($user->id == $flat->id)
                                        <td>{{$user->name}}</td>
                                    @endif
                                @endforeach
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                    {{$flats->links()}}
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