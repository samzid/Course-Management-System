@extends('layouts.admin_dashboard')

@section('admin_content')
    <style>
        body {
            background-color: rgb(15, 16, 16);
        }
    </style>



    <div class="contact-form">


        <div class="row" style="background-color: #9bb1c4; width:800px; margin-left:200px ">

            <div class="col-md-12">
                <h2>
                    Drop a line here
                </h2>

                <div data-form-type="formoid">
                    <form class="block mbr-form" method="POST" action="{{ route('store_admin_message') }}"
                        data-form-title="Mobirise Form"><input type="hidden" data-form-email="true"
                            value="VyfBhjXY/U/Zmt1Pt1h8AUq3OZw8hzMN2LHhS02AKmRlJXOXYztQHFLe4ZtOqtsGZcolY6Zc/k02XjN6+grxxBoiXlO8zOY2aPEWv+XteZzFKh7BTcuG/y+UuTZ6thxI">
                        @csrf

                        @if (optional(\Auth::guard('admin')->user())->name)
                            <div class="row">
                                <div class="col-md-6 multi-horizontal" data-for="name">
                                    <input style="font-size: 16px" type="text" class="form-control input"
                                        value="{{ \Auth::guard('admin')->user()->name }}" name="name"
                                        data-form-field="Name" placeholder="Your Name" id="name-form4-2y">
                                </div>
                                <div class="col-md-6 multi-horizontal" data-for="phone">
                                    <input style="font-size: 16px" type="text" class="form-control input"
                                        value="{{ \Auth::guard('admin')->user()->phone }}" name="phone"
                                        data-form-field="Phone" placeholder="Phone" id="phone-form4-2y">
                                </div>

                                <div class="col-md-6 mt-1" data-for="email">
                                    <input style="font-size: 16px" type="text" class="form-control input"
                                        value="{{ \Auth::guard('admin')->user()->email }}" name="email"
                                        data-form-field="Email" placeholder="Email" required="" id="email-form4-2y">
                                </div>



                                <div class="col-md-6 mt-1" data-for="email">
                                    <input style="font-size: 16px" type="text" class="form-control input"
                                        value="{{@$data->user_id}}" name="user_id"
                                        data-form-field="Email" placeholder="User ID" required="" id="email-form4-2y" hidden>
                                </div>



                                <div class="col-md-12 mt-1" data-for="message">
                                    <textarea style="font-size: 16px" class="form-control input" name="message" rows="2" data-form-field="Message"
                                        placeholder="Message" required="" id="message-form4-2y"></textarea>
                                </div>
                                <div class="input-group-btn col-md-12 mt-1" style="margin-top:-50px">
                                    <button href="" type="submit" class="btn btn-primary btn-form display-4">SEND
                                        MESSAGE</button>
                                </div>
                            </div><br>
                        @elseif (optional(\Auth::guard('exam')->user())->name)
                            <div class="row">
                                <div class="col-md-6 multi-horizontal" data-for="name">
                                    <input style="font-size: 16px" type="text" class="form-control input"
                                        value="{{ \Auth::guard('exam')->user()->name }}" name="name"
                                        data-form-field="Name" placeholder="Your Name" id="name-form4-2y">
                                </div>
                                <div class="col-md-6 multi-horizontal" data-for="phone">
                                    <input style="font-size: 16px" type="text" class="form-control input"
                                        value="{{ \Auth::guard('exam')->user()->phone }}" name="phone"
                                        data-form-field="Phone" placeholder="Phone" id="phone-form4-2y">
                                </div>

                                <div class="col-md-6 mt-1" data-for="email">
                                    <input style="font-size: 16px" type="text" class="form-control input"
                                        value="{{ \Auth::guard('exam')->user()->email }}" name="email"
                                        data-form-field="Email" placeholder="Email" required="" id="email-form4-2y">
                                </div>



                                <div class="col-md-12 mt-1" data-for="message">
                                    <textarea style="font-size: 16px" class="form-control input" name="message" rows="2" data-form-field="Message"
                                        placeholder="Message" required="" id="message-form4-2y"></textarea>
                                </div>
                                <div class="input-group-btn col-md-12 mt-1" style="margin-top:-50px">
                                    <button href="" type="submit" class="btn btn-primary btn-form display-4">SEND
                                        MESSAGE</button>
                                </div>
                            </div><br>
                        @elseif (optional(\Auth::guard('register')->user())->name)
                            <div class="row">
                                <div class="col-md-6 multi-horizontal" data-for="name">
                                    <input style="font-size: 16px" type="text" class="form-control input"
                                        value="{{ \Auth::guard('register')->user()->name }}" name="name"
                                        data-form-field="Name" placeholder="Your Name" id="name-form4-2y">
                                </div>
                                <div class="col-md-6 multi-horizontal" data-for="phone">
                                    <input style="font-size: 16px" type="text" class="form-control input"
                                        value="{{ \Auth::guard('register')->user()->phone }}" name="phone"
                                        data-form-field="Phone" placeholder="Phone" id="phone-form4-2y">
                                </div>

                                <div class="col-md-6 mt-1" data-for="email">
                                    <input style="font-size: 16px" type="text" class="form-control input"
                                        value="{{ \Auth::guard('register')->user()->email }}" name="email"
                                        data-form-field="Email" placeholder="Email" required="" id="email-form4-2y">
                                </div>



                                <div class="col-md-12 mt-1" data-for="message">
                                    <textarea style="font-size: 16px" class="form-control input" name="message" rows="2"
                                        data-form-field="Message" placeholder="Message" required="" id="message-form4-2y"></textarea>
                                </div>
                                <div class="input-group-btn col-md-12 mt-1" style="margin-top:-50px">
                                    <button href="" type="submit" class="btn btn-primary btn-form display-4">SEND
                                        MESSAGE</button>
                                </div>
                            </div><br>
                        @elseif (optional(\Auth::guard('account')->user())->name)
                            <div class="row">
                                <div class="col-md-6 multi-horizontal" data-for="name">
                                    <input style="font-size: 16px" type="text" class="form-control input"
                                        value="{{ \Auth::guard('account')->user()->name }}" name="name"
                                        data-form-field="Name" placeholder="Your Name" id="name-form4-2y">
                                </div>

                                <div class="col-md-6 multi-horizontal" data-for="phone">
                                    <input style="font-size: 16px" type="text" class="form-control input"
                                        value="{{ \Auth::guard('account')->user()->phone }}" name="phone"
                                        data-form-field="Phone" placeholder="Phone" id="phone-form4-2y">
                                </div>

                                <div class="col-md-6 mt-1" data-for="email">
                                    <input style="font-size: 16px" type="text" class="form-control input"
                                        value="{{ \Auth::guard('account')->user()->email }}" name="email"
                                        data-form-field="Email" placeholder="Email" required="" id="email-form4-2y">
                                </div>

                                <div class="col-md-6 mt-1" data-for="email">
                                    <input style="font-size: 16px" type="text" class="form-control input"
                                        value="{{$data->id}}" name="user_id"
                                        data-form-field="Email" placeholder="User ID" required="" id="email-form4-2y">
                                </div>


                                <div class="col-md-12 mt-1" data-for="message">
                                    <textarea style="font-size: 16px" class="form-control input" name="message" rows="2"
                                        data-form-field="Message" placeholder="Message" required="" id="message-form4-2y"></textarea>
                                </div>
                                <div class="input-group-btn col-md-12 mt-1" style="margin-top:-50px">
                                    <button href="" type="submit" class="btn btn-primary btn-form display-4">SEND
                                        MESSAGE</button>
                                </div>
                            </div><br>
                        @elseif (optional(\Auth::guard('library')->user())->name)
                            <div class="row">
                                <div class="col-md-6 multi-horizontal" data-for="name">
                                    <input style="font-size: 16px" type="text" class="form-control input"
                                        value="{{ \Auth::guard('library')->user()->name }}" name="name"
                                        data-form-field="Name" placeholder="Your Name" id="name-form4-2y">
                                </div>
                                <div class="col-md-6 multi-horizontal" data-for="phone">
                                    <input style="font-size: 16px" type="text" class="form-control input"
                                        value="{{ \Auth::guard('library')->user()->phone }}" name="phone"
                                        data-form-field="Phone" placeholder="Phone" id="phone-form4-2y">
                                </div>

                                <div class="col-md-6 mt-1" data-for="email">
                                    <input style="font-size: 16px" type="text" class="form-control input"
                                        value="{{ \Auth::guard('library')->user()->email }}" name="email"
                                        data-form-field="Email" placeholder="Email" required="" id="email-form4-2y">
                                </div>


                                <div class="col-md-12 mt-1" data-for="message">
                                    <textarea style="font-size: 16px" class="form-control input" name="message" rows="2"
                                        data-form-field="Message" placeholder="Message" required="" id="message-form4-2y"></textarea>
                                </div>
                                <div class="input-group-btn col-md-12 mt-1" style="margin-top:-50px">
                                    <button href="" type="submit" class="btn btn-primary btn-form display-4">SEND
                                        MESSAGE</button>
                                </div>
                            </div><br>




                            @elseif (Auth::user()->name)

                            <div class="row">
                                <div class="col-md-6 multi-horizontal" data-for="name">
                                    <input style="font-size: 16px" type="text" class="form-control input"
                                        value="{{ Auth::user()->name }}" name="name"
                                        data-form-field="Name" placeholder="Your Name" id="name-form4-2y">
                                </div>
                                <div class="col-md-6 multi-horizontal" data-for="phone">
                                    <input style="font-size: 16px" type="text" class="form-control input"
                                        value="{{ Auth::user()->phone }}" name="phone"
                                        data-form-field="Phone" placeholder="Phone" id="phone-form4-2y">
                                </div>

                                <div class="col-md-6 mt-1" data-for="email">
                                    <input style="font-size: 16px" type="text" class="form-control input"
                                        value="{{ Auth::user()->email }}" name="email"
                                        data-form-field="Email" placeholder="Email" required="" id="email-form4-2y">
                                </div>


                                <div class="col-md-12 mt-1" data-for="message">
                                    <textarea style="font-size: 16px" class="form-control input" name="message" rows="2"
                                        data-form-field="Message" placeholder="Message" required="" id="message-form4-2y"></textarea>
                                </div>
                                <div class="input-group-btn col-md-12 mt-1" style="margin-top:-50px">
                                    <button href="" type="submit" class="btn btn-primary btn-form display-4">SEND
                                        MESSAGE</button>
                                </div>
                            </div>

                        @endif




                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
