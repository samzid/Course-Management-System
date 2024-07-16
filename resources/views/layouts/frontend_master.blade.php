<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>University course management system</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('frontend') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/fontawesome.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/owl.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/lightbox.css">
    <!--

TemplateMo 557 Grad School

https://templatemo.com/tm-557-grad-school

-->


<!---------------------- start new cdn link ----------------------------------->

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="LearnPress | Education & Courses HTML Template" />
<meta name="keywords" content="academy, course, education, education html theme, #, learning," />


<!-- Page Title -->
<title>University course management system</title>

<!-- Favicon and Touch Icons -->
<link href="{{ asset('frontend') }}/assets/images/favicon.png" rel="shortcut icon" type="image/png">
<link href="{{ asset('frontend') }}/assets/images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="{{ asset('frontend') }}/assets/images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="{{ asset('frontend') }}/assets/images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="{{ asset('frontend') }}/assets/images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="{{ asset('frontend') }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="{{ asset('frontend') }}/assets/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="{{ asset('frontend') }}/assets/css/animate.css" rel="stylesheet" type="text/css">
<link href="{{ asset('frontend') }}/assets/css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="{{ asset('frontend') }}/assets/css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="{{ asset('frontend') }}/assets/css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="{{ asset('frontend') }}/assets/css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="{{ asset('frontend') }}/assets/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="{{ asset('frontend') }}/assets/css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | For Dark Layout -->
<link href="{{ asset('frontend') }}/assets/css/style-main-dark.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="{{ asset('frontend') }}/assets/js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="{{ asset('frontend') }}/assets/js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="{{ asset('frontend') }}/assets/js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="{{ asset('frontend') }}/assets/css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="{{ asset('frontend') }}/assets/js/jquery-2.2.4.min.js"></script>
<script src="{{ asset('frontend') }}/assets/js/jquery-ui.min.js"></script>
<script src="{{ asset('frontend') }}/assets/js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="{{ asset('frontend') }}/assets/js/jquery-plugin-collection.js"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="{{ asset('frontend') }}/assets/js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="{{ asset('frontend') }}/assets/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->




















<!--------------------------------- end new cdn link ------------------------------>

</head>

<body>







@include('frontend.include.header')


    @yield('main_content')

@include('frontend.include.footer')





    <!-- Scripts start -->

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('frontend') }}/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('frontend') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('frontend') }}/assets/js/isotope.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/owl-carousel.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/lightbox.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/tabs.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/video.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/slick-slider.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/custom.js"></script>
    <script src="{{asset('assets/js/addToCart.js')}}"></script>
    <!-- Scripts end -->


</body>

</html>
