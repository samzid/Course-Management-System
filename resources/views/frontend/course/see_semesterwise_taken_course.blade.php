@extends('layouts.frontend_master')

@section('main_content')
    <section class="section" data-section="section3" style="margin: 100px 20px">













        <div class="row p-2 gx-5">
            <div class="col-4 tabel_container" style="margin-left: 400px">
                <h3>All Taken Course</h3>
                <table class="table table-bordered" >
                    <thead>
                        <tr>
                            <th>Course Number</th>
                            <th>Course Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>


                    @php
                        $sl = 1;
                    @endphp


                    <tbody>

                        @foreach ($courseView->sortByDesc('created_at') as $course_View)
                            @if (@Auth::user()->student_id == $course_View->std_id)
                                <tr>
                                    <td style="width: 35%">Course {{ $sl++ }}</td>
                                    <td style="width: 45%">{{ $course_View->course_name }}</td>
                                    <td style="width: 15%">

                                        <a href="{{route('all.taken_course_general',$course_View->id)}}" class="only-print">View</a>

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
