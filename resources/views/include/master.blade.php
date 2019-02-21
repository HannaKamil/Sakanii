<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sakenii</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link rel="icon" href="{{asset('img/facts-bg.jpg')}}" type="image/x-icon">
    <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    {{--<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">--}}
    <link href="https://fonts.googleapis.com/css?family=El+Messiri" rel="stylesheet">
    <!-- Bootstrap CSS File -->
    <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Libraries CSS Files -->
    <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/validation.css')}}" rel="stylesheet">


<body>

@include('include.nav')
@include('include.header')

@yield('content')
<!--==========================
    Footer
  ============================-->
<footer id="footer" style="direction: rtl">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-info">
                    <h3 class="text-right pr-3">سكنى</h3>
                    <p class="text-right ">موقع سكني افضل موقع في تاجير العقارات حيث يوفر لك جميع العقارات الني تناسبك و بجميع الاسعار  </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4 class="text-right"><a href="/flats">تصفح موقعنا</a></h4>
                    <ul class="text-right">
                        <li> <a href="/home">الصفحة الرئيسية</a><i class="ion-ios-arrow-left"></i></li>
                        <li><a href="/home/#team">من نحن</a><i class="ion-ios-arrow-left"></i></li>
                        <li><a href="/home/#services">خدماتنا</a><i class="ion-ios-arrow-left"></i></li>
                        <li><a href="#">Terms of service</a><i class="ion-ios-arrow-left"></i> </li>
                        <li><a href="#">Privacy policy</a><i class="ion-ios-arrow-left"></i> </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h4 class="text-right"><a href="/home/#contact">اتصل بنا</a> </h4>
                    <p class="text-right">
                        20 شارع مصنع سيد, اسيوط, مصر <br>
                        المنيا<br>
                        مصر  <br>
                        <strong>Phone:</strong> 01119399781<br>
                        <strong>Email:</strong> sakeniiteam@gmail.com<br>
                    </p>

                    <div class="social-links">
                        <a href="https://www.twitter.com" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.facebook.com" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.instagram.com" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="https://www.google-plus.com" class="google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="https://www.linkedin.com" class="linkedin"><i class="fa fa-linkedin"></i></a>
                    </div>

                </div>

                <div class="col-lg-3 col-md-6 footer-newsletter">
                    <h4 class="text-right">ما الجديد</h4>
                    <p class="text-right">ما الجديد</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit"  value="اشترك">
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
              <strong>سكني</strong>. جميع الحقوق محفوظه لدي&copy;
        </div>
        <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
            -->
            صممت بواسطه<a href="/home/#team">فريق سكني  </a>
        </div>
    </div>
</footer><!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
<script src="{{asset('lib/jquery/jquery-migrate.min.js')}}"></script>
<script src="{{asset('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('lib/easing/easing.min.js')}}"></script>
<script src="{{asset('lib/superfish/hoverIntent.js')}}"></script>
<script src="{{asset('lib/superfish/superfish.min.js')}}"></script>
<script src="{{asset('lib/wow/wow.min.js')}}"></script>
<script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('lib/counterup/counterup.min.js')}}"></script>
<script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('lib/isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('lib/lightbox/js/lightbox.min.js')}}"></script>
<script src="{{asset('lib/touchSwipe/jquery.touchSwipe.min.js')}}"></script>
<!-- Contact Form JavaScript File -->
<script src="{{asset('contactform/contactform.js')}}"></script>

<!-- Template Main Javascript File -->
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/validation.js')}}"></script>
<script src="{{asset('js/jquery.validate.min.js')}}"></script>
<script src="{{asset('js/additional-methods.min.js')}}"></script>
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'article-ckeditor' );
</script>
</body>
</html>