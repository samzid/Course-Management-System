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
            <h3 style="color: white">Retake Courses</h3>
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

                 @foreach ($retake_course as $retake_courses)
                        <tr>
                            <td>{{ $retake_courses->course_name }}</td>
                            <td>{{ $retake_courses->type }}</td>
                            <td>{{ $retake_courses->credit }}</td>
                          
                            <td>{{ $retake_courses->course_batch }}</td>
                            <td>{{ $retake_courses->marks }}</td>
                            <td>F</td>
                        </tr>
                    @endforeach 






                </tbody>
            </table>
        </div>




    </div>
</section>









@endsection
