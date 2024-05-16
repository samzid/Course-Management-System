@extends('layouts.admin_dashboard')

@section('admin_content')









<!-- Button trigger modal -->





  <section class="section coming-soon" data-section="section3" id="register">
    <div class="row">
        <div class="col-10 tabel_container">

            <h3 style="color: rgb(223, 209, 209)">All Course <span> <button style="width: 140px; height:50px; margin-left:100px; " type="button" class="btn btn-dark mb-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Add Course
              </button></span></h3>


            <table class="table table-bordered" style="margin-left: -20px">
                <thead>


                    <tr>
                        <th>Name</th>
                        {{-- <th>Description</th> --}}
                        <th>Type</th>
                        <th>Credit</th>
                        <th>Fee</th>
                        <th>Duration</th>
                        <th>Dept</th>
                       <th>Image</th>
                    <th>Action</th>
                    </tr>
                </thead>





                <tbody>


                    @foreach ($department_view as $key=>$department_views)
                    <tr>


                        <td>{{ $department_views->name }}</td>
                        {{-- <td>{{ $department_views->description }}</td> --}}
                        <td>{{ $department_views->type }}</td>
                        <td>{{ $department_views->credit }}</td>
                        <td>{{ $department_views->fee }}</td>
                        <td>{{ $department_views->duration }}</td>
                        <td>{{ $department_views->department }}</td>
                        <td>
                            <img src="{{ asset($department_views->image) }}" alt="" height="80px">
                        </td>



                        {{-- <td>
                            <a href="{{ route('edit.department', $department_views->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                            <a href="{{ route('delete.department', $department_views->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-trash"></i></a>
                        </td> --}}



                        <td style="width: 10%">
                            <div class="row g-1">
                                <a href="{{ route('edit.department', $department_views->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <a href="{{ route('delete.department', $department_views->id) }}" class="btn btn-danger btn-sm">Delete</a>
                            </div>
                        </td>




                    </tr>
                @endforeach









                </tbody>
            </table>
        </div>



    </div>
</section>















{{--
        <div class="row">





            <div class="col-10">
                <div class="card" style="width: 1450px">
                    <div class="card-header border-bottom">
                        <h4 class="card-title">All Non Academic Course</h4>
                    </div>
                    <div class="card-datatable">
                        <table class="dt-responsive table dataTable dtr-column" id="DataTables_Table_3"
                            role="grid" aria-describedby="DataTables_Table_3_info" style="text-align: center">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody style="width: 480px">
                                @foreach ($department_view as $key=>$department_views)
                                    <tr>

                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $department_views->name }}</td>
                                        <td>{{ $department_views->description }}</td>
                                        <td>
                                            <img src="{{ asset($department_views->image) }}" alt="" height="80px">
                                        </td>



                                        <td>
                                            <a href="{{ route('edit.department', $department_views->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                            <a href="{{ route('delete.department', $department_views->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-trash"></i></a>
                                        </td>



                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

 --}}






  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">All Course</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ route('store.department') }}" enctype="multipart/form-data"
            class="form form-vertical">
            @csrf
            <div class="row">

                <div class="col-12">
                    <div class="mb-1">
                        <label class="form-label" for="first-name-icon">Course Name</label>
                        <div class="input-group input-group-merge">
                            <input type="text" id="first-name-icon" class="form-control" name="name"
                                placeholder="Course Name">
                        </div>
                        @error('title_name_en')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>






                <div class="col-6">
                    <div class="mb-1">
                        <label class="form-label" for="first-name-icon">Type</label>
                        <div class="input-group input-group-merge">
                            <input type="text" id="first-name-icon" class="form-control" name="type"
                                placeholder="Course Type">
                        </div>
                        @error('title_name_en')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>





                <div class="col-6">
                    <div class="mb-1">
                        <label class="form-label" for="first-name-icon">Duration</label>
                        <div class="input-group input-group-merge">
                            <input type="text" id="first-name-icon" class="form-control" name="duration"
                                placeholder="Duration">
                        </div>
                        @error('title_name_en')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>




                <div class="col-6">
                    <div class="mb-1">
                        <label class="form-label" for="first-name-icon">Credit</label>
                        <div class="input-group input-group-merge">
                            <input type="text" id="first-name-icon" class="form-control" name="credit"
                                placeholder="Credit">
                        </div>
                        @error('title_name_en')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>



                <div class="col-6">
                    <div class="mb-1">
                        <label class="form-label" for="first-name-icon">Fee</label>
                        <div class="input-group input-group-merge">
                            <input type="text" id="first-name-icon" class="form-control" name="fee"
                                placeholder="Course Fee">
                        </div>
                        @error('title_name_en')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>





                <div class="col-6">
                    <div class="mb-1">
                        <label class="form-label" for="first-name-icon">Department</label>
                        <div class="input-group input-group-merge">


                                <select style="background-color: #283046" id="department" name="department" class="form-control"
                                >
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
                        <label class="form-label" for="first-name-icon">Image</label>
                        <div class="input-group input-group-merge">
                            <input type="file" id="first-name-icon" class="form-control" name="image">
                        </div>
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>





                <div class="col-12">
                    <div class="mb-1">
                        <div class="form-group shadow-textarea">
                            <label for="exampleFormControlTextarea6">Description</label>
                            <textarea name="description" class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="2"
                                placeholder="Write something here..."></textarea>
                        </div>
                        @error('description_name_en')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>


                <div class="col-12">
                    <button type="submit"
                        class="btn btn-primary me-1 waves-effect waves-float waves-light">Submit</button>
                </div>
            </div>
        </form>
        </div>

      </div>
    </div>
  </div>
{{-- end modal --}}



        </div>

@endsection
