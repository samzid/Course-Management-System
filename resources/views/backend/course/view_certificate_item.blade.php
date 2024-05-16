@extends('layouts.admin_dashboard')

@section('admin_content')
<style>
    select {

        background-color: black;
    }
</style>



@php
$teachers = App\Models\Teacher::pluck('name', 'id');
@endphp



<section class="section coming-soon" data-section="section3" id="register">
    <div class="row p-2 gx-5">
        <div class="col-8 tabel_container" style="margin-left: 10px">



            <h3> <button style="width: 140px; height:50px; margin-left:900px; " type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Add Course
                </button></span></h3>


            <h3 style="color: rgb(223, 209, 209)">All Offered Course</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Credit</th>
                        <th>Fee(Taka)</th>
                        <th>Duration</th>
                        <th>Department</th>
                        <th>Batch</th>
                        <th>Section</th>
                        <th>Teacher Name</th>


                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($courseView as $course_View)
                    <tr>
                        <td>{{ $course_View->name }}</td>
                        <td>{{ $course_View->type }}</td>
                        <td>{{ $course_View->credit }}</td>
                        <td>{{ $course_View->fee }}</td>
                        <td>{{ $course_View->duration }}</td>

                        <td>{{ $course_View->department }}</td>
                        <td>{{ $course_View->batch }}</td>
                        <td>{{ $course_View->section }}</td>
                        <td>{{ $course_View->teacher_name }}</td>


                        <td style="width: 10%">
                            <div class="row g-1">
                                <a class="btn btn-warning btn-sm">Edit</a>
                                <a class="btn btn-danger btn-sm">Delete</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach






                </tbody>
            </table>
        </div>

        <div class="col-md-1">
        </div>

    </div>





    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Course</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form method="POST" action="{{ route('store.certificate_item') }}" enctype="multipart/form-data" class="form form-vertical">
                        @csrf
                        <div class="row">






                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="first-name-icon">Name</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" name="name" id="first-name-icon" class="form-control" placeholder="Enter Name">
                                    </div>
                                    @error('description_name_en')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="first-name-icon">Type</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" name="type" id="first-name-icon" class="form-control" placeholder="Enter Type">
                                    </div>
                                    @error('description_name_en')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>





                            <div class="col-6">
                                <div class="mb-1">
                                    <label class="form-label" for="first-name-icon">Credit</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" name="credit" id="first-name-icon" class="form-control" placeholder="Enter Credit">
                                    </div>
                                    @error('description_name_en')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-6">
                                <div class="mb-1">
                                    <label class="form-label" for="first-name-icon">Fee</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" name="fee" id="first-name-icon" class="form-control" placeholder="Enter Fee">
                                    </div>
                                    @error('description_name_en')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>





                            <div class="col-6">
                                <div class="mb-1">
                                    <label class="form-label" for="first-name-icon">Department</label>
                                    <div class="input-group input-group-merge">


                                        <select style="background-color: #283046" id="department" name="department" class="form-control">
                                            <option value="CSE">CSE</option>
                                            <option value="EEE">EEE</option>
                                            <option value="Pharmacy">Pharmacy</option>
                                            <option value="BBA">BBA</option>
                                            <option value="English">English</option>
                                        </select>
                                    </div>
                                    @error('title_name_en')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>







                            <div class="col-6">
                                <div class="mb-1">
                                    <label class="form-label" for="first-name-icon">Batch</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" name="batch" id="first-name-icon" class="form-control" placeholder="Enter Batch">
                                    </div>
                                    @error('batch')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>




                            <div class="col-6">
                                <div class="mb-1">
                                    <label class="form-label" for="first-name-icon">Section</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" name="section" id="first-name-icon" class="form-control" placeholder="Enter Section">
                                    </div>
                                    @error('section')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>





                            <div class="col-6">
                                <div class="mb-1">
                                    <label class="form-label" for="first-name-icon">Duration</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" name="duration" id="first-name-icon" class="form-control" placeholder="Enter Duration">
                                    </div>
                                    @error('description_name_en')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>






                            <div class="col-6">
                                <div class="mb-1">
                                    <label class="form-label" for="first-name-icon">Teacher Name</label>
                                    <div class="input-group input-group-merge">
                                        <select style="background-color: #283046" id="department" name="teacher_name" class="form-control">
                                            @foreach($teachers as $teacher)
                                            <option value="{{ $teacher }}">{{ $teacher }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('title_name_en')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>







                            <div class="col-12">
                                <button type="submit" class="btn btn-primary me-1 waves-effect waves-float waves-light">Submit</button>
                            </div>
                        </div>
                    </form>



                </div>

            </div>
        </div>
    </div>
    {{-- end modal --}}





</section>
@endsection
