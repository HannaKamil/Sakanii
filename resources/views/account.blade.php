{{--@extends('include.master')--}}
{{--@section('content')--}}
    {{--<div class="container">--}}
        {{--<h1 class="text-center"> تعديل حسابك </h1>--}}
        {{--<form method="post" action="/account">--}}
            {{--{{csrf_field()}}--}}
            {{--<div class="form-group">--}}
                {{--<label> Name: </label>--}}
                {{--<input name="name" type="text" value="{{$user->name}}" class="form-control">--}}
            {{--</div>--}}
            {{--<div class="form-group">--}}
                {{--<label> Userame: </label>--}}
                {{--<input name="username" type="text" value="{{$user->username}}" class="form-control">--}}
            {{--</div>--}}
            {{--<div class="form-group">--}}
                {{--<label> Phone_number: </label>--}}
                {{--<input name="phone_number" type="text" value="{{$user->phone_number}}" class="form-control">--}}
            {{--</div>--}}
            {{--<div class="form-group">--}}
                {{--<label> Email: </label>--}}
                {{--<input name="email" type="text" value="{{$user->email}}" class="form-control">--}}
            {{--</div>--}}
            {{--<input type="submit" value="تعديل" class="btn btn-success">--}}
        {{--</form>--}}
    {{--</div>--}}

{{--@endsection--}}

@extends('include.master')
@section('content')
    <div class="container my-5">
        <div class="row justify-content-center" style="margin-left:0;margin-right: 0 ">
            <div class="col-lg-6 col-md-8 col-sm-10 col-12 custom-form-rg pt-4" >
                <h1 class="text-center mt-0 pt-0">تعديل البيانات</h1>
                <form method="post" action="/account" style="direction: rtl" class="register">
                    {{csrf_field()}}
                    <div class="form-group row">
                        {{--<label> Name: </label>--}}
                        <div class="col-lg-7 col-md-8 col-10 mx-auto">
                            <span class="custom-fontawseome"><i class="fas fa-user"></i></span>
                            <input name="name" type="text" value="{{$user->name}}" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-7 col-md-8 col-10 mx-auto">
                            <span class="custom-fontawseome"><i class="fas fa-user"></i></span>
                            <input name="username" type="text" value="{{$user->username}}" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-7 col-md-8 col-10 mx-auto">
                            <span  class="custom-fontawseome"><i class="fas fa-phone"></i></span>
                            <input name="phone_number" type="text" value="{{$user->phone_number}}" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-7 col-md-8 col-10 mx-auto">
                            <span  class="custom-fontawseome"><i class="far fa-envelope" style="font-size: 16px"></i></span>
                            <input name="email" type="text" value="{{$user->email}}" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row text-center">
                        <div class="col-lg-7 col-md-8 col-10 mx-auto">
                            <input type="submit" value="تعديل" class="btn btn-register px-5 mb-0 font-weight-bold">
                        </div>
                    </div>

                    {{--<input type="submit" value="تعديل" class="btn btn-success">--}}
                </form>
            </div>
        </div>


    </div>

@endsection