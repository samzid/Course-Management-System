



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
    <title>Dashboard E-certification</title>
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




<div class="container" style="margin-top: 30px">



      <div class="card">
        <div class="card-header">Contact Message List</div>


        <span style="margin-left: 1000px" class="btn btn-info"><a href="{{route('user_message')}}">Send Message</a></span>





        <div class="card-body">

            <div class="table-wrapper">
                <table id="datatable1" class="table display responsive nowrap">
                    <thead>
                        <tr>
                            <th class="wd-30p">SN</th>
                            <th class="wd-30p">Name</th>
                            <th class="wd-20p">Phone</th>
                            <th class="wd-20p">Email</th>
                            <th class="wd-20p">Message</th>
                            <th class="wd-20p">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @php
                            $sn = 1;
                        @endphp

                        @foreach ($view_contact_message as $view_contact_messages)
                            <tr>
                                <td>{{ $sn++ }}</td>
                                <td>{{ $view_contact_messages->name }}</td>
                                <td>{{ $view_contact_messages->phone }}</td>
                                <td>{{ $view_contact_messages->email }}</td>
                                <td>See From General View</td>

                                <td>

                                    <a href="{{ route('contact_message.delete',$view_contact_messages->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-trash"></i></a>
                                    <a href="{{ route('contact_message.general_view',$view_contact_messages->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a>

                                </td>

                                {{-- <td>
              <a href="{{ route('user_list.edit',$item->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>

              <a href="{{ route('user.delete',$item->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
            </td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div><!-- table-wrapper -->
        </div>
    </div><!-- card -->




</div>



  </body>
  <!-- END: Body-->
</html>






























