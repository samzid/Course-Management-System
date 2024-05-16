@extends('layouts.frontend_master')

@section('main_content')



@php
//$data = App\Models\Certificate_Item::where('department', Auth::user()->department)->get();


//$repeatless_course = App\Models\TakenCourse::where('std_id', Auth::user()->student_id )->select('course_name')->get();

//dd($repeatless_course);


@endphp



    <div class="container" style="margin-top: 100px">

        <style>
            body {
                background: rgb(12, 1, 24);
            }

            span {
                color: red;
            }


            label {

                font-weight: bold;
                color: #3E0E40;

            }

            button {

                border: 1px solid black;
            }

            .add_project {
                colo
            }
        </style>



                        {{--
                $table->string('student_name');
                $table->string('student_id');
                $table->string('department');
                $table->string('batch');
                $table->string('section');
                $table->string('email');
                $table->string('phone');
                $table->string('semester');
                --}}





        <form method="POST" action="{{ route('store.registration_form') }}" enctype="multipart/form-data">
            <h2 style="color: white" class="text-center">Fillup your Course Registration Form</h2>

            @csrf
            <div class="row jumbotron">
                <div class="col-sm-6 form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" value="{{ Auth::user()->name }}" name="student_name" readonly
                        id="" placeholder="Enter your name.">
                </div>

                <div class="col-sm-6 form-group">
                    <label for="email">ID Full Form</label>
                    <input type="text" class="form-control" value="{{ Auth::user()->student_id }}" name="student_id"
                        id="email" readonly placeholder="Enter your email.">
                </div>





                <div class="col-sm-4 form-group">
                    <label for="email">Department</label>
                    <input type="text" class="form-control" value="{{ Auth::user()->department }}" name="department"
                        id="email" readonly>
                </div>







                <div class="col-sm-4 form-group">
                    <label for="email">Batch</label>
                    <input type="text" class="form-control" value="{{ Auth::user()->batch }}" name="batch"
                        id="email" readonly>
                </div>




                <div class="col-sm-4 form-group">
                    <label for="email">Section</label>
                    <input type="text" class="form-control" value="{{ Auth::user()->section }}" name="section"
                        id="email" readonly>
                </div>


                {{-- <div class="col-sm-4 form-group">
                    <label for="sex">Section<span>*</span></label>
                    <select name="section" id="sex" class="form-control browser-default custom-select">
                        <option value="">Select</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                    </select>
                </div> --}}





                <div class="col-sm-6 form-group" style="margin-top: -10px">
                    <label for="pass">Email Address</label>
                    <input type="email" value="{{ Auth::user()->email }}" name="email" class="form-control"
                        id="pass" readonly placeholder="Enter your Email." required>
                </div>








                <div class="col-sm-6 form-group" style="margin-top: -10px">
                    <label for="pass">Phone Number</label>
                    <input type="text" value="{{ Auth::user()->phone }}" name="phone" class="form-control"
                        id="pass" readonly placeholder="Enter your Phone." required>
                </div>



                {{-- <div class="col-sm-6 form-group" style="margin-top: -10px">
                    <label for="tel">Phone Number<span>*</span></label>
                    <input type="tel" name="phone" class="form-control" id="tel"
                        placeholder="Enter Your Contact Number.">
                </div> --}}






                <div class="col-sm-6 form-group">
                    <label for="address-1">Select the Semester Term</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="semester" value="Spring 2023">
                        <label class="form-check-label" for="inlineRadio1">Winter 2023</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="semester" id="inlineRadio2"
                            value="Summer 2023">
                        <label class="form-check-label" for="inlineRadio2">Summer 2023</label>
                    </div>
{{--
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="semester" id="inlineRadio2"
                            value="Fall 2023">
                        <label class="form-check-label" for="inlineRadio2">Fall 2023</label>
                    </div> --}}
                </div>






                {{--
        <div class="col-sm-12">
            <input type="checkbox" class="form-check d-inline" name="term_and_condition" id="chb"><label for="chb"
                class="form-check-label">&nbsp;All the information filled by the student.
            </label>
            <p>* Indicate the mendatory field</p>
        </div> --}}

            </div>







            <h5 style="color: white"><strong>Add course</strong> </h5>


            {{-- for multiple building and flat12  Start --}}

            <div class="col-md-12" id="buldingFlatContainer" style="margin-left: 10px">
                <div class="singleitems">


                    <div class="row" style="margin-top:30px">

                        <div class="col-md-4">
                            <div class="form-group md-2">
                                {{-- <div class="input-group input-group-merge">
                                    <input type="text" id="first-name-icon" class="form-control"
                                        name="course_name[0][course_name]" placeholder="Add Course Name">
                                </div> --}}


                                <select name="course_name[0][course_name]"   class="form-control"   onchange="selectCourseData(event)">
                                    <option>Course Code</option>

                                    {{-- <option value="3">3</option>
                                    <option value="1.50">1.50</option> --}}

                                    @foreach($data as $option)
                                     <option value="{{ $option->name }}">{{ $option->name }}</option>
                                    @endforeach


                                </select>

                            </div>
                        </div>


                        <div class="col-md-2">
                            <div class="form-group md-2">
                                <select name="course_name[0][credit]"   class="form-control">
                                    <option>Credit</option>
                                    <option value="3">3</option>
                                    <option value="1.50">1.50</option>

                                </select>
                            </div>
                        </div>









                        <div class="col-md-2">
                            <div class="form-group md-2">
                                <select name="course_name[0][type]"   class="form-control">
                                    <option>Course Type</option>
                                    <option value="Regular">Regular</option>
                                    <option value="Irrigular">Irrigular</option>
                                    <option value="Mid Incomplete">Mid Incomplete</option>
                                    <option value="Final Incomplete">Final Incomplete</option>
                                </select>
                            </div>
                        </div>






                        <div class="col-md-2">
                            <div class="form-group md-2">
                                <select name="course_name[0][course_batch]"   class="form-control">
                                    <option>Course Batch</option>
                                    <option value="65">65</option>
                                    <option value="66">66</option>
                                    <option value="67">67</option>
                                    <option value="68">68</option>
                                </select>
                            </div>
                        </div>







                        <div class="col-md-2 mt-5">
                            <div style="margin-top:-3rem !important">
                                <button type="button" class="btn btn-success btn-sm glyphicon glyphicon-plus"
                                    id="addNewItem">Add more</button>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            {{-- for multiple building and flat12 End --}}


            <div class="col-12" style="margin:30px 900px">
                <button type="submit" class="btn btn-primary active">
                    Add Project
                </button>


            </div>
        </form>




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
        </script>





        <script>

            console.log('ffff')

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
                                <div class="col-md-4">
                            <div class="form-group md-2">
                                <select name="course_name[${counter}][course_name]"  class="form-control">
                                    <option>Course Code</option>
                                    @foreach($data as $option)
                                     <option value="{{ $option->name }}">{{ $option->name }}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                                <div class="col-md-2">
                                <div class="form-group md-2">
                                    <select name="course_name[${counter}][credit]"  class="form-control">
                                        <option>Credit</option>
                                        <option value="3">3</option>
                                        <option value="1.50">1.50</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group md-2">
                                    <select name="course_name[${counter}][type]" class="form-control">
                                        <option>Course Type</option>
                                        <option value="Regular">Regular</option>
                                        <option value="Irrigular">Irrigular</option>
                                        <option value="Mid Incomplete">Mid Incomplete</option>
                                        <option value="Final Incomplete">Final Incomplete</option>
                                    </select>
                                </div>
                            </div>






                            <div class="col-md-2">
                                <div class="form-group md-2">
                                    <select name="course_name[${counter}][course_batch]"  class="form-control">
                                        <option>Course Batch</option>
                                        <option value="65">65</option>
                                        <option value="66">66</option>
                                        <option value="67">67</option>
                                        <option value="68">68</option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-md-2 mt-5">
                            <div style="margin-top:-3rem !important">
                                <button type="button" class="btn btn-danger btn-sm glyphicon glyphicon-plus"
                                    id="course-delete" onclick="deleteCourse(event)">Cancel</button>
                            </div>
                        </div>




                            </div>`;

                singleItem.innerHTML = html;
                counter++;
                return singleItem;
            }

        function deleteCourse (e){

            const parent = e?.target?.parentNode?.parentNode?.parentNode?.parentNode;
            console.log(parent)
            parent.remove()
        }

          function  selectCourseData(e){
                console.log(e)
            }



        </script>





    </div>
@endsection
