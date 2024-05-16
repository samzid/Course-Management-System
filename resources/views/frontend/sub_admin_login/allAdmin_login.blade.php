@extends('layouts.customize_mastering')

@section('main_content')
    <style>
        /* Made with love by Mutiullah Samim*/

        @import url('https://fonts.googleapis.com/css?family=Numans');


        /* http://127.0.0.1:8000/frontend/assets/images/choosing-bg.jpg */

     
        html,
        body {
            background-image: url('/frontend/assets/images/choosing-bg.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            height: 100%;
            font-family: 'Numans', sans-serif;
        }

        .container {
            height: 100%;
            align-content: center;
        }

        .card {
            height: 250px;
            margin-top: 240px;
            margin-bottom: auto;
            width: 400px;
            background-color: rgba(0, 0, 0, 0.5) !important;
        }

        .social_icon span {
            font-size: 60px;
            margin-left: 10px;
            color: #FFC312;
        }

        .social_icon span:hover {
            color: white;
            cursor: pointer;
        }

        .card-header h3 {
            color: white;
        }

        .social_icon {
            position: absolute;
            right: 20px;
            top: -45px;
        }

        .input-group-prepend span {
            width: 60px;
            background-color: #4747fc;
            color: black;
            border: 0 !important;
        }

        input:focus {
            outline: 0 0 0 0 !important;
            box-shadow: 0 0 0 0 !important;

        }

        .remember {
            color: white;
        }

        .remember input {
            width: 20px;
            height: 20px;
            margin-left: 15px;
            margin-right: 5px;
        }

        .login_btn {
            color: black;
            background-color: rgb(35, 177, 66);
            width: 150px;
            height: 30px;
            font-weight: bold;
           
        }

        .login_btn:hover {
            color: black;
            background-color: white;
        }

        .links {
            color: white;
            font-size: 13px;
        }

        .links a {
            margin-left: 4px;
            font-size: 14px;
        }
    </style>



    <div class="container">
        <div class="d-flex justify-content-center h-60">
            <div class="card">
                <div class="card-header">
                    <h3>Sign In admn</h3>

                </div>
                <div class="card-body" style="margin-top: -30px">
                    <form method="POST" action="{{ route('post.alladmin.login') }}">
                    {{-- <form method="POST" action="{{ isset($guard) ? url($guard . '/login') : route('login') }}"> --}}
                        @csrf

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input style="height: 35px;font-size: 14px" type="email" class="form-control" name="email"
                                placeholder="username">

                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input style="height: 35px; font-size: 14px" type="password" class="form-control" name="password"
                                placeholder="password">
                        </div>

                        <div>
                            @if ($errors->has('email'))
                            <span style="font-size: 14px;color:rgb(234, 250, 4)"  >{{ $errors->first('email') }}</span>
                        @endif
                        </div>

                        {{-- <div class="row align-items-center remember">
                            <input style="font-size: 14px" type="checkbox">Remember Me
                        </div> --}}
                        <div class="form-group" style="margin: -10px 106px">
                            <input type="submit" value="Login" class="btn float-right login_btn">
                        </div>
                    </form>
                </div>
                <div class="card-footer" style="margin-top: -20px">
                    <div class="d-flex justify-content-center links">
                        Don't have an account?<a href="#">Sign Up</a>
                    </div>
                    <div class="d-flex justify-content-center links">
                        <a href="{{route('password.request')}}">Forgot your password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
