{{--@extends('include.master')--}}
{{--@section('content')--}}

    {{--<section id="portfolio"  class="section-bg" >--}}
        {{--<div class="container">--}}

            {{--<header class="section-header">--}}
                {{--<h3 class="section-title">Your Flat Data </h3>--}}
            {{--</header>--}}
            {{--<div class="container">--}}
                {{--<a href="/flats" class="btn btn-primary">Go Back</a>--}}
                {{--<h1 style="color: darkred"> {{$flats->flat_address}} </h1>--}}
                {{--<h2 class="text-center alert alert-success">The Flat Image</h2>--}}
                {{--<img style="width:100%" class="img-thumbnail rounded " src="../cover_images/{{$flats->cover_image}}">--}}
                {{--<h2 class="text-center alert alert-success">The Flat Data</h2>--}}
                {{--<div class="alert alert-info">--}}
                    {{--<p>The Flat Address :</p> {!! $flats->flat_location !!}--}}
                {{--</div>--}}
                {{--<div class="alert alert-info">--}}
                    {{--<p>The Flat Services:</p> {!! $flats->flat_services !!}--}}
                {{--</div>--}}
                {{--<div class="alert alert-info">--}}
                    {{--<p>The Flat Price :</p> {!! $flats->flat_price !!}--}}
                {{--</div>--}}
                {{--<div class="alert alert-info">--}}
                    {{--<p>The Bed Price :</p>{!! $flats->bed_price !!}--}}
                {{--</div>--}}
                {{--<div class="alert alert-info">--}}
                    {{--<p> The Flat Description: </p>{!! $flats->flat_description !!}--}}
                {{--</div>--}}
                {{--<div class="alert alert-info">--}}
                    {{--<small>Inserted on {{$flats->created_at}}</small>--}}
                {{--</div>--}}
            {{--</div>--}}


            {{--@if(!Auth::guest())--}}
                {{--@if (Auth::user()->id == $flats->id)--}}
                    {{--<a href="/flats/{{$flats->flat_id}}/edit" class="btn btn-primary">Edit</a>--}}
                    {{--{!! Form::open(['action' => ['FlatController@destroy' , $flats->flat_id] , 'method' => 'POST' , 'style' => 'display:inline']) !!}--}}
                    {{--{{Form::hidden('_method' , 'DELETE')}}--}}
                    {{--{{Form::submit('Delete' , ['class' => 'btn btn-danger'])}}--}}
                    {{--{!! Form::close() !!}--}}
                {{--@endif--}}
            {{--@endif--}}
            {{--<a class="btn btn-success" href="/book"> Book This Flat </a>--}}
        {{--</div>--}}
    {{--</section>--}}


    {{--<section id="portfolio"  class="section-bg" >--}}
        {{--<div class="container-fluid">--}}

            {{--<header class="section-header">--}}
                {{--<h3 class="section-title h1-details" style="font-size: 55px; color: #4c110f">بيانات الشقة </h3>--}}
            {{--</header>--}}
            {{--<div class="container" style="direction: rtl;">--}}

                {{--<div class="row justify-content-center align-items-start">--}}

                    {{--<div class="col-md-10 col-12 mb-5 mx-md-5  custom-height" >--}}
                        {{--<h2 class="text-center alert alert-success">The Flat Image</h2>--}}
                        {{--<img style="width:100%;" class="img-thumbnail rounded image-flate-details " src="../cover_images/{{$flats->cover_image}}">--}}
                    {{--</div>--}}

                    {{--<div class="col-10  mb-5  mt-md-3">--}}


                        {{--<div class="row justify-content-center box-shadow-custom border border-light py-5 rounded">--}}
                            {{--<div class="col-md-6 col-9">--}}
                                {{--<div class="custom-background-hover text-white p-3 box-shadow-custom mb-4 rounded">--}}
                                    {{--<h6 class="text-right font-custom mb-3 ">الموقع</h6>--}}
                                    {{--<div class="text-right">--}}
                                        {{--<p class="mb-0 font-custom">{!! $flats->flat_location !!}</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="col-md-6 col-9 ">--}}

                                {{--<div class="text-white p-3 box-shadow-custom mb-4 custom-background-hover rounded">--}}
                                    {{--<h6 class=" text-right font-custom mb-3"> العنوان</h6>--}}
                                    {{--<p class="mb-0 font-custom text-right">{!! $flats->flat_address !!}</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="w-100"></div>--}}

                            {{--<div class="col-md-6 col-9">--}}

                                {{--<div class=" text-white p-3 box-shadow-custom mb-4 custom-background-hover rounded">--}}
                                    {{--<h6 class=" text-right font-custom">سعر الشقة</h6>--}}
                                    {{--<p class=" mb-0 text-right font-custom">{!! $flats->flat_price !!}&nbsp;<span>جنيه</span></p>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="col-md-6 col-9">--}}

                                {{--<div class="custom-background-hover text-white p-3 box-shadow-custom mb-4 rounded">--}}
                                    {{--<h6 class=" text-right font-custom">سعر السرير</h6>--}}
                                    {{--<small class="mb-0 text-right d-block font-custom">{!! $flats->bed_price !!}&nbsp;<span>جنيه</span></small>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="w-100"></div>--}}

                            {{--<div class="col-md-12 col-9">--}}
                                {{--<div class="custom-background-hover text-white p-3 box-shadow-custom mb-4 rounded">--}}
                                    {{--<h6 class="text-right font-custom">وصف الشقة</h6>--}}
                                    {{--<p class="d-block text-right font-weight-bold mb-0 desc">{!! $flats->flat_description !!}</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-8 col-9">--}}
                                {{--<div class="custom-background-hover text-white p-3 box-shadow-custom mb-4 rounded">--}}
                                    {{--<small class="d-block text-right font-weight-bold">اضيفت فى  {{$flats->created_at}}</small>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-6 text-right">--}}
                                {{--<a class="btn btn-success font-weight-bold px-4" href="/book"> احجز الان </a>--}}
                            {{--</div>--}}
                            {{--<div class="col-4 text-left">--}}
                                {{--@if(!Auth::guest())--}}
                                    {{--@if (Auth::user()->id == $flats->id)--}}
                                        {{--<a href="/flats/{{$flats->flat_id}}/edit" class="btn btn-info mb-md-0 mb-2 px-5">Edit</a>--}}
                                        {{--{!! Form::open(['action' => ['FlatController@destroy' , $flats->flat_id] , 'method' => 'POST' , 'style' => 'display:inline']) !!}--}}
                                        {{--{{Form::hidden('_method' , 'DELETE')}}--}}
                                        {{--{{Form::submit('Delete' , ['class' => 'btn btn-danger custom-delete px-5'])}}--}}
                                        {{--{!! Form::close() !!}--}}
                                    {{--@endif--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
{{--@endsection--}}

@extends('include.master')
@section('content')

    <section id="portfolio"  class="section-bg" >
        <div class="container-fluid">

            <header class="section-header">
                <h3 class="section-title h1-details">بيانات الشقة </h3>
            </header>
            <div class="container" style="direction: rtl;">

                <div class="row justify-content-center ">

                    <div class="col-md-6 col-12 mb-md-0 mb-5 img-container" >
                        {{--<h2 class="text-center alert alert-success">The Flat Image</h2>--}}
                        <img  class="img-thumbnail rounded mb-4 img" src="../cover_images/{{$flats->cover_image}}">
                        {{--<div class="col-md-12 col-12 details-flats">--}}
                        {{--<div class="custom-background-hover text-white p-3 box-shadow-custom mb-4 rounded">--}}
                        {{--<h6 class="text-right font-custom font-weight-bold mb-2 border-bottom pb-2">وصف الشقة:</h6>--}}
                        {{--<p class="d-block text-right font-weight-bold mb-0 desc">{!! $flats->flat_description !!}</p>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                    </div>


                    <div class="col-md-6 mb-5  mt-md-0 mt-3">


                        <div class="row justify-content-center py-1 rounded">
                            <div class="col-md-9  col-9">
                                <div class="custom-background-hover text-white  box-shadow-custom mb-4 rounded p-2 text-right">
                                    <span class="text-right font-custom mb-3 font-weight-bold">الموقع:</span>
                                    {{--<div class="text-right">--}}
                                    <span class="mb-0 font-custom">{!! $flats->flat_location !!}</span>
                                    {{--</div>--}}
                                </div>
                            </div>

                            <div class="col-md-9 col-9 ">

                                <div class="text-white p-2 box-shadow-custom mb-4 custom-background-hover rounded text-right">
                                    <span class="text-right font-custom mb-3 font-weight-bold">العنوان:</span>
                                    <span class="mb-0 font-custom text-right">{!! $flats->flat_address !!}</span>
                                </div>
                            </div>

                            <div class="w-100"></div>

                            <div class="col-md-9 col-9">

                                <div class="text-right text-white p-2 box-shadow-custom mb-4 custom-background-hover rounded">
                                    <span class="font-weight-bold text-right font-custom">سعر الشقة:</span>
                                    <span class=" mb-0 text-right font-custom">{!! $flats->flat_price !!}&nbsp;<span>جنيه</span></span>
                                </div>
                            </div>

                            <div class="col-md-9 col-9">

                                <div class="custom-background-hover text-white p-2 box-shadow-custom mb-4 rounded text-right">
                                    <span class="font-custom font-weight-bold">سعر السرير:</span>
                                    <span class="mb-0 font-custom">{!! $flats->bed_price !!}&nbsp;<span>جنيه</span></span>
                                </div>
                            </div>

                            <div class="w-100"></div>



                            <div class="col-md-9 col-9">
                                <div class="custom-background-hover text-white p-2 box-shadow-custom mb-4 rounded">
                                    <small class="d-block text-right font-weight-bold">اضيفت فى  {{$flats->created_at}}</small>
                                </div>
                            </div>
                            <div class="col-6 text-center mx-auto mb-0">
                                <a class="btn btn-success font-weight-bold px-4 mt-2" href="/book/{{$flats->flat_id}}" style="border-radius: 0"> احجز الان </a>
                            </div>
                            {{--<div class="col-4 text-left">--}}
                            {{--@if(!Auth::guest())--}}
                            {{--@if (Auth::user()->id == $flats->id)--}}
                            {{--<a href="/flats/{{$flats->flat_id}}/edit" class="btn btn-primary mb-md-0 mb-2 px-5 custom-edit">Edit</a>--}}
                            {{--{!! Form::open(['action' => ['FlatController@destroy' , $flats->flat_id] , 'method' => 'POST' , 'style' => 'display:inline']) !!}--}}
                            {{--{{Form::hidden('_method' , 'DELETE')}}--}}
                            {{--{{Form::submit('Delete' , ['class' => 'btn btn-danger custom-delete px-5'])}}--}}
                            {{--{!! Form::close() !!}--}}
                            {{--@endif--}}
                            {{--@endif--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-12 details-flats">
                    <div class="  p-3  mb-4 rounded">
                        <h6 class="text-right font-custom font-weight-bold mb-2 border-bottom pb-2">وصف الشقة:</h6>
                        <p class="d-block text-right font-weight-bold mb-0 desc">{!! $flats->flat_description !!}</p>
                    </div>
                </div>

                <div class="text-center mt-5">

                @if(!Auth::guest())
                    @if (Auth::user()->id == $flats->id)
                        <a href="/flats/{{$flats->flat_id}}/edit" class="btn btn-info px-4 ml-5 font-weight-bold">تعديل بيانات الشقه</a>
                        {!! Form::open(['action' => ['FlatController@destroy' , $flats->flat_id] , 'method' => 'POST' , 'style' => 'display:inline']) !!}
                        {{Form::hidden('_method' , 'DELETE')}}
                        {{Form::submit('حدف الشقه' , ['class' => 'btn btn-danger px-5 font-weight-bold'])}}
                        {!! Form::close() !!}
                    @endif
                @endif

                </div>

            </div>

            {{--{!! Form::open(['action' => 'FlatCommentController@store', 'method' => 'post' , 'enctype' => 'multipart/form-data','class'=>'create-form']) !!}--}}
            {{--<div class="row justify-content-center">--}}
                {{--<div class="col-md-7">--}}
                    {{--<div class="form-group">--}}
                        {{--{{Form::label('body' ,['class'=>'d-block text-right'])}}--}}
                        {{--{{Form::textarea('body' , ['placeholder' => 'أكتب تعليقك علي الشقه'])}}--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--{{Form::submit('اضافه تعليق' , ['class' => 'btn btn-success px-5 mt-5 font-weight-bold'])}}--}}
                {{--{!! Form::close() !!}--}}
            {{--</div>--}}

            <div class="container">
                @if (isset($arr_comment_id))
                    <?php  $count=count($arr_comment_id);?>
                    @for ($i = 0; $i < $count; $i++)
                        <div class="alert alert-danger">
                            <div>{{$arr_user_name[$i]}}</div>
                            <small>{{$arr_user_body[$i]}}</small>



                            {{--<a href="/editComment/{{$arr_comment_id[$i]}}" class="float-right">Edit</a>--}}

                            @if(!Auth::guest())
                            {{--معناه اللى مسجل فقط هو اللى يشوف الجزء ده--}}


                                @if (Auth::user()->id == $arr_user_id[$i])

                                    {{Auth::user()->id}}
                                {{$arr_user_id[$i]}}
                                    <a href="/delComment/{{$arr_comment_id[$i]}}" class="float-right">Delete</a>
                                @endif

                            @endif
                        </div>
                    @endfor
                @endif
            </div>


            @if(!Auth::guest())
                <div class="container my-5">

                    <form action="/flats/{{$flats->flat_id}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            {{--<label for="comment">comment</label>--}}
                            <textarea name="form_comment"  id="comment" class="form-control text-right" placeholder=".. اضف تعليق" required></textarea>
                        </div>

                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-outline-primary font-weight-bold px-4">اضف تعليق</button>

                        </div>
                    </form>
                </div>


            </div>
        @endif
    </section>


@endsection