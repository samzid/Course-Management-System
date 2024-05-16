@extends('layouts.frontend_master')
@section('main_content')






<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="LearnPress | Education & Courses HTML Template" />
<meta name="keywords" content="academy, course, education, education html theme, #, learning," />


<!-- Page Title -->
<title>LearnPress | Education & Courses HTML Template</title>

<!-- Favicon and Touch Icons -->
<link href="{{ asset('frontend/assets') }}/images/1748675192817837.png" rel="shortcut icon" type="image/png">
<link href="{{ asset('frontend') }}/images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="{{ asset('frontend') }}/images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="{{ asset('frontend') }}/images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="{{ asset('frontend') }}/images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="{{ asset('frontend') }}/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="{{ asset('frontend') }}/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="{{ asset('frontend') }}/css/animate.css" rel="stylesheet" type="text/css">
<link href="{{ asset('frontend') }}/css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="{{ asset('frontend') }}/css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="{{ asset('frontend') }}/css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="{{ asset('frontend') }}/css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="{{ asset('frontend') }}/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="{{ asset('frontend') }}/css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="{{ asset('frontend') }}/js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="{{ asset('frontend') }}/js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="{{ asset('frontend') }}/js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="{{ asset('frontend') }}/css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="{{ asset('frontend') }}/js/jquery-2.2.4.min.js"></script>
<script src="{{ asset('frontend') }}/js/jquery-ui.min.js"></script>
<script src="{{ asset('frontend') }}/js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="{{ asset('frontend') }}/js/jquery-plugin-collection.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>





<body class="">
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <img alt="" src="{{ asset('frontend') }}/assets/images/preloaders/5.gif">
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>

  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: home -->



    
    <section id="home" class="divider parallax fullscreen layer-overlay overlay-dark-9" data-bg-img="{{ asset('frontend') }}/assets/images/bg/bg1.jpg">
      <div class="display-table">
        <div class="display-table-cell">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-md-push-3">
                <div class="text-center mb-60"><a href="#" class=""><img alt="" src="{{ asset('frontend') }}/assets/images/logo-wide.png"></a></div>
                <form action="{{ route('user.store') }}" name="reg-form" class="register-form form-transparent" method="POST">
                @csrf
                <div class="icon-box mb-0 p-0">
                    <a href="#" class="icon icon-bordered icon-rounded icon-sm pull-left mb-0 mr-10">
                      <i class="pe-7s-users"></i>
                    </a>
                    <h4 class="text-theme-colored pt-10 mt-0 mb-30">Don't have an Account? Register Now.</h4>
                  </div>
                  <hr>
                  <p class="text-gray"></p>

                  <div class="row">
                    <div class="form-group col-md-6">
                      <label>Name</label>
                      <input name="name" class="form-control" type="text">
                    </div>
                    <div class="form-group col-md-6">
                      <label>Email Address</label>
                      <input name="email" class="form-control" type="email">
                    </div>
                  </div>

                  <div class="row">

                    <div class="form-group col-md-4">
                      <label>Department</label>
                      <input name="department" class="form-control" type="text">
                    </div>

                    <div class="form-group col-md-4">
                      <label>Student ID</label>
                      <input name="student_id" class="form-control" type="text">
                    </div>

                    <div class="form-group col-md-4">
                      <label>Batch</label>
                      <input name="batch" class="form-control" type="text">
                    </div>
                  </div>


                  <div class="row">
                    <div class="form-group col-md-6">
                      <label>Section</label>
                      <input name="section" class="form-control" type="text">
                    </div>
                    <div class="form-group col-md-6">
                      <label>Phone</label>
                      <input name="phone" class="form-control" type="text">
                    </div>
                  </div>



                  <div class="row">
                    <div class="form-group col-md-12">
                      <label>Address</label>
                      <input name="address" class="form-control" type="test">
                    </div>           
                  </div>


                  <div class="row">
                    <div class="form-group col-md-6">
                      <label>Password</label>
                      <input name="password" class="form-control" type="password">
                    </div>
                    <div class="form-group col-md-6">
                      <label>Confirm Password</label>
                      <input name="password_confirmation" class="form-control" type="password">
                    </div>
                  </div>

                  <div class="form-group">
                    <button class="btn btn-dark btn-lg btn-block mt-15" type="submit">Register Now</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>




  </div>
  <!-- end main-content -->

  <!-- Footer -->
  <footer id="footer" class="footer bg-black-222">
    <div class="container p-20">
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="mb-0"><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="{{ asset('frontend') }}/assets/js/custom.js"></script>

</body>

<!-- form-register-style222:31-->
</html>


@endsection
