@extends('layouts.frontend_master')

@section('main_content')
    <section class="section" data-section="section3" style="margin: 100px 20px">


<style>



</style>


        <h3 style="margin-left: 20px">All Taken Course Acoording to Semester</h3>

               <div class="row" style="margin-left: -600px">
                <div class="col-6 mx-auto">
                  <div class="d-flex align-items-center justify-content-evenly;">
                    @foreach(App\Models\TakenCourse::where('std_id', Auth::user()->student_id )->get()->unique('course_semester') as $course_View)

                    {{-- <option style="margin-left: 20px" class="btn btn-primary btn-sm" value="{{$course_View->course_semester}}">{{$course_View->course_semester}}</option> --}}
                    <a style="margin-left: 20px" class="btn btn-primary btn-sm" href="{{route('all.semester_wise_taken_course',$course_View->id)}}" class="only-print">{{$course_View->course_semester}}</a>

                     @endforeach


                  </div>
                </div>
              </div>






        <div class="row">
            <div class="col-4 tabel_container" style="margin: 0px 100px">
                <h3>All Taken Course</h3>
                <table class="table table-bordered" >
                    <thead>
                        <tr>
                            <th>Course Number</th>
                            <th>Course Name</th>
                            <th>View</th>
                        </tr>
                    </thead>


                    @php
                        $sl = 1;
                    @endphp


                    <tbody>

                        @foreach ($courseView->sortByDesc('created_at')->where('allow_status', 1) as $course_View)
                            @if (@Auth::user()->student_id == $course_View->std_id)
                                <tr style="font-weight: bold">
                                    <td style="width: 35%">Course {{ $sl++ }}</td>
                                    <td style="width: 45%">{{ $course_View->course_name }}</td>
                                    <td style="width: 15%">

                                        <a href="{{route('all.taken_course_general',$course_View->id)}}" class="only-print"> <i class="fa fa-eye" style="font-size:24px; color:black"></i></a>

                                    </td>
                                </tr>
                                @endif
                                @endforeach


                    </tbody>
                </table>
            </div>

            <div class="col-md-1">
            </div>



        </div>


    </section>
@endsection
