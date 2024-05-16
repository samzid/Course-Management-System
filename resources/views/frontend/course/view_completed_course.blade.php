@extends('layouts.frontend_master')

@section('main_content')




<style>

.edit_delete a{
    margin-left: 10px;
}



table, thead, tr, td {


    color: black;
}


</style>


@php
    
    //$Offeredcourse_Views = App\Models\Certificate_Item::where('department', @Auth::user()->department)->where('batch', @Auth::user()->batch)->get();

@endphp


 
{{-- {{dd($auth_user_dept)}}  --}}


<section class="section coming-soon" data-section="section3" id="register">
    <div class="row">
        <div class="col-10 tabel_container" style="margin-left: 90px">
            <h3 style="color: white">Completed Courses</h3>
            <table class="table table-bordered" >
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Credit</th>
                        <th>Batch</th>
                        <th>Marks</th>
                        <th>Grade</th>

                    </tr>
                </thead>

                <tbody>

                 @foreach ($completed_course as $completed_courses)
                        <tr>
                            <td>{{ $completed_courses->course_name }}</td>
                            <td>{{ $completed_courses->type }}</td>
                            <td>{{ $completed_courses->credit }}</td>
                          
                            <td>{{ $completed_courses->course_batch }}</td>
                            <td>{{ $completed_courses->marks }}</td>
                            <td>
@if($completed_courses->marks>=80)
A+
@elseif($completed_courses->marks>=75)
A
@elseif($completed_courses->marks>=70)
A-
@elseif($completed_courses->marks>=65)
B+
@elseif($completed_courses->marks>=60)
B
@elseif($completed_courses->marks>=55)
C+
@elseif($completed_courses->marks>=50)
C
@elseif($completed_courses->marks>=40)
D
@else
F
@endif




                            </td>

                        </tr>
                    @endforeach 






                </tbody>
            </table>
        </div>




    </div>
</section>









@endsection
