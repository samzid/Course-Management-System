@extends('layouts.frontend_master')



@section('main_content')
@php
$certificate_item = App\Models\OfferedCourse::all();
$department = App\Models\Admin\Department::all();

$reitration_form = App\Models\User\RegistrationForm::all();
$user = App\Models\User::all();

$user_student_id = Auth::user()->student_id ;



$taken_course_spring = App\Models\TakenCourse::Where('std_id', $user_student_id)->where('course_semester', 'Spring 2023')->sum('credit');


$taken_course_summer = App\Models\TakenCourse::Where('std_id', $user_student_id)->where('course_semester', 'Summer 2023')->sum('credit');


$taken_course_fall = App\Models\TakenCourse::Where('std_id', $user_student_id)->where('course_semester', 'Fall 2023')->sum('credit');


@endphp



@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif




<style>
    label {

        font-size: 15px;
    }

    .B2b {
        height: 30px;
        border-radius: 10px;
        text-align: center;
        font-size: 15px;
    }


    .A2b,
    .C2b {
        height: 30px;
        border-radius: 10px;
        text-align: center;
        font-size: 15px;
    }



    input {

        font-weight: 600;
    }


    .text {
        font-weight: 700;
        margin-top: 7px;
        font-size: 15px;
    }


    label {

        font-weight: bold;
    }





    * {
        box-sizing: border-box;
    }

    .column {
        float: left;
        width: 50%;
        padding: 15px;
    }

    /* Clearfix (clear floats) */
    .row::after {
        content: "";
        clear: both;
        display: table;
    }



    .row {
        padding: 0px 20px 0px 20px;
    }
</style>




<div class="row">
    <div class="column">
        <img src="{{ asset('frontend') }}\assets\images\payment.jpg" alt="Snow" style="width:100%">
    </div>

    <div class="column">


        <div class="container p-0 AA" style="border:5px solid black; border-radius:10px;">
            <div class="card" style="background-color:#85C1E9">
                <h2 class="">Send Payment</h2>






                <!-- <form method="POST" action="{{ route('store_payment') }}" style="height: 650px;">
                    <div class="form-row">
                        <div class="col-6">
                            <input type="text" class="form-control" placeholder="First name">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Last name">
                        </div>


                        <div class="col">
                            <input type="text" class="form-control" placeholder="First name">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Last name">
                        </div>


                    </div>
                </form> -->










                <form method="POST" action="{{ route('store_payment') }}" style="height: 650px;">
                    @csrf


                    <div class="row gx-3">


                        <div class="col-4">
                            <p class="text">Name</p>
                            <div class="d-flex flex-column">
                                <input type="text" class="B2b" value="{{ @$formData->student_name }}" name="user_name">
                            </div>
                        </div>




                        <div class="col-4">
                            <p class="text">Email</p>
                            <div class="d-flex flex-column">
                                <input type="email" class="B2b" value="{{ @$formData->email }}" name="email">
                            </div>
                        </div>



                        <div class="col-6">
                            <p class="text mb-1">Phone Number</p>
                            <div class="d-flex flex-column">
                                <input type="text" class="B2b" value="{{ @$formData->phone }}" name="phone">
                                {{-- <input type="text" class="B2b" name="phone"> --}}
                            </div>
                        </div>



                        <div class="col-6">
                            <p class="text mb-1">Department</p>
                            <div class="d-flex flex-column">
                                <input type="text" class="B2b" value="{{ @$formData->department }}" name="department">
                            </div>
                        </div>


                        <div class="col-6">
                            <p class="text mb-1">Student ID</p>
                            <div class="d-flex flex-column">
                                <input type="text" class="B2b" value="{{ @$formData->student_id }}" name="student_id">
                            </div>
                        </div>




                        <div class="col-4">
                            <p class="text mb-1">Course Semester</p>
                            <div class="d-flex flex-column">
                                <select id="selectId" class="form-select mb-3 A2b" name="certificate_type">
                                    <option selected>Select Semester</option>
                                    <option style="border: 4px solid black" value="Spring 2023">
                                        Spring 2023
                                    </option>
                                    <option style="border: 4px solid black" value="Summer 2023">
                                        Summer 2023
                                    </option>
                                    <option style="border: 4px solid black" value="Fall 2023">
                                        Fall 2023
                                    </option>
                                </select>
                            </div>
                        </div>




                        <div class="col-4">
                            <p class="text mb-1">Taken Credit</p>
                            <div class="d-flex flex-column">
                                <input type="text" class="A2b" id="exp_time" name="expected_time">
                            </div>
                        </div>


                        <div class="col-4">
                            <p class="text mb-1">Fee</p>
                            <div class="d-flex flex-column">
                                <input type="text" class="A2b" id="fee" name="fee">
                            </div>
                        </div>



                        <div class="col-6">
                            <p class="text mb-1" style="margin-left: 0px">Account Number</p>
                            <div class="d-flex flex-column">
                                <input type="text" class="C2b" name="account_number">
                            </div>
                        </div>


                        <div class="col-6">
                            <p class="text mb-1">Transaction ID</p>
                            <div class="d-flex flex-column">
                                <input type="text" class="A2b" id="fee" name="transaction_id">
                            </div>
                        </div>

                        <div class="col-7 mt-3">
                            <p class="text">Payment Method</p>
                            <div class="form-check form-check-inline payment">
                                <input class="form-check-input" type="radio" name="payment_method" value="Bkash (01521415098)">
                                <label class="form-check-label" for="inlineRadio1">Bkash</label>
                            </div>
                            <div class="form-check form-check-inline payment">
                                <input class="form-check-input" type="radio" name="payment_method" id="inlineRadio2" value="Nogod (01521415098)">
                                <label class="form-check-label" for="inlineRadio2">Nogod</label>
                            </div>

                            <div class="form-check form-check-inline payment">
                                <input class="form-check-input" type="radio" name="payment_method" id="inlineRadio2" value="Rocket (01521415098)">
                                <label class="form-check-label" for="inlineRadio2">Rocket</label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary" style="margin-left:25px;font-size:20px">Send Payment</button>
                    </div>
                </form>

            </div>
        </div>




    </div>

</div>








<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


<script>
    $('#selectId').on('change', function() {
        var selectVal = $("#selectId option:selected").val();
        console.log(selectVal);
        if (selectVal == "Summer 2023") {
            $('#exp_time').val("{{$taken_course_summer}}");
            $('#fee').val("{{$taken_course_summer}}" * 3000);
        } else if (selectVal == "Fall 2023") {
            $('#exp_time').val("{{$taken_course_fall}}");
            $('#fee').val("{{$taken_course_fall}}" * 3000);
        } else {
            $('#exp_time').val("{{$taken_course_spring}}");
            $('#fee').val("{{$taken_course_spring}}" * 3000);
        }
    });
</script>

@endsection
