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
            margin: 150px auto;
            background-color: blue;
            padding: 10px;
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
            padding: 20px 10px;
            font-size: 20px;
            font-family: montserrat, serif;
            font-weight: bold;
        }
        .form-group__button{
            padding: 10px 25px;
            border: none;
            border-radius: 4px;
            font-size: 14px;
            font-family: montserrat, serif;
            color: white;
            font-weight: 600;
            outline: none;
            background: darkgoldenrod;
        }
        .form-group__button:hover{
            background-color: white;
            color: black;
            transition: 1s;
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
                <div class="card-header" >
                    <h3> Sign in User </h3>

                </div>
                <div class="card-body">
                    <form method="POST" action="{{ isset($guard) ? url($guard . '/login') : route('login') }}">
                        @csrf

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"  style="color: white; "><i style="padding-left: 10px; font-size: 14px; padding-right: 10px;" class="fas fa-user"></i></span>
                            </div>
                            <input style="height: 35px;font-size: 14px" type="email" class="form-control" name="email"
                                placeholder="username">

                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"  style="color: white; "><i style="padding-left: 10px; font-size: 14px; padding-right: 10px;" class="fas fa-key"></i></span>
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
                        <div class="form-group" style="display: flex; justify-content: center" >
                           <input type="submit" value="Login" class="btn login_btn">
                            <!-- <button class="form-group__button"  value="Login">Login</button> -->
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                        Don't have an account?<a style="color: orangered;" href="#">Sign Up</a>
                    </div>
                    <div class="d-flex justify-content-center links">
                        <a style="color: yellow" href="{{route('password.request')}}">Forgot your password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
