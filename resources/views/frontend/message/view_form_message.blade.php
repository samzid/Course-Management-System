@extends('layouts.frontend_master')

@section('main_content')


<style>

.card{

font-size: 16px;
background-color: skyblue;

}


</style>






    <div class="card" style="margin: 130px 5px 90px 5px">
        <div class="card-header"><h2>Contact Message List</h2></div>
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

                        @foreach ($view_admin_form_message as $view_admin_form_messages)
                            <tr>
                                <td>{{ $sn++ }}</td>
                                <td>{{ $view_admin_form_messages->name }}</td>
                                <td>{{ $view_admin_form_messages->phone }}</td>
                                <td>{{ $view_admin_form_messages->email }}</td>
                                <td>See From General View</td>

                                <td>
                                    <a href="" class="btn btn-sm"><i class="fa fa-trash" style="font-size:22px"></i></a>
                                    <a href="{{route('general_view_admin_form_message',$view_admin_form_messages->id)}}" class="btn btn-sm"><i class="fa fa-eye" style="font-size:22px"></i></a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div><!-- table-wrapper -->
        </div>
    </div><!-- card -->
@endsection
