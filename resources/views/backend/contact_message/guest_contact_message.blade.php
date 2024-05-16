@extends('layouts.admin_dashboard')
@section('admin_content')
    <div class="card">
        <div class="card-header">Guest Message List</div>
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

                        @foreach ($guests_contact_message as $view_contact_messages)
                            <tr>
                                <td>{{ $sn++ }}</td>
                                <td>{{ $view_contact_messages->name }}</td>
                                <td>{{ $view_contact_messages->phone }}</td>
                                <td>{{ $view_contact_messages->email }}</td>
                                <td>See From General View</td>

                                <td>

                                    <a href="{{ route('contact_message.delete',$view_contact_messages->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-trash"></i></a>
                                    <a href="{{ route('guest_message.general_view',$view_contact_messages->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a>

                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div><!-- table-wrapper -->
        </div>
    </div><!-- card -->
@endsection
