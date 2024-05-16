@extends('layouts.frontend_master')

@section('main_content')
    <style>
        .track-line {
            height: 4px !important;
            background-color: black;
            opacity: 1;
        }

        .dot {
            height: 22px;
            width: 22px;
            margin-left: 3px;
            margin-right: 3px;
            margin-top: 0px;
            background-color: rgb(79, 24, 135);
            border-radius: 50%;
            display: inline-block;
        }

        .big-dot {
            height: 35px;
            width: 35px;
            margin-left: 0px;
            margin-right: 0px;
            margin-top: 0px;
            background-color: rgb(6, 30, 138);
            border-radius: 50%;
            display: inline-block;
        }

        .big-dot i {
            font-size: 17px;
        }

        .card-stepper {
            z-index: 0
        }

        .step {

            font-weight: bold;
            font-size: 13px;
        }
    </style>




    <section style="background-color: rgb(160, 25, 149); height:600px">

        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100" style="background-color: black">
                <div class="col">
                    <div class="card card-stepper" style="border-radius: 10px;">
                        <div class="step card-body p-4 jumbotron" style="background-color: #CCCCFF">

                            <div class="step d-flex justify-content-between align-items-center">
                                <div class="d-flex flex-column">
                                    <span class="lead fw-normal">Your form has been Submitted</span>
                                    <span class="text-muted small"></span>
                                </div>
                                <div>
                                    <p  type="button">Tracking Form stage</p>
                                </div>
                            </div>
                            <hr class="my-4">






<div class="d-flex flex-row justify-content-between align-items-center align-content-center">
    @if ($status == "1")
    <span
    class="d-flex justify-content-center align-items-center big-dot dot">
    <i class="fa fa-check text-white"></i></span>
    <hr class="flex-fill track-line"><span class="dot"></span>
    <hr class="flex-fill track-line"><span class="dot"></span>
    <hr class="flex-fill track-line"><span class="dot"></span>
    {{-- <hr class="flex-fill track-line"><span class="dot"></span> --}}
    <hr class="flex-fill track-line"><span class="dot"></span>
    <hr class="flex-fill track-line"><span class="dot"></span>
    @endif
    @if ($status == "2")
    <span class="dot"></span>
    <hr class="flex-fill track-line"><span
    class="d-flex justify-content-center align-items-center big-dot dot">
    <i class="fa fa-check text-white"></i></span>
    <hr class="flex-fill track-line"><span class="dot"></span>
    <hr class="flex-fill track-line"><span class="dot"></span>
    {{-- <hr class="flex-fill track-line"><span class="dot"></span> --}}
    <hr class="flex-fill track-line"><span class="dot"></span>
    <hr class="flex-fill track-line"><span class="dot"></span>
    @endif
    @if ($status == "3")
    <span class="dot"></span>
    <hr class="flex-fill track-line"><span class="dot"></span>
    <hr class="flex-fill track-line"><span
    class="d-flex justify-content-center align-items-center big-dot dot">
    <i class="fa fa-check text-white"></i></span>
    <hr class="flex-fill track-line"><span class="dot"></span>
    {{-- <hr class="flex-fill track-line"><span class="dot"></span> --}}
    <hr class="flex-fill track-line"><span class="dot"></span>
    <hr class="flex-fill track-line"><span class="dot"></span>
    @endif
    @if ($status == "4")
    <span class="dot"></span>
    <hr class="flex-fill track-line"><span class="dot"></span>
    <hr class="flex-fill track-line"><span class="dot"></span>
    <hr class="flex-fill track-line"><span
    class="d-flex justify-content-center align-items-center big-dot dot">
    <i class="fa fa-check text-white"></i></span>
    {{-- <hr class="flex-fill track-line"><span class="dot"></span> --}}
    <hr class="flex-fill track-line"><span class="dot"></span>
    <hr class="flex-fill track-line"><span class="dot"></span>
    @endif
    @if ($status == "5")
    <span class="dot"></span>
    <hr class="flex-fill track-line"><span class="dot"></span>
    <hr class="flex-fill track-line"><span class="dot"></span>
    <hr class="flex-fill track-line"><span class="dot"></span>
    {{-- <hr class="flex-fill track-line"><span class="dot"></span> --}}
    <hr class="flex-fill track-line"><span
    class="d-flex justify-content-center align-items-center big-dot dot">
    <i class="fa fa-check text-white"></i></span>
    <hr class="flex-fill track-line"><span class="dot"></span>
    @endif
    @if ($status == "6")
    <span class="dot"></span>
    <hr class="flex-fill track-line"><span class="dot"></span>
    <hr class="flex-fill track-line"><span class="dot"></span>
    <hr class="flex-fill track-line"><span class="dot"></span>
    {{-- <hr class="flex-fill track-line"><span class="dot"></span> --}}
    <hr class="flex-fill track-line"><span class="dot"></span>
    <hr class="flex-fill track-line"><span
    class="d-flex justify-content-center align-items-center big-dot dot">
    <i class="fa fa-check text-white"></i></span>
    @endif

    {{-- @if ($status == "1")

    @endif
    @if ($status == "1")

    @endif --}}

</div>



                            <div class="d-flex flex-row justify-content-between align-items-center">
                                <div class="d-flex flex-column align-items-start"><span>Exam Office
                                        </span>
                                </div>
                                <div class="d-flex flex-column justify-content-center"><span>Register Office</span></div>
                                <div class="d-flex flex-column justify-content-center"><span>Account Office</span></div>
                                <div class="d-flex flex-column justify-content-center align-items-center"><span style="padding-left: 90px">Library</span></div>
                                <div class="d-flex flex-column justify-content-center align-items-center"><span>Return Register Office</span></div>
                                <div class="d-flex flex-column align-items-center"><span>Certificate Delivered</span></div>
                                {{-- <div class="d-flex flex-column align-items-end"><span>15 Mar</span><span>Ex</span> --}}
                                {{-- </div> --}}
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
