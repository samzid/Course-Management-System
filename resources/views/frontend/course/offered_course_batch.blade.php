@extends('layouts.frontend_master')

@section('main_content')
    <style>
        .edit_delete a {
            margin-left: 10px;
        }



        table,
        thead,
        tr,
        td {


            color: black;
        }
    </style>


    @php

        $Offeredcourse_Views = App\Models\OfferedCourse::where('department', @Auth::user()->department)
            ->where('batch', @Auth::user()->batch)
            ->get();

    @endphp



    {{-- {{dd($auth_user_dept)}}  --}}


    <section class="section coming-soon" data-section="section3" id="register">
        <div class="row">
            <div class="col-8 tabel_container" style="margin-left: 90px">
                <h3 style="color: white">All Offered Course of {{ @Auth::user()->department }} {{ @Auth::user()->batch }}
                    Batch <span style="margin-left: 40px"> <a type="button" class="btn btn-primary btn-lg"
                            href="{{ route('view.Offered_course_department') }}">View {{ @Auth::user()->department }} All
                            Batch Course
                        </a></span></h3>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Credit</th>
                            {{-- <th>Fee</th> --}}
                            {{-- <th>Duration</th> --}}
                            <th>Dept</th>
                            <th>Batch</th>
                        </tr>
                    </thead>







                    <tbody>

                        @foreach ($Offeredcourse_Views as $Offeredcourse_View)
                            <tr>
                                <td>{{ $Offeredcourse_View->name }}</td>
                                <td>{{ $Offeredcourse_View->type }}</td>
                                <td>{{ $Offeredcourse_View->credit }}</td>

                                <td>{{ $Offeredcourse_View->department }}</td>
                                <td>{{ $Offeredcourse_View->batch }}</td>


                                {{-- <td style="width: 14%">
                                <div class="row g-1">
                                    <a class="btn btn-warning btn-sm">Edit</a>
                                    <a class="btn btn-danger btn-sm">Delete</a>
                                </div>
                            </td> --}}
                            </tr>
                        @endforeach






                    </tbody>
                </table>
            </div>

            @php
                $registration_time_control = App\Models\RegistrationTimeHandle::first();

            @endphp

                <div class="card" background-color:black">
                    @if ($registration_time_control->enable == 1)
                        <a type="button" class="btn btn-success btn-lg" href="{{ route('registration.form') }}">Take Course
                        </a>
                    @else
                    <a type="button" class="btn btn-success btn-lg" href="">Take Course Unavailable
                    </a>
                    @endif

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
