<!DOCTYPE html>

<html class="loading dark-layout" lang="en" data-layout="dark-layout" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard University Course Management System</title>
    <link rel="apple-touch-icon" href="{{ asset('backend') }}/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend') }}/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

{{--    <link rel="apple-touch-icon" href="{{ asset('backend') }}/app-assets/images/ico/apple-icon-120.png">--}}
{{--    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend') }}/app-assets/images/ico/favicon.ico">--}}
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/app-assets/vendors/css/extensions/toastr.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/app-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/app-assets/css/components.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/app-assets/css/themes/dark-layout.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/app-assets/css/themes/bordered-layout.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/app-assets/css/themes/semi-dark-layout.min.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/app-assets/css/core/menu/menu-types/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/app-assets/css/pages/dashboard-ecommerce.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/app-assets/css/plugins/charts/chart-apex.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/app-assets/css/plugins/extensions/ext-component-toastr.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/assets/css/style.css">
    <!-- END: Custom CSS-->

    <link rel="stylesheet" href="//cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">


{{--Sweet Alert Start--}}
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

{{-- Sweet Alert End--}}




    @yield('css')

  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    @include('backend.include.header')
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    @include('backend.include.leftbar')
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- Dashboard Ecertification Starts -->

          @yield('admin_content')

        </div>  <!-- Dashboard Ecertification ends -->
      </div>
    </div>
    <!-- END: Content-->


   <!-- BEGIN: Customizer-->
    @include('backend.include.rightbar')
    <!-- End: Customizer-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
      {{-- <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT  &copy; 2022<a class="ms-25" href="#" target="_blank">E-Certification</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span class="float-md-end d-none d-md-block">Made by Ishfaque & Rafi </i></span></p> --}}
      <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25"><a class="ms-25" href="#" target="_blank">Course Manangement System, </a><span class="d-none d-sm-inline-block">Made by Samzid & Abid</span></span><span class="float-md-end d-none d-md-block"></i></span></p>

    </footer>

    @yield('script')

    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->

    <script src="//cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('backend') }}/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('backend') }}/app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="{{ asset('backend') }}/app-assets/vendors/js/extensions/toastr.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('backend') }}/app-assets/js/core/app-menu.min.js"></script>
    <script src="{{ asset('backend') }}/app-assets/js/core/app.min.js"></script>
    <script src="{{ asset('backend') }}/app-assets/js/scripts/customizer.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('backend') }}/app-assets/js/scripts/pages/dashboard-ecommerce.min.js"></script>
    <!-- END: Page JS-->


     <!-- BEGIN: Page Vendor JS-->
     <script src="{{ asset('backend') }}/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
     <script src="{{ asset('backend') }}/app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js"></script>
     <script src="{{ asset('backend') }}/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
     <script src="{{ asset('backend') }}/app-assets/vendors/js/tables/datatable/responsive.bootstrap5.js"></script>
     <script src="{{ asset('backend') }}/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
     <!-- END: Page Vendor JS-->

     <!-- BEGIN: Page JS-->
     <script src="{{ asset('backend') }}/app-assets/js/scripts/tables/table-datatables-advanced.min.js"></script>
     <!-- END: Page JS-->

     {{-- chart cdn --}}

    <script>
      $(window).on('load',  function(){
        if (feather) {
          feather.replace({ width: 14, height: 14 });
        }
      })
    </script>
  </body>
  <!-- END: Body-->
</html>
