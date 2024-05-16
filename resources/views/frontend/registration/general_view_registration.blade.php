<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://codepen.io/skjha5993/pen/bXqWpR.css">
    <title>Registration Form Using Bootstrap 4</title>
    <style>
        label {
            font-weight: 600;
            color: rgb(15, 10, 153);
        }

        body {
            background: rgb(10, 1, 19);
        }


        table {
            background-color: skyblue;

        }



        tr,
        td {
            font-size: 20px;
        }

        .jumbotron {

            font-size: 20px;
        }
    </style>



    {{-- start for image modal --}}





    {{-- end for image modal --}}


</head>



<body>


    {{-- Start General View --}}
    <div class="container" style="width: 75%">

        {{-- <h4 style="color: white" class="text-center">See Specific Form (@if ($registration_generalView->status == 1)
                <span style="margin-left: 5px;">Register Office</span>
            @elseif ($registration_generalView->status == 2)
                <span style="margin-left: 5px;">Account Office</span>
            @elseif ($registration_generalView->status == 3)
                <span style="margin-left: 5px;"> Return Register Office</span>
            @elseif ($registration_generalView->status == 4)
                <span>Exam Office</span>
            @elseif ($registration_generalView->status == 11)
                <span style="margin-left: 5px;">Pending RegisterOffice</span>
            @elseif ($registration_generalView->status == 12)
                <span style="margin-left: 5px;">Pending AccountOffice</span>
            @elseif ($registration_generalView->status == 13)
                <span style="margin-left: 5px;">Pending Return Register Office</span>
            @endif)</h4> --}}



        <div class="row jumbotron">


{{-- 
{{dd($registrationForm_takenCourse->course_name)
}} --}}



            <div class="col-sm-4 form-group">
                <label for="">Student Name:</label>
               {{$user_info->name}}
            </div>


             <div class="col-sm-4 form-group">
                <label for="">Student ID:</label>
                {{$user_info->student_id }}
            </div>



            <div class="col-sm-4 form-group">
                <label for="">Department:</label>
                {{$user_info->department }}
            </div>



            <div class="col-sm-4 form-group">
                <label for="">Batch:</label>
                {{$user_info->batch }}
            </div>


            <div class="col-sm-4 form-group">
                <label for="">Section:</label>
                {{$user_info->section }}
            </div>



            <div class="col-sm-4 form-group">
                <label for="">Email:</label>
                {{$user_info->email }}
            </div>



            <div class="col-sm-4 form-group">
                <label for="">Phone:</label>
                {{$user_info->phone }}
            </div>



            {{-- start --}}


            {{-- {{dd($registration_generalView->course_name)}} --}}



@php   

//$test = App\Models\User::where('student_id', $registrationForm_takenCourse->std_id)->first();

@endphp


            <section class="section" data-section="section3" style="margin:10px 170px; text-align:center">
                <h4>Taken Course</h4>
                <div class="row p-2 gx-5">
                    <div class="col-12 tabel_container">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Credit</th>
                                    <th>Course Semester</th>
                                    <th>Marks</th>
                                    <th>Submit Marks</th>
                                </tr>
                            </thead>



                            <tbody>


                                <p style="color: black">{{ @$registrationForm_takenCourses->course_name }}</p>



                                @foreach ($registrationForm_takenCourse as $registrationForm_takenCourses)


{{-- {{dd($registrationForm_takenCourses)
}} --}}


                                        <tr>
                                            <td style="width: 15%">{{ $registrationForm_takenCourses->course_name }}
                                            </td>
                                            <td style="width: 15%">{{ $registrationForm_takenCourses->type }}</td>
                                            <td style="width: 5%">{{ $registrationForm_takenCourses->credit }}</td>
                                            <td style="width: 10%">
                                                {{ $registrationForm_takenCourses->course_semester }}</td>

                                            <td style="width: 5%">{{ $registrationForm_takenCourses->marks }}</td>



                                            <td>

                                                {{-- {{dd($registrationForm_takenCourses->student_id)}} --}}

                                                <form class="form-inline" method="POST" action="{{ route('course.update', ['student_id' => $registrationForm_takenCourses->std_id, 'course_name' => $registrationForm_takenCourses->course_name, 'semester_name' => $registrationForm_takenCourses->course_semester]) }}">
                                                   
                                                    @csrf


                                                    <div class="form-group ml-1 row">
                                                    
                                                      <input type="text" class="form-control col-4" id="inputPassword2" name="marks" placeholder="Marks">
                                              
                                                        <button type="submit" value="" class="btn btn-primary ml-2">Submit</button>
                                                    </div>

                                                  </form> 

                                            </td>













                                            <td style="width: 5%">
                                                @if ($registrationForm_takenCourses->allow_status == 0)
                                                    <a class="btn btn-primary btn-sm"
                                                        href="{{ route('allowCourseId', $registrationForm_takenCourses->id) }}">Allow</a>
                                                @else
                                                    <button class="btn btn-primary btn-sm">Allowed</button>
                                                @endif

                                            </td> 


                                        </tr>
                                  
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </section>






            {{-- end --}}



{{-- 
            <div class="row" id="A" style="margin-left: 200px; text-align: center;margin-top: 20px">
                @if ($registration_generalView->status == 1)
                    <span style="margin-left: 5px; height:40px" class="btn btn-dark"><a style="color:rgb(244, 252, 252)"
                            href="{{ route('confirm_for_accountOffice', $registration_generalView->id) }}">Confirm For
                            AccountOffice</a></span>

                    <span style="margin-left: 5px; height:40px" class="btn btn-dark"><a style="color:rgb(244, 252, 252)"
                            href="{{ route('confirm_registerOffice_pending', $registration_generalView->id) }}">Confirm
                            Register Office Pending </a></span>
                @elseif ($registration_generalView->status == 2)
                    <span style="margin-left: 5px; height:40px" class="btn btn-dark"><a style="color:rgb(244, 252, 252)"
                            href="{{ route('confirm_for_register_back', $registration_generalView->id) }}">Confirm For
                            Register Office Return</a></span>


                    <span style="margin-left: 5px; height:40px" class="btn btn-dark"><a style="color:rgb(244, 252, 252)"
                            href="{{ route('confirm_accountOffice_pending', $registration_generalView->id) }}">Confirm
                            Account Office Pending </a></span>
                @elseif ($registration_generalView->status == 3)
                    <span style="margin-left: 5px; height:40px" class="btn btn-dark"><a style="color:rgb(244, 252, 252)"
                            href="{{ route('confirm_for_examOffice', $registration_generalView->id) }}">Confirm
                            For Exam Office</a></span>

                    <span style="margin-left: 5px; height:40px" class="btn btn-dark"><a style="color:rgb(244, 252, 252)"
                            href="{{ route('confirm_registerOffice_Back_pending', $registration_generalView->id) }}">Confirm
                            Pending
                            Register Back
                        </a></span>
                @elseif ($registration_generalView->status == 4)
                    <span style="margin-left: 5px; height:40px" class="btn btn-dark"><a style="color:rgb(244, 252, 252)"
                            href="">Delete Form</a></span>

                    <span style="margin-left: 5px; height:40px" class="btn btn-dark"><a style="color:rgb(244, 252, 252)"
                            href="">Confirm Pending
                            Exam Office
                        </a></span>
                @elseif ($registration_generalView->status == 11)
                    <span style="margin-left: 5px; height:40px" class="btn btn-dark"><a style="color:rgb(244, 252, 252)"
                            href="">Delete Form</a></span>

                    <span style="margin-left: 5px; height:40px" class="btn btn-dark"><a
                            style="color:rgb(244, 252, 252)"
                            href="{{ route('back_pending_to_registerOffice', $registration_generalView->id) }}">Send
                            to
                            Register Office
                        </a></span>
                @elseif ($registration_generalView->status == 12)
                    <span style="margin-left: 5px; height:40px" class="btn btn-dark"><a
                            style="color:rgb(244, 252, 252)"
                            href="{{ route('back_pending_to_accountOffice', $registration_generalView->id) }}">Send to
                            Account Office
                        </a></span>
                @elseif ($registration_generalView->status == 13)
                    <span style="margin-left: 5px; height:40px" class="btn btn-dark"><a
                            style="color:rgb(244, 252, 252)"
                            href="{{ route('back_pending_to_registrationOffice_return', $registration_generalView->id) }}">Send
                            to Return Register Office
                        </a></span>
                @endif



                <span style="margin-left: 5px; height:40px" class="btn btn-dark"><a
                        href="{{ route('admin_message.view') }}" style="color:rgb(244, 252, 252)">Send
                        Message</a></span>


            </div> --}}
        </div>
    </div>

    {{-- End General View --}}





    <!-- The Modal -->
    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
        <div id="caption"></div>
    </div>



    <script>
        // Get the image
        var modal = document.getElementById("myModal");

        var img = document.getElementById("myImg");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function() {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }

        var span = document.getElementsByClassName("close")[0];

        span.onclick = function() {
            modal.style.display = "none";
        }


        // Get the SSC certificate Image
        var modal = document.getElementById("myModal");

        var img = document.getElementById("myImg2");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function() {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }

        var span = document.getElementsByClassName("close")[0];

        span.onclick = function() {
            modal.style.display = "none";
        }



        // Get the HSC certificate Image
        var modal = document.getElementById("myModal");

        var img = document.getElementById("myImg3");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function() {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }

        var span = document.getElementsByClassName("close")[0];

        span.onclick = function() {
            modal.style.display = "none";
        }



        // Get the SSC Marksheet Image
        var modal = document.getElementById("myModal");

        var img = document.getElementById("myImg4");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function() {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }

        var span = document.getElementsByClassName("close")[0];

        span.onclick = function() {
            modal.style.display = "none";
        }




        // Get the HSC Marksheet Image
        var modal = document.getElementById("myModal");

        var img = document.getElementById("myImg5");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function() {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }

        var span = document.getElementsByClassName("close")[0];

        span.onclick = function() {
            modal.style.display = "none";
        }




        // Get the University ID Card Image
        var modal = document.getElementById("myModal");

        var img = document.getElementById("myImg6");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function() {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }

        var span = document.getElementsByClassName("close")[0];

        span.onclick = function() {
            modal.style.display = "none";
        }



        // Get the Library Card Image
        var modal = document.getElementById("myModal");

        var img = document.getElementById("myImg7");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function() {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }

        var span = document.getElementsByClassName("close")[0];

        span.onclick = function() {
            modal.style.display = "none";
        }
    </script>




</body>

</html>
