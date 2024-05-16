@extends('layouts.admin_dashboard')
@section('admin_content')
    <style>
        tbody>tr>td {


            color: yellow;
        }
    </style>








    {{-- Employee wise search Start --}}
    <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="card" style="height: 70px; width:280px">
            <div class="card-datatable">
                <form method="POST" action="{{ route('search_form') }}">
                    @csrf

                    <div class="row">
                        <div class="col-12" style="display: flex">
                            <div>
                                <label class="form-label" style="margin-left: 10px; font-weight:bold"
                                    for="first-name-icon">Studen ID wise search ff</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="student_id"
                                        aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div>
                                <button type="submit"
                                    class="btn btn-primary btn-sm me-1 waves-effect waves-float waves-light"
                                    style="display: flex; margin-top:34.5px; margin-left: 14px">Submit</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Employee wise search End --}}

    @if ($errors->any())
        <span>{{ $errors->first() }}</span>
    @endif







    <div class="card" style="overflow: scroll;">
        <div class="card-header">Registration Form List</div>
        <div class="card-body">
            <div class="table-wrapper">
                <table style="text-align: center" id="datatable1" class="table display responsive nowrap">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Name</th>
                            <th>ID</th>
                            <th>Department</th>
                            <th>Batch</th>
                            <th>Section</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Semester</th>
                            <th>Action</th>
                        </tr>
                    </thead>




                    <tbody>

                        @php
                            $sn = 1;
                        @endphp

                        @foreach ($registration_form as $registration_forms)
                            <tr>
                                <td>{{ $sn++ }}</td>
                                <td>{{ $registration_forms->student_name }}</td>
                                <td>{{ $registration_forms->student_id }}</td>
                                <td>{{ $registration_forms->department }}</td>
                                <td>{{ $registration_forms->batch }}</td>
                                <td>{{ $registration_forms->section }}</td>
                                <td>{{ $registration_forms->email }}</td>
                                <td>{{ $registration_forms->phone }}</td>
                                <td>{{ $registration_forms->semester }}</td>


                                <td style="display: flex">

                                    <a href="{{ route('general_view.registration',  ['student_id' => $registration_forms->student_id, 'semester_name' => $registration_forms->semester]) }}"
                                        class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a>


                                    <form method="POST"
                                        action="{{ route('delete.registration_data', $registration_forms->id) }}"
                                        style="margin-left: 5px">
                                        @csrf
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button type="submit"
                                            class="btn btn-xs btn-danger btn-flat show_confirm fa fa-trash"
                                            data-toggle="tooltip" title='Delete'></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div><!-- table-wrapper -->
        </div>
    </div><!-- card -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

    <script type="text/javascript">
        $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `Are you sure you want to delete this record?`,
                    text: "If you delete this, it will be gone forever.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });
    </script>
@endsection
