<!DOCTYPE html>

<html class="loading dark-layout" lang="en" data-layout="dark-layout" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Edification - Responsive Education HTML5 Template</title>
    <link rel="apple-touch-icon" href="{{ asset('backend') }}/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend') }}/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend') }}/app-assets/vendors/css/extensions/toastr.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/app-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/app-assets/css/components.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/app-assets/css/themes/dark-layout.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/app-assets/css/themes/bordered-layout.min.css">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend') }}/app-assets/css/themes/semi-dark-layout.min.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend') }}/app-assets/css/core/menu/menu-types/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend') }}/app-assets/css/pages/dashboard-ecommerce.min.css">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend') }}/app-assets/css/plugins/charts/chart-apex.min.css">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend') }}/app-assets/css/plugins/extensions/ext-component-toastr.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend') }}/app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend') }}/app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend') }}/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/assets/css/style.css">
    <!-- END: Custom CSS-->

    <link rel="stylesheet" href="//cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">


    {{-- Sweet Alert Start --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    {{-- Sweet Alert End --}}




    @yield('css')

</head>
<!-- END: Head-->

<body>






    <style>
        body {
            background-color: rgb(15, 16, 16);
        }
    </style>





    <div class="container">


        <div class="contact-form">


            <div class="row" style="background-color: #9bb1c4; width:800px; margin-left:200px ">

                <div class="col-md-12">
                    <h2>
                        User drop a line here
                    </h2>

                    <div data-form-type="formoid">
                        <form class="block mbr-form" method="POST" action="{{ route('store_user_message') }}"
                            data-form-title="Mobirise Form"><input type="hidden" data-form-email="true"
                                value="VyfBhjXY/U/Zmt1Pt1h8AUq3OZw8hzMN2LHhS02AKmRlJXOXYztQHFLe4ZtOqtsGZcolY6Zc/k02XjN6+grxxBoiXlO8zOY2aPEWv+XteZzFKh7BTcuG/y+UuTZ6thxI">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 multi-horizontal" data-for="name">
                                    <input style="font-size: 16px" type="text" class="form-control input"
                                        value="{{ Auth::user()->name }}" name="name" data-form-field="Name"
                                        placeholder="Your Name" id="name-form4-2y">
                                </div>
                                <div class="col-md-6 multi-horizontal" data-for="phone">
                                    <input style="font-size: 16px" type="text" class="form-control input"
                                        value="{{ Auth::user()->phone }}" name="phone" data-form-field="Phone"
                                        placeholder="Phone" id="phone-form4-2y">
                                </div>
                                <div class="col-md-12 mt-1" data-for="email">
                                    <input style="font-size: 16px" type="text" class="form-control input"
                                        value="{{ Auth::user()->email }}" name="email" data-form-field="Email"
                                        placeholder="Email" required="" id="email-form4-2y">
                                </div>
                                <div class="col-md-12 mt-1" data-for="message">
                                    <textarea style="font-size: 16px" class="form-control input" name="message" rows="2"
                                        data-form-field="Message" placeholder="Message" required="" id="message-form4-2y"></textarea>
                                </div>
                                <input type="number" value="{{ Auth::user()->id }}" name="user_id" hidden>
                                <div class="input-group-btn col-md-12 mt-1" style="margin-top:-50px">
                                    <button href="" type="submit"
                                        class="btn btn-primary btn-form display-4">SEND MESSAGE</button>
                                </div>
                            </div><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>








</body>
<!-- END: Body-->

</html>
