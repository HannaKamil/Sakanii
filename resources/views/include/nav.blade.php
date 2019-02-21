

<header id="header">
    <div class="container-fluid">

        <div id="logo" class=" text-md-right text-center">
            <h1>
                <a class="navbar-brand" href="{{ url('home') }}" style="font-size: 30px">
                    {{--{{ config('app.name', 'Sakenii') }}--}}
                    سكنى
                </a>
            </h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu d-flex flex-wrap-reverse" style="direction: rtl">
                <li class="form-search">
                    <form action="/search" method="post" role="search" class="form-inline ml-2">
                        {{csrf_field()}}
                        <div class="input-group">
                            <input type="text" class="form-control text-center" name="q" placeholder="أبحث هنا" style="border-radius: 0;" required>
                            <div class="input-group-prepend">
                                <input type="submit" class="btn btn-outline-light font-weight-bold px-2" value="بحث" >
                                {{--<button type="submit" class="btn btn-outline-light px-3 font-weight-bold">بحث</button>--}}
                            </div>
                        </div>
                    </form>
                </li>
                <li><a href="/flats" class="font-size custom-li">العقارات</a></li>
                <li><a href="/flats/create" class="font-size custom-li">أضافه عقار جديد</a></li>
                <li><a href="#about" class="font-size custom-li">من نحن</a></li>
                <li><a href="#services" class="font-size custom-li">خدماتنا</a></li>
                {{--<li><a href="#portfolio" class="font-size">منتجات</a></li>--}}
                <li><a href="/home/#team" class="font-size custom-li">الفريق</a></li>
                {{--<li class="menu-has-children" class="font-size"><a href="">دروب داون</a>--}}
                    {{--<ul>--}}
                        {{--<li><a href="#">Drop Down 1</a></li>--}}
                        {{--<li><a href="#">Drop Down 3</a></li>--}}
                        {{--<li><a href="#">Drop Down 4</a></li>--}}
                        {{--<li><a href="#">Drop Down 5</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                <li><a href="/home/#contact" class="font-size custom-li">اتصل بنا</a></li>
                <li><a href="/account" class="font-size custom-li">حسابي</a></li>


                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link font-size custom-li" href="{{ route('login') }}">تسجيل دخول</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link font-size custom-li" href="{{ route('register') }}">سجل معنا</a>
                        </li>
                    @endif
                @else
                    @if (Auth::user()->role == 1)
                        <li><a href="/control" class=" font-size custom-li">لوحه التحكم</a></li>
                    @endif
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle font-size custom-li" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('تسجيل خروج') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                        </div>
                    </li>

                @endguest

            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->




{{--<header id="header">--}}
        {{--<div class="container-fluid">--}}

            {{--<div id="logo" class="pull-left">--}}
                {{--<h1>--}}
                    {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
                        {{--{{ config('app.name', 'Sakenii') }}--}}
                    {{--</a>--}}
                {{--</h1>--}}
                {{--<!-- Uncomment below if you prefer to use an image logo -->--}}
                {{--<!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->--}}
            {{--</div>--}}

            {{--<nav id="nav-menu-container">--}}
                {{--<ul class="nav-menu">--}}
                    {{--<li><a href="/">Sakenii</a></li>--}}
                    {{--<li><a href="/flats">Flats</a></li>--}}
                    {{--<li><a href="/flats/create">Create_Flat</a></li>--}}
                    {{--<li><a href="#about">About Us</a></li>--}}
                    {{--<li><a href="#services">Services</a></li>--}}
                    {{--<li><a href="#portfolio">Portfolio</a></li>--}}
                    {{--<li><a href="#team">Team</a></li>--}}
                    {{--<li class="menu-has-children"><a href="">Drop Down</a>--}}
                        {{--<ul>--}}
                            {{--<li><a href="#">Drop Down 1</a></li>--}}
                            {{--<li><a href="#">Drop Down 3</a></li>--}}
                            {{--<li><a href="#">Drop Down 4</a></li>--}}
                            {{--<li><a href="#">Drop Down 5</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li><a href="#contact">Contact</a></li>--}}

                        {{--<!-- Authentication Links -->--}}
                        {{--@guest--}}
                            {{--<li class="nav-item">--}}
                                {{--<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
                            {{--</li>--}}
                            {{--@if (Route::has('register'))--}}
                                {{--<li class="nav-item">--}}
                                    {{--<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
                                {{--</li>--}}
                            {{--@endif--}}
                        {{--@else--}}
                            {{--<li class="nav-item dropdown">--}}
                                {{--<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
                                    {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                                {{--</a>--}}

                                {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
                                    {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
                                       {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                        {{--{{ __('Logout') }}--}}
                                    {{--</a>--}}

                                    {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                        {{--@csrf--}}
                                    {{--</form>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                        {{--@endguest--}}

                {{--</ul>--}}
            {{--</nav><!-- #nav-menu-container -->--}}
        {{--</div>--}}
    {{--</header><!-- #header -->--}}


