@extends('layouts.frontend_master')

@section('main_content')
    <style>
        .edit_delete a {
            margin-left: 10px;
        }
    </style>



    <section class="section" data-section="section3" style="margin: 100px 40px">
        <div class="row" style="margin-left: 20px">

            <div class="col-md-9 tabel_container">
                {{-- <h3>All Course</h3>  <a type="button" class="btn btn-success btn-lg" href="{{ route('registration.form') }}">Take Course
                    </a> --}}


                    <h3 style="color: rgb(5, 0, 0)">All Course <span style="margin-left: 40px"> <a type="button" class="btn btn-primary btn-lg" href="{{ route('registration.form') }}">Take Course Directly
                    </a></span></h3>    


                    
                <table class="table table-bordered">
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


                    {{-- 
                <tbody>

                    @foreach ($courseView as $course_View)
                        <tr>
                            <td style="width: 30%">{{ $course_View->name }}</td>
                            <td style="width: 17%">{{ $course_View->type }}</td>
                            <td style="width: 10%">{{ $course_View->credit }}</td>
                            <td style="width: 10%">{{ $course_View->fee }}</td>
                            <td style="width: 17%">{{ $course_View->duration }}</td>
                        </tr>
                    @endforeach


                </tbody> --}}








                    <tbody>


                        @foreach (App\Models\Admin\Department::get() as $key => $department_views)
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



                                <td style="width: 15%">
                                    <div class="row g-1 edit_delete">
                                        <a href="{{ route('edit.department', $department_views->id) }}"
                                            class="btn btn-warning btn-sm">Edit</a>
                                        <a href="{{ route('delete.department', $department_views->id) }}"
                                            class="btn btn-danger btn-sm" style="margin-top: 5px">Delete</a>
                                    </div>
                                </td>




                            </tr>
                        @endforeach










                    </tbody>












                </table>
            </div>




        


        </div>


    </section>

    {{-- <a type="button" class="btn btn-primary btn-lg" href="{{route('registration.form')}}">Take Course</a> --}}


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>





    <script>
        function appendChildToContainer(event) {
            const singleitems = document.querySelectorAll('.singleitems');
            const index = singleitems.length;
            const html = addBuildingFlat(index);
            buldingFlatContainer.appendChild(html);
        }



        let buldingFlatContainer = document.querySelector('#buldingFlatContainer');
        let addNewItem = document.querySelector('#addNewItem');
        addNewItem.addEventListener('click', appendChildToContainer);

        let counter = 1;

        function addBuildingFlat(index) {
            const singleItem = document.createElement('div');
            singleItem.classList.add('singleitems');
            let html = `

                <div class="row" style="margin-top:30px">
                    <div class="col-md-8">
                        <div class="form-group md-2">
                            <div class="input-group input-group-merge">
                            <input type="text" id="first-name-icon" class="form-control" name="course_code[${counter}][course_code]" placeholder="Add Course Code">
                        </div>
                        </div>
                    </div>

                </div>`;

            singleItem.innerHTML = html;
            counter++;
            return singleItem;
        }
    </script>



    </div>
@endsection
