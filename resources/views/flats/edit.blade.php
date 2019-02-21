@extends('include.master')
@section('content')
    {{--<div class="container">--}}
        {{--<h1 class="text-center"> Edit Flat Data </h1>--}}
        {{--{!! Form::open(['action' => ['FlatController@update', $flat->flat_id], 'method' => 'post' , 'enctype' => 'multipart/form-data']) !!}--}}
        {{--<div class="form-group">--}}
            {{--{{Form::label('flat_location' , 'flat_location',['style'=>"color: #AE0E0E"])}}--}}
            {{--{{Form::text('flat_location', $flat->flat_location , ['class' => 'form-control','style'=>"color: rgb(13, 183, 177)"])}}--}}
        {{--</div>--}}
        {{--<div class="form-group">--}}
            {{--{{Form::label('flat_address' , 'flat_address',['style'=>"color: #AE0E0E"])}}--}}
            {{--{{Form::text('flat_address' , $flat->flat_address , ['placeholder' => 'Enter the flat address' , 'class' => 'form-control','style'=>"color: rgb(13, 183, 177)"])}}--}}
        {{--</div>--}}
        {{--<div class="form-group">--}}
            {{--{{Form::label('book_duration' , 'book_duration',['style'=>"color: #AE0E0E"])}}--}}
            {{--{{Form::text('book_duration', $flat->book_duration , ['class' => 'form-control','style'=>"color: rgb(13, 183, 177)"] ) }}--}}
        {{--</div>--}}
        {{--<div class="form-group">--}}
            {{--{{Form::label('flat_price' , 'flat_price',['style'=>"color: #AE0E0E"])}}--}}
            {{--{{Form::number('flat_price' ,$flat->flat_price , ['class' => 'form-control','style'=>"color: rgb(13, 183, 177)"])}}--}}
        {{--</div>--}}
        {{--<div class="form-group">--}}
            {{--{{Form::label('bed_price' , 'bed_price',['style'=>"color: #AE0E0E"])}}--}}
            {{--{{Form::number('bed_price' , $flat->bed_price , ['class' => 'form-control','style'=>"color: rgb(13, 183, 177)"])}}--}}
        {{--</div>--}}
        {{--<div class="form-group">--}}
            {{--{{Form::label('flat_services' , 'flat_services',['style'=>"color: #AE0E0E"])}}<br>--}}
            {{--{{Form::radio('flat_services','1',  (old ('flat_services') == '1' ), ['class' => 'form-control','style'=>"color: rgb(13, 183, 177)"] ) }}--}}
            {{--{{Form::radio('flat_services','0',  (old ('flat_services') == '0' ), ['class' => 'form-control','style'=>"color: rgb(13, 183, 177)"] ) }}--}}
        {{--</div>--}}
        {{--<div class="form-group">--}}
            {{--{{Form::label('flat_description' , 'flat_description',['style'=>"color: #AE0E0E"])}}--}}
            {{--{{Form::textarea('flat_description' ,$flat->flat_description ,['style'=>"color: rgb(13, 183, 177)", 'class' => 'form-control' ,'id' => 'article-ckeditor'])}}--}}
        {{--</div>--}}
        {{--<div class="form-group">--}}
            {{--{{Form::file('cover_image',['style'=>"color: #AE0E0E"])}}--}}
        {{--</div>--}}
        {{--{{Form::hidden('_method' , 'PUT')}}--}}
        {{--{{Form::submit('submit' , ['class' => 'btn btn-primary'])}}--}}
        {{--{!! Form::close() !!}--}}
    {{--</div>--}}
    <div class="container">
        <h1 class="text-center display-4 mt-5 create-h1"> !هل هناك تعديل؟ </h1>
        <div class="row justify-content-center" style="direction: rtl">
            <div class="col-10 mb-5 py-5" style="box-shadow: 4px 4px 20px #eee">
                {!! Form::open(['action' => ['FlatController@update', $flat->flat_id], 'method' => 'post' , 'enctype' => 'multipart/form-data']) !!}
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="form-group">
                            {{Form::label('flat_location' , 'الموقع',['class'=>'d-block text-right'])}}
                            {{Form::text('flat_location', $flat->flat_location , ['class' => 'form-control','style'=>"color: rgb(13, 183, 177)"])}}

                        </div>
                    </div><br>
                    <div class="col-md-4">
                        <div class="form-group">
                            {{Form::label('flat_address' , 'عنوان تفصيلى',['class'=>'text-right d-block'])}}
                            {{Form::text('flat_address' , $flat->flat_address , ['placeholder' => 'ادخل العنوان' , 'class' => 'form-control',])}}
                        </div>
                    </div>
                    <div class="col-12"></div>
                    <div class="col-md-4">
                        <div class="form-group">
                            {{Form::label('flat_price' , 'سعر الشقة',['class'=>'text-right d-block'])}}
                            {{Form::number('flat_price' , $flat->flat_price , ['placeholder' => 'ادخل سعر الشقة' , 'class' => 'form-control','style'=>"color: rgb(13, 183, 177)"])}}
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="form-group">
                            {{Form::label('bed_price' , 'سعر السرير',['class'=>'text-right d-block'])}}
                            {{Form::number('bed_price' , $flat->bed_price , ['placeholder' => 'ادخل سعر السرير' , 'class' => 'form-control',])}}
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="form-group ">
                            {{--{{Form::label('flat_services' , 'الخدمات',['style'=>"color: #AE0E0E",'class'=>'text-right d-block'])}}--}}
                            <div class="text-right">
                                {{Form::radio('flat_services','1',  (old ('flat_services') == '1' ), ['class' => ' mb-3 mt-4','style'=>"color: rgb(13, 183, 177)"] ) }} {{Form::label('flat_services' , 'توجد خدمات بالشقه',['class'=>'text-right'])}}</div>
                            <div class="text-right">
                                {{Form::radio('flat_services','0',  (old ('flat_services') == '0' ), ['class' => '','style'=>"color: rgb(13, 183, 177)"] ) }} {{Form::label('flat_services' , 'لا توجد خدمات متوفره',['class'=>'text-right'])}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            {{Form::label('flat_description' , 'مواصفات الشقه',['class'=>'text-right d-block'])}}
                            {{Form::textarea('flat_description' , $flat->flat_description, ['placeholder' => 'ادخل مواصفات الشقه ' ,'class' => 'form-control' ,'id' => 'article-ckeditor'])}}
                        </div>
                    </div>
                    <div class="col-12"></div>
                    <div class="col-md-8 mt-3">
                        <div class="custom-ourfile">
                            <span>ارفع صورة</span>
                            {{Form::file('cover_image',['class'=>''])}}
                            {{--                            {{Form::label('' , 'صورة للمكان',['class'=>''])}}--}}
                        </div>
                    </div>
                    <div class="col-12 my-3"></div>

                    {{Form::submit('تعديل بيانات شقتك' , ['class' => 'btn btn-primary btn-block col-md-8 col-8 mb-5 font-weight-bold'])}}
                </div>
                {{Form::hidden('_method' , 'PUT')}}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection