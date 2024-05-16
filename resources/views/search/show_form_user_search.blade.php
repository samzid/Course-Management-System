@extends('layouts.admin_dashboard')
@section('admin_content')
    <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="card" style="height: 70px; width:280px">
            <div class="card-datatable">
                <form method="POST" action="{{ route('search_form') }}">
                    @csrf

                    <div class="row">
                        <div class="col-12" style="display: flex">
                            <div>
                                <label class="form-label" style="margin-left: 10px; font-weight:bold"
                                    for="first-name-icon">Studen ID wise search</label>
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


    <div class="card" style="width: 3100px">
        <div class="card-header">Registration Form List</div>
        <div class="card-body">
            <div class="table-wrapper">
                <table style="text-align: center" id="datatable1" class="table display responsive nowrap">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>ID_Number</th>
                            <th>Studentship_Information</th>
                            <th>Contact_Address</th>
                            <th>Phone_Number</th>
                            <th>Image</th>
                            <th>Campus_Change</th>
                            <th>Department</th>
                            <th>SSC_Certificate</th>
                            <th>HSC_Certificate</th>
                            <th>SSC Marksheet</th>
                            <th>HSC Marksheet</th>
                            <th>UniversityIdCard</th>
                            <th>Library Card</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>



                    <tbody>
                            <tr>
                                <td>{{ $searched_registration_form->name }}</td>
                                <td>{{ $searched_registration_form->id_number }}</td>
                                <td>{{ $searched_registration_form->studentship_information }}</td>
                                <td>{{ $searched_registration_form->contact_address }}</td>
                                <td>{{ $searched_registration_form->phone_number }}</td>

                                <td><img src="{{ asset($searched_registration_form->image) }}" alt=""
                                        style="height:55px; width:80px"></td>
                                {{-- <td>{{ $registration_forms->image }}</td> --}}
                                <td>{{ $searched_registration_form->campus_change }}</td>

                                <td>{{ $searched_registration_form->department }}</td>

                                <td><img src="{{ asset($searched_registration_form->ssc_certificate) }}" alt=""
                                        style="height:55px; width:80px"></td>

                                <td><img src="{{ asset($searched_registration_form->hsc_certificate) }}" alt=""
                                        style="height:55px; width:80px"></td>

                                <td><img src="{{ asset($searched_registration_form->ssc_marksheet) }}" alt=""
                                        style="height:55px; width:80px"></td>

                                <td><img src="{{ asset($searched_registration_form->hsc_marksheet) }}" alt=""
                                        style="height:55px; width:80px"></td>

                                <td><img src="{{ asset($searched_registration_form->university_IdCard) }}" alt=""
                                        style="height:55px; width:80px"></td>


                                <td><img src="{{ asset($searched_registration_form->library_card) }}" alt=""
                                        style="height:55px; width:80px"></td>


                                <td>{{ $searched_registration_form->email }}</td>

                                <td style="display: flex">

                                    <a href="{{ route('general_view.registration', $searched_registration_form->id) }}"
                                        class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a>


                                    <form method="POST"
                                        action="{{ route('delete.registration_data', $searched_registration_form->id) }}"
                                        style="margin-left: 5px">
                                        @csrf
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button type="submit"
                                            class="btn btn-xs btn-danger btn-flat show_confirm fa fa-trash"
                                            data-toggle="tooltip" title='Delete'></button>
                                    </form>
                                </td>
                            </tr>

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
