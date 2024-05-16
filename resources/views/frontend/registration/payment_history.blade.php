@extends('layouts.frontend_master')






@section('main_content')






@php
    
    $auth_student_id = Auth::user()->student_id ;


$total_taken_credit=\App\Models\TakenCourse::where('std_id', $auth_student_id)->sum('credit');


$total_paid=\App\Models\User\Payment::where('student_id', $auth_student_id)->sum('fee');







@endphp



{{-- {{dd($total_taken_credit)}} --}}










    <div class="container" style="margin:500px 100px">
        <div class="row">
            <div class="col-lg-4 col-12" >
                <div class="features-post">
                    <div class="features-content">
                        <div class="content-show">
                            <h4><i class="fa fa-credit-card"></i>Total Paid</h4><br>
                            <h4><i class="amount"></i>{{$total_paid}} Taka</h4>
                        </div>
                        <div class="content-hide" id="about">
                            <p>Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere
                                imperdiet. Donec maximus elementum ex. Cras convallis ex rhoncus, laoreet libero eu,
                                vehicula libero.</p>
                            <div class="scroll-to-section"><a href="">Link</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="features-post second-features">
                    <div class="features-content">
                        <div class="content-show">
                            <h4><i class="fa fa-credit-card"></i>Total Due</h4><br>
                            <h4><i class="amount"></i>{{$total_taken_credit * 3000 -$total_paid}} Taka</h4>
                        </div>
                        <div class="content-hide">
                            <p>Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere
                                imperdiet. Donec maximus elementum ex. Cras convallis ex rhoncus, laoreet libero eu,
                                vehicula libero.</p>
                            <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis
                                eros a posuere imperdiet.</p>
                            <div class="scroll-to-section"><a href="">Link</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="features-post third-features">
                    <div class="features-content">
                        <div class="content-show">
                            <h4><i class="fa fa-book"></i>Give Payment</h4><br>
                            <h4><i class="amount"></i></h4>
                        </div>
                        <div class="content-hide">
                            <p>Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere
                                imperdiet. Donec maximus elementum ex. Cras convallis ex rhoncus, laoreet libero eu,
                                vehicula libero.</p>
                            <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis
                                eros a posuere imperdiet.</p>
                            <div class="scroll-to-section"><a href="{{route('add_payment')}}">Give Payment</a></div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>





<style>


.features-content{

padding: 100px 0px;

}



.content-show{


    margin-left: 70px;
}


.amount{
    margin-left: 30px;
}



.content-hide{
    margin-left: 10px;
    text-align: center;
}



</style>


@endsection
