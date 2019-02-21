@extends('include.master')

@section('content')
    {{--<div class="container">--}}
    {{--<div class="row justify-content-center">--}}
    {{--<div class="col-md-8">--}}
    {{--<div class="card">--}}
    {{--<div class="card-header">{{ __('Register') }}</div>--}}

    {{--<div class="card-body">--}}
    {{--<form method="POST" action="{{ route('register') }}">--}}
    {{--@csrf--}}

    {{--<div class="form-group row">--}}
    {{--<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

    {{--<div class="col-md-6">--}}
    {{--<input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>--}}

    {{--@if ($errors->has('name'))--}}
    {{--<span class="invalid-feedback" role="alert">--}}
    {{--<strong>{{ $errors->first('name') }}</strong>--}}
    {{--</span>--}}
    {{--@endif--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="form-group row">--}}
    {{--<label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>--}}

    {{--<div class="col-md-6">--}}
    {{--<input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>--}}

    {{--@if ($errors->has('username'))--}}
    {{--<span class="invalid-feedback" role="alert">--}}
    {{--<strong>{{ $errors->first('username') }}</strong>--}}
    {{--</span>--}}
    {{--@endif--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="form-group row">--}}
    {{--<label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Phone_number') }}</label>--}}

    {{--<div class="col-md-6">--}}
    {{--<input id="phone_number" type="text" class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" name="phone_number" value="{{ old('phone_number') }}" required autofocus>--}}

    {{--@if ($errors->has('phone_number'))--}}
    {{--<span class="invalid-feedback" role="alert">--}}
    {{--<strong>{{ $errors->first('phone_number') }}</strong>--}}
    {{--</span>--}}
    {{--@endif--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="form-group row">--}}
    {{--<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

    {{--<div class="col-md-6">--}}
    {{--<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>--}}

    {{--@if ($errors->has('email'))--}}
    {{--<span class="invalid-feedback" role="alert">--}}
    {{--<strong>{{ $errors->first('email') }}</strong>--}}
    {{--</span>--}}
    {{--@endif--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="form-group row">--}}
    {{--<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

    {{--<div class="col-md-6">--}}
    {{--<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>--}}

    {{--@if ($errors->has('password'))--}}
    {{--<span class="invalid-feedback" role="alert">--}}
    {{--<strong>{{ $errors->first('password') }}</strong>--}}
    {{--</span>--}}
    {{--@endif--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="form-group row">--}}
    {{--<label for="role" class="form-control">{{ __('Register As') }}</label>--}}

    {{--<div class="col-md-6">--}}
    {{--<input id="orole" type="radio" class="form-control{{ $errors->has('role') ? ' is-invalid' : '' }}" name="role" value="2">Owner--}}
    {{--<input  id="srole" type="radio" class="form-control{{ $errors->has('role') ? ' is-invalid' : '' }}" name="role" value="3">Student--}}

    {{--@if ($errors->has('phone_number'))--}}
    {{--<span class="invalid-feedback" role="alert">--}}
    {{--<strong>{{ $errors->first('phone_number') }}</strong>--}}
    {{--</span>--}}
    {{--@endif--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="form-group row">--}}
    {{--<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

    {{--<div class="col-md-6">--}}
    {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="form-group row mb-0">--}}
    {{--<div class="col-md-6 offset-md-4">--}}
    {{--<button type="submit" class="btn btn-primary">--}}
    {{--{{ __('Register') }}--}}
    {{--</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</form>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    <div class="container my-5">
        <div class="row justify-content-center" style="margin-left:0;margin-right: 0 ">
            <div class="col-lg-6 col-md-8 col-sm-10 col-12 custom-form-rg pt-4" >
                {{--<div class="card">--}}
                {{--<div class="card-header">{{ __('Register') }}</div>--}}

                {{--<div class="card-body">--}}


                <h1 class="text-center mt-0 pt-0 font-italic">انشاء حساب جديد</h1>
                <form method="POST" action="{{ route('register') }}" class="register register-form-validation" style="direction: rtl">
                    @csrf

                    <div class="form-group row">
                        {{--<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

                        <div class="col-lg-7 col-md-8 col-10 mx-auto">
                            <span class="custom-fontawseome"><i class="fas fa-user"></i></span>
                            <input id="name" type="text" class="form-control myname {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}"required autofocus placeholder="الاسم">

                            {{--<span class="name-validation text-right float-right"></span>--}}
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        {{--<label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>--}}

                        <div class="col-lg-7 col-md-8 col-10 mx-auto">
                            <span class="custom-fontawseome"><i class="fas fa-user"></i></span>
                            <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus placeholder="اسم المستخدم">

                            @if ($errors->has('username'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        {{--<label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Phone_number') }}</label>--}}

                        <div class="col-lg-7 col-md-8 col-10 mx-auto">
                            <span  class="custom-fontawseome"><i class="fas fa-phone"></i></span>
                            <input id="phone_number" type="number" class="phone form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" name="phone_number" value="{{ old('phone_number') }}"required autofocus placeholder="رقم المحمول">
                            {{--<span class="text-right float-right phone-span"></span>--}}

                            @if ($errors->has('phone_number'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        {{--<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

                        <div class="col-lg-7 col-md-8 col-10 mx-auto">
                            <span  class="custom-fontawseome"><i class="far fa-envelope" style="font-size: 16px"></i></span>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"  required placeholder="البريد الاكترونى">

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        {{--<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

                        <div class="col-lg-7 col-md-8 col-10 mx-auto">
                            <span  class="custom-fontawseome"><i class="fas fa-key "></i></span>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="كلمة السر">

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>


                    </div>
                    <div class="form-group row">
                        {{--<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

                        <div class="col-lg-7 col-md-8 col-10 mx-auto">
                            <span  class="custom-fontawseome"><i class="fas fa-key "></i></span>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="تاكيد كلمة السر">
                        </div>
                    </div>

                    <div class="form-group row text-right">
                        {{--<div class="col-lg-7 col-md-8 col-10">--}}
                        {{--<label for="role" class="font-weight-bold">{{ __('Register As') }}</label>--}}
                        {{--</div>--}}


                        <div class="col-lg-7 col-md-8 col-10  mx-auto">

                            <label for="" class="font-weight-bold font-italic">النوع : </label>

                            <label class="content pr-5 font-weight-bold font-italic">ذكر

                                <input id="orole" type="radio" name="gender" class="align-self-center radio" value="male" checked>
                                <span class="custom-radio"></span>
                            </label>

                            <label class="content pr-5 font-weight-bold font-italic"> أنثي

                                <input  id="srole" type="radio" class="align-self-center radio" name="gender" value="female">
                                <span class="custom-radio"></span>
                            </label>

                            @if ($errors->has('phone_number'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="col-lg-7 col-md-8 col-10  mx-auto">

                            <label for="" class="font-weight-bold font-italic">تسجيل الدخول ك : </label>

                            <label class="content pr-5 font-weight-bold font-italic">مالك عقار

                                <input id="orole" type="radio" class=" {{ $errors->has('role') ? ' is-invalid' : '' }}" name="role" value="2" checked>
                                <span class="custom-radio"></span>
                            </label>

                            <label class="content pr-5 font-weight-bold font-italic"> مؤجر

                                <input  id="srole" type="radio" class="align-self-center radio{{ $errors->has('role') ? ' is-invalid' : '' }}" name="role" value="3">
                                <span class="custom-radio"></span>
                            </label>

                            @if ($errors->has('phone_number'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>


                    <div class="form-group row text-center">
                        <div class="col-lg-7 col-md-8 col-10 mx-auto">
                            <button type="submit" class="btn btn-register px-5 mb-0 font-weight-bold">
                                {{ __('تسجيل دخول') }}
                            </button>
                        </div>
                    </div>
                </form>

                {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
@endsection
