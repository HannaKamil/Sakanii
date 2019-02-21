{{--@extends('include.master')--}}
{{--@section('content')--}}
{{--<div class="container">--}}
{{--<h1 class="text-center"> Create New Flat </h1>--}}
{{--{!! Form::open(['action' => 'FlatController@store', 'method' => 'post' , 'enctype' => 'multipart/form-data']) !!}--}}
{{--<div class="form-group">--}}
{{--{{Form::label('flat_location' , 'المنطقه السكنيه',['style'=>"color: #AE0E0E"])}}--}}
{{--{{Form::select('flat_location',['دماريس' =>'دماريس', 'شلبي' =>'شلبي','اخصاص' =>'اخصاص', 'ارض سلطان' =>'ارض سلطان','طه حسين' =>'طه حسين', 'الحسيني' =>'الحسيني'], null, ['placeholder' => 'ادخل المنطقه السكنيه' , 'class' => 'form-control','style'=>"color: rgb(13, 183, 177)"])}}--}}
{{--</div>--}}
{{--<div class="form-group">--}}
{{--{{Form::label('flat_address' , 'عنوان الشقه',['style'=>"color: #AE0E0E"])}}--}}
{{--{{Form::text('flat_address' , '' , ['placeholder' => 'ادخل عنوان الشقه' , 'class' => 'form-control','style'=>"color: rgb(13, 183, 177)"])}}--}}
{{--</div>--}}
{{--<div class="form-group">--}}
{{--{{Form::label('book_duration' , 'مده الايجار',['style'=>"color: #AE0E0E"])}}--}}
{{--{{Form::select('book_duration', ['اسبوع' => ' اسبوع', 'اسبوعين' => 'اسبوعين' , '3اسابيع' => '3 اسابيع','شهر' =>'شهر' , 'شهرين' =>'شهربن', '3 شهور' =>'3 شهور', '4 شهور' => '4 شهور',  '5 شهور' => '5 شهور', '6 شهور' =>'6 شهور' , '7 شهور' =>'7 شهور', '8 شهور' =>'8 شهور', '9 شهور' =>'9 شهور', '10 شهور' =>'10 شهور', '11 شهور' =>'11 شهور' ,'عام'=>'عام' ] , null, ['placeholder' => 'ادخل مده الايجار' , 'class' => 'form-control','style'=>"color: rgb(13, 183, 177)"] ) }}--}}
{{--</div>--}}
{{--<div class="form-group">--}}
{{--{{Form::label('flat_price' , 'سعر الشقه',['style'=>"color: #AE0E0E"])}}--}}
{{--{{Form::number('flat_price' , '' , ['placeholder' => 'ادخل سعر الشقه' , 'class' => 'form-control','style'=>"color: rgb(13, 183, 177)"])}}--}}
{{--</div>--}}
{{--<div class="form-group">--}}
{{--{{Form::label('bed_price' , 'سعر السرير الواحد',['style'=>"color: #AE0E0E"])}}--}}
{{--{{Form::number('bed_price' , '' , ['placeholder' => 'ادخل سعر السرير الواحد داخل الشقه' , 'class' => 'form-control','style'=>"color: rgb(13, 183, 177)"])}}--}}
{{--</div>--}}
{{--<div class="form-group">--}}
{{--{{Form::label('flat_services' , 'الخدمات بالشقه',['style'=>"color: #AE0E0E"])}}<br>--}}
{{--{{Form::radio('flat_services','1',  (old ('flat_services') == '1' ), ['class' => 'form-control','style'=>"color: rgb(13, 183, 177)"] ) }}يوجد--}}
{{--{{Form::radio('flat_services','0',  (old ('flat_services') == '0' ), ['class' => 'form-control','style'=>"color: rgb(13, 183, 177)"] ) }}لا يوجد--}}
{{--</div>--}}
{{--<div class="form-group">--}}
{{--{{Form::label('flat_description' , 'مواصفات الشقه',['style'=>"color: #AE0E0E"])}}--}}
{{--{{Form::textarea('flat_description' , '' , ['placeholder' => 'ادخل مواصفات الشقه' ,'style'=>"color: rgb(13, 183, 177)", 'class' => 'form-control' ,'id' => 'article-ckeditor'])}}--}}
{{--</div>--}}
{{--<div class="form-group">--}}
{{--{{Form::file('cover_image',['style'=>"color: #AE0E0E"])}}--}}
{{--</div>--}}
{{--{{Form::submit('submit' , ['class' => 'btn btn-primary'])}}--}}
{{--{!! Form::close() !!}--}}
{{--</div>--}}
{{--@endsection--}}



@extends('include.master')
@section('content')
    <div class="container">
        <h1 class="text-center display-4 mt-5 create-h1"> اضف شقتك </h1>
        <div class="row justify-content-center" style="direction: rtl">
            <div class="col-lg-7 col-md-10 col-11 mb-5 py-5" style="box-shadow: 4px 4px 20px #eee">
                {!! Form::open(['action' => 'FlatController@store', 'method' => 'post' , 'enctype' => 'multipart/form-data','class'=>'create-form create-form-validation']) !!}

                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <div class="form-group">
                            {{--{{Form::label('flat_location' , 'العنوان',['class'=>'d-block text-right'])}}--}}
                            <span class="custom-fontawseome text-success"><i class="fas fa-map-marker-alt"></i></span>
                            {{Form::select('flat_location',['دماريس' =>'دماريس', 'شلبي' =>'شلبي' ,'اخصاص' => 'اخصاص' , 'طه حسين' => 'طه حسين' , 'الحسيني' => 'الحسيني' , 'ابو هلال' => 'ابو هلال'], null, ['placeholder' => 'العنوان ' , 'class' => 'form-control select'])}}
                        </div>
                    </div>

                    <div class="w-100"></div>

                    <div class="col-md-7">
                        <div class="form-group">
                            {{--{{Form::label('flat_address' , 'عنوان تفصيلى',['class'=>'text-right d-block'])}}--}}
                            <span class="custom-fontawseome text-success"><i class="fas fa-map-marker-alt"></i></span>
                            {{Form::text('flat_address' , '' , ['placeholder' => 'ادخل العنوان' , 'class' => 'form-control',])}}
                        </div>
                    </div>

                    <div class="w-100"></div>

                    <div class="col-md-7">
                        <div class="form-group">
                            {{--{{Form::label('book_duration' , 'مدة الحجز',['class'=>'text-right d-block'])}}--}}
                            <span class="custom-fontawseome text-success"><i class="fas fa-calendar"></i></span>
                            {{--{{Form::select('book_duration', ['One Week' => 'One Week', '2 Week' => '2 Week' , '3 Week' => '3 Week','One Month' =>'One Month' , '2 Month' =>'2 Month', '3 Month' =>'3 Month', '4 Month' => '4 Month',  '5 Month' => '5 Month', '6 Month' =>'6 Month' , '7 Month' =>'7 Month', '8 Month' =>'8 Month', '9 Month' =>'9 Month', '10 Month' =>'10 Month', '11 Month' =>'11 Month' ,'One Year'=>'One Year' ] , null, ['placeholder' => 'اختار مدة الحجز' , 'class' => 'form-control select'] ) }}--}}
                            {{Form::select('book_duration', ['اسبوع' => ' اسبوع', 'اسبوعين' => 'اسبوعين' , '3اسابيع' => '3 اسابيع','شهر' =>'شهر' , 'شهرين' =>'شهربن', '3 شهور' =>'3 شهور', '4 شهور' => '4 شهور',  '5 شهور' => '5 شهور', '6 شهور' =>'6 شهور' , '7 شهور' =>'7 شهور', '8 شهور' =>'8 شهور', '9 شهور' =>'9 شهور', '10 شهور' =>'10 شهور', '11 شهور' =>'11 شهور' ,'عام'=>'عام' ] , null, ['placeholder' => 'ادخل مده الايجار' , 'class' => 'form-control select','style'=>"color: rgb(13, 183, 177)"] ) }}
                        </div>
                    </div>

                    <div class="w-100"></div>

                    <div class="col-md-7">
                        <div class="form-group">
                            {{--                            {{Form::label('flat_price' , 'سعر الشقة',['class'=>'text-right d-block'])}}--}}
                            <span class="custom-fontawseome text-success"><i class="fas fa-dollar-sign mr-2"></i></span>
                            {{Form::number('flat_price' , '' , ['placeholder' => 'ادخل سعر الشقة' , 'class' => 'form-control','style'=>"color: rgb(13, 183, 177)"])}}
                        </div>
                    </div>

                    <div class="w-100"></div>

                    <div class="col-md-7">
                        <div class="form-group">
                            {{--                            {{Form::label('bed_price' , 'سعر السرير',['class'=>'text-right d-block'])}}--}}
                            <span class="custom-fontawseome text-success"><i class="fas fa-dollar-sign mr-2"></i></span>
                            {{Form::number('bed_price' , '' , ['placeholder' => 'ادخل سعر السرير' , 'class' => 'form-control',])}}
                        </div>
                    </div>

                    <div class="w-100"></div>

                    <div class="col-md-7">
                        <div class="form-group ">
                            {{--{{Form::label('flat_services' , 'الخدمات',['style'=>"color: #AE0E0E",'class'=>'text-right d-block'])}}--}}
                            <div class="text-right">
                                <span></span>
                                {{Form::radio('flat_services','1',  (old ('flat_services') == '1' ), ['class' => ' mb-3 mt-4 radio1','style'=>"color: rgb(13, 183, 177)",'id'=>'Fs'] ) }}
                                {{Form::label('flat_services' , 'توجد خدمات بالشقه',['class'=>'text-right','for'=>'Fs'])}}
                            </div>

                            <div class="text-right">
                                {{Form::radio('flat_services','0',  (old ('flat_services') == '0' ), ['class' => 'radio2','style'=>"color: rgb(13, 183, 177)",'id'=>'second'] ) }}
                                {{Form::label('flat_services' , 'لا توجد خدمات بالشقه',['class'=>'text-right','for'=>'second'])}}
                            </div>
                        </div>
                    </div>

                    <div class="w-100"></div>

                    <div class="col-md-7">
                        <div class="form-group">
                            {{--                            {{Form::label('flat_description' , 'وصف الشقة',['class'=>'text-right d-block'])}}--}}
                            {{Form::textarea('flat_description' , '' , ['placeholder' => 'مواصفات المكان' ,'class' => 'form-control textarea' ,'id' => 'article-ckeditor'])}}
                        </div>
                    </div>

                    <div class="w-100"></div>

                    <div class="col-md-7 mt-3">
                        <div class="text-right">

                            <label for="file" class="file-label font-weight-bold font-italic bg-primary">
                                <i class="fas fa-upload pl-2"></i>
                                ارفع صورة
                            </label>

                            {{Form::file('cover_image',['class'=>'file-input','id'=>'file'])}}
                            {{--                            {{Form::label('' , 'صورة للمكان',['class'=>''])}}--}}
                            <span class="img-name"></span>
                        </div>
                    </div>

                    <div class="w-100"></div>

                    {{Form::submit('ادخل بيانات شقتك' , ['class' => 'btn btn-success px-5 mt-5 font-weight-bold'])}}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection