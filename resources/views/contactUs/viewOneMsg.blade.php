


{{--copy--}}



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
                            {{--<th scope="col">#</th>--}}
                            <th scope="col"  class="text-right">الاسم</th>
                            <th scope="col" class="text-right">البريد الاكترونى</th>
                            <th scope="col" class="text-right">عنوان الشقة</th>
                            <th scope="col" class="text-right">الرسائل</th>
                            <th scope="col" class="text-right">اضيفت فى</th>
                            <th scope="col" class="text-right">عدلت فى</th>
                            <th scope="col" class="text-right">حذف</th>
                            <th scope="col" class="text-right">رد على الرسائل</th>

                        </tr>
                        </thead>
                        @foreach($messages as $message)
                            <tbody>
                            <tr>
                                <td>{{$message->name}}</td>
                                <td>{{$message->email}}</td>
                                <td>{{$message->flat_address}}</td>
                                <td>{{$message->message}}</td>
                                <td>{{$message->created_at}}</td>
                                <td>{{$message->updated_at}}</td>
                                <!--frist way delete-->
                                <td><button class="btn btn-danger" style="border-radius: 0"><a href="/del/{{$message->contact_id}}" style="color: white">Delete</a></button></td>

                                {{--//replay--}}
                                <td><button class="btn btn-primary" style="border-radius: 0"><a href="/replay/{{$message->contact_id}}" style="color: white">replay</a></button></td>
                            </tr>
                            </tbody>
                        @endforeach
                    </table>
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