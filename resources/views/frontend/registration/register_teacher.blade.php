@extends('layouts.frontend_master')



@section('main_content')
    <section class="h-100 bg-dark">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card card-registration my-4">
                        <div class="row g-0">
                            <div class="col-xl-6 d-none d-xl-block">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp"
                                    alt="Sample photo" class="img-fluid"
                                    style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                            </div>
                            <div class="col-xl-6"
                                style="background-color: #ADD8E6; border:8px solid black; border-radius:10px">
                                <div class="card-body p-md-5 text-black">
                                    <h3 class="mb-4 ml-5 text-uppercase">Teacher Registration form</h3>



                                    <form style="margin-left: 30px" method="POST"
                                        action="{{ route('teacher_register.store') }}">
                                        @csrf

                                        <div class="row">
                                            <div class="col-md-12 mb-2">
                                                <div class="form-outline">
                                                    <label class="form-label" for="form3Example1m">Name</label>
                                                    <input type="text" name="name" id="form3Example1m"
                                                        class="form-control form-control-lg" />
                                                    @if ($errors->has('name'))
                                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>






                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <label class="form-label" for="form3Example1m">Email</label>
                                                    <input style="font-size: 16px" type="email" name="email"
                                                        id="form3Example1m" class="form-control form-control-lg" />
                                                    @if ($errors->has('email'))
                                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                                    @endif
                                                </div>
                                            </div>





                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <label class="form-label" for="form3Example1n">Phone
                                                    </label>
                                                    <input style="font-size: 16px" type="text" name="phone"
                                                        id="phone" class="form-control form-control-lg" />
                                                </div>
                                                @if ($errors->has('phone'))
                                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                                @endif
                                            </div>
                                        </div>






                                        <div class="row">

                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <label class="form-label" for="form3Example1n">Teacher ID
                                                    </label>
                                                    <input style="font-size: 16px" type="text" name="teacher_id"
                                                        id="teacher_id" class="form-control form-control-lg" />
                                                </div>
                                                @if ($errors->has('teacher_id'))
                                                    <span class="text-danger">{{ $errors->first('teacher_id') }}</span>
                                                @endif
                                            </div>




                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <label class="form-label" for="form3Example1n">Department
                                                    </label>

                                                    <select id="department" name="department" class="form-control">
                                                        @foreach(App\Models\Admin\Department::get() as $department)
                                                        <option value='{{ $department->name }}'>{{ $department->name }}</option>
                                                        @endforeach
                                                    </select>

                                                </div>
                                                @if ($errors->has('teacher_id'))
                                                    <span class="text-danger">{{ $errors->first('teacher_id') }}</span>
                                                @endif
                                            </div>
                                        </div>





                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form3Example8">Designation</label>
                                            <input style="font-size: 16px" type="text" name="designation"
                                                id="form3Example8" class="form-control form-control-lg" />
                                        </div>




                                        {{-- // $table->string('teacher_id')->unique();
      //         $table->string('name');
      //         $table->string('email')->unique();
      //         $table->timestamp('email_verified_at')->nullable();
      //         $table->string('address')->nullable();
      //         $table->string('phone');
      //         $table->string('department');
      //         $table->string('designation');
      //         $table->string('password');
 --}}




                                        {{-- <div class="row">
          <div class="col-md-12 mb-2">
              <div class="form-outline">
                  <label class="form-label" for="form3Example1m">Email</label>
                  <input style="font-size: 16px" type="email" name="email"
                      id="form3Example1m" class="form-control form-control-lg" />
              </div>
          </div>
      </div> --}}

                                        {{-- <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <label class="form-label" for="form3Example1m">Password</label>
                                                    <input style="font-size: 16px" type="password" name="password"
                                                        id="form3Example1m" class="form-control form-control-lg" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <label class="form-label" for="form3Example1n">Confirm
                                                        Password</label>
                                                    <input style="font-size: 16px" type="password"
                                                        name="password_confirmation" id="form3Example1n"
                                                        class="form-control form-control-lg" />
                                                </div>
                                            </div>
                                        </div>
 --}}






                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <label class="form-label" for="form3Example1m">Password</label>
                                                    <input style="font-size: 16px" type="password" name="password"
                                                        id="form3Example1m" class="form-control form-control-lg" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <label class="form-label" for="form3Example1n">Confirm
                                                        Password</label>
                                                    <input style="font-size: 16px" type="password"
                                                        name="password_confirmation" id="form3Example1n"
                                                        class="form-control form-control-lg" />
                                                </div>
                                            </div>
                                        </div>
                                  







                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form3Example8">Address</label>
                                            <input style="font-size: 16px" type="text" name="address"
                                                id="form3Example8" class="form-control form-control-lg" />
                                        </div>





                                        <div class="">
                                            <a style="padding:0px 20px; margin-left:9px; font-weight:bold; color:black"
                                                type="button" class="btn btn-info" href=""> Already
                                                <br> have an account? </a>
                                            <button
                                                style="margin-left: 15px; padding:12px 15px; font-weight:bold; color:black"
                                                type="submit" class="btn btn-primary" href=""> Create
                                                Account</button>

                                        </div>







                                </div>
                                </form>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>






    <style>
        .card-registration .select-input.form-control[readonly]:not([disabled]) {
            font-size: 1rem;
            line-height: 2.15;
            padding-left: .75em;
            padding-right: .75em;
        }

        .card-registration .select-arrow {
            top: 13px;
        }


        label {

            font-size: 16px;
            font-weight: 600;
        }



        .two_button a {


            /* padding: -10px 50px; */


        }
    </style>
@endsection
