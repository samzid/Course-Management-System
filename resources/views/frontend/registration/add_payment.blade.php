@extends('layouts.frontend_master')

@section('main_content')

    @include('frontend.registration.style')




    @php
        $certificate_item = App\Models\OfferedCourse::all();
        $department = App\Models\Admin\Department::all();
    @endphp


    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif


    <div class="container p-0 AA">
        <div class="card px-4">
            <p class="h8 py-3">Send Payment</p>


            <form method="POST" action="{{ route('store_payment') }}">
                @csrf

                <div class="row gx-3">


                    <div class="col-12">
                        <p class="text">Name</p>
                        <div class="d-flex flex-column">
                            <input type="text" class="B2b" value="{{ $formData->name }}" name="user_name">
                        </div>
                    </div>




                    <div class="col-6">
                        <p class="text mb-1">Email</p>
                        <div class="d-flex flex-column">
                            <input type="email" class="B2b" value="{{ $formData->email }}" name="email">
                        </div>
                    </div>



                    <div class="col-6">
                        <p class="text mb-1">Phone Number</p>
                        <div class="d-flex flex-column">
                            <input type="text" class="B2b" value="{{ $formData->phone_number }}" name="phone">
                            {{-- <input type="text" class="B2b" name="phone"> --}}
                        </div>
                    </div>



                    <div class="col-6">
                        <p class="text mb-1">Department</p>
                        <div class="d-flex flex-column">
                            <input type="text" class="B2b" value="{{ $formData->department }}" name="department">
                        </div>
                    </div>


                    <div class="col-6">
                        <p class="text mb-1">Student ID</p>
                        <div class="d-flex flex-column">
                            <input type="text" class="B2b" value="{{ $formData->id_number }}" name="student_id">
                        </div>
                    </div>


                    <div class="col-4">
                        <p class="text mb-1">Certificate Type</p>
                        <div class="d-flex flex-column">
                            <select id="selectId" class="form-select mb-3 A2b" name="certificate_type">
                                <option selected>Select Here</option>
                                {{-- @foreach ($certificate_item as $certificate_items)
                                    <option style="border: 4px solid black" value="{{ $certificate_items->id }}">
                                        {{ ucwords($certificate_items->type) }}
                                    </option>
                                @endforeach --}}

                                <option style="border: 4px solid black" value="Provisional">
                                    Provisional
                                </option>
                                <option style="border: 4px solid black" value="Original">
                                    Original
                                </option>
                                <option style="border: 4px solid black" value="Emergency">
                                    Emergency
                                </option>
                            </select>
                        </div>
                    </div>


                    <div class="col-4">
                        <p class="text mb-1">Expected Time</p>
                        <div class="d-flex flex-column">
                            <input type="text" class="A2b" id="exp_time" name="expected_time">
                            {{-- <select class="form-select mb-3 A2b" name="expected_time">
                                <option selected>Select Time</option>
                                @foreach ($certificate_item as $certificate_items)
                                    <option value="{{ $certificate_items->id }}">
                                        {{ ucwords($certificate_items->duration) }}
                                    </option>
                                @endforeach
                            </select> --}}
                        </div>
                    </div>


                    <div class="col-4">
                        <p class="text mb-1">Fee</p>
                        <div class="d-flex flex-column">

                            <input type="text" class="A2b" id="fee" name="fee">
                        </div>
                    </div>



                    <div class="col-8">
                        <p class="text">Payment Method</p><br>
                        <div class="form-check form-check-inline payment">
                            <input class="form-check-input" type="radio" name="payment_method" value="Bkash">
                            <label class="form-check-label" for="inlineRadio1">Bkash</label>
                        </div>
                        <div class="form-check form-check-inline payment">
                            <input class="form-check-input" type="radio" name="payment_method" id="inlineRadio2"
                                value="Nogod">
                            <label class="form-check-label" for="inlineRadio2">Nogod</label>
                        </div>

                        <div class="form-check form-check-inline payment">
                            <input class="form-check-input" type="radio" name="payment_method" id="inlineRadio2"
                                value="Rocket">
                            <label class="form-check-label" for="inlineRadio2">Rocket</label>
                        </div>
                    </div>


                    <div class="col-4">
                        <p class="text mb-1" style="margin-left: -28px">Account Number</p>
                        <div class="d-flex flex-column">
                            <input type="text" class="C2b" name="account_number">
                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary">Send Payment</button>

                </div>


            </form>

        </div>
    </div>




    <script>
        $('#selectId').on('change', function() {
            var selectVal = $("#selectId option:selected").val();
            console.log(selectVal);
            if (selectVal == "Provisional") {
                $('#exp_time').val("10 days");
                $('#fee').val("1700");
            } else if (selectVal == "Original") {
                $('#exp_time').val("10 dsys");
                $('#fee').val("2200");
            } else {
                $('#exp_time').val("5 days");
                $('#fee').val("4200");
            }
        });
    </script>


@endsection
