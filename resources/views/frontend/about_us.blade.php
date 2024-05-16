@extends('layouts.frontend_master')

@section('main_content')
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <section class="bg-02-a">
        <div class="container" style="margin: -100px 395px;">
            <div class="row">
                <div class="col-12">
                    <div class="_head_01" style="text-align:center">
                        <h2>About Us</h2>
                        <p style="margin-top: 40px">Home<i class="fas fa-angle-right"></i><span>About Us</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="se-001">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="_Ol_er_qw">
                        <p>The campus is deeply rooted to our promise to serve the people by providing a strong medium for
                            higher education that is on par with the very best private universities of the country. Located
                            in the culturally rich Siddeswari, the students can naturally approach the whole of Siddeswari
                            as an extended part of the campus to learn and experience the beauty of university life.</p>


                        <p>The campus is deeply rooted to our promise to serve the people by providing a strong medium for
                            higher education that is on par with the very best private universities of the country. Located
                            in the culturally rich Siddeswari, the students can naturally approach the whole of Siddeswari
                            as an extended part of the campus to learn and experience the beauty of university life..</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12">
                    <div class="_Ol_er_qw yu">
                        <img src="assets/images/slider/2.png">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ====================== section started====================== -->

    <section class="bg-01">
        <div class="container">
            <h1 style="margin-left: 430px; margin-top:-40px">WHY CHOSE US??</h1>
            <div class="row" style="margin-top: 20px; margin-bottom:-100px">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="se-box">
                        <div class="icon">
                            <i class="fal fa-chalkboard-teacher"></i>
                        </div>
                        <div class="content">
                            <h3>Professional Teachers</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="se-box">
                        <div class="icon">
                            <i class="fal fa-globe-americas"></i>
                        </div>
                        <div class="content">
                            <h3>Learn Anywhere Online</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="se-box">
                        <div class="icon">
                            <i class="fal fa-graduation-cap"></i>
                        </div>
                        <div class="content">
                            <h3>Graduation Certificate</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="se-box">
                        <div class="icon">
                            <i class="fal fa-backpack"></i>
                        </div>
                        <div class="content">
                            <h3>Over 1000 Scholarship</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ====================== Featured started====================== -->

    ;

    @php
        $userCount = App\Models\User::count();
        $registrationFormCount = App\Models\User\RegistrationForm::count();
        $numberOfPaymentCount = App\Models\User\Payment::count();
    @endphp


    <section class="bg-03">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <div class="_lk_bg_cd">
                        <i class="fal fa-history"></i>
                        <div class="counting" data-count="21">100</div>
                        <h5>YEAR OF HISTORY</h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <div class="_lk_bg_cd">
                        <i class="fal fa-graduation-cap"></i>
                        <div class="counting" data-count="{{ $userCount }}">100</div>
                        <h5>ACTIVE USER</h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <div class="_lk_bg_cd">
                        <i class="fal fa-globe"></i>
                        <div class="counting" data-count="{{ $registrationFormCount }}">100</div>
                        <h5>APPLIED FORM</h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <div class="_lk_bg_cd">
                        <i class="fal fa-registered"></i>
                        <div class="counting" data-count="{{ $numberOfPaymentCount }}">100</div>
                        <h5>NUMBER OF PAYMENT</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ====================== Team Started started====================== -->

    <section class="team">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading">
                        <h2>OUR TEAM</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime totam quo, ducimus aliquid
                            quisquam minima perspiciatis repellendus, minus tenetur reiciendis quis? Consequatur perferendis
                            deleniti, rerum delectus consectetur modi praesentium deserunt.</p>
                    </div>
                </div>

                <div class="col-12">
                    <div class="owl-carousel owl-stage-outer">
                        <div class="item">
                            <div class="team-card">
                                <div class="image-team">
                                    <img src="assets/images/team/1.jpg">
                                </div>
                                <div class="team-content">
                                    <h3>John</h3>
                                    <p>Web Developer</p>
                                    <ol>
                                        <li><i class="fab fa-facebook-f"></i></li>
                                        <li><i class="fab fa-instagram"></i></li>
                                        <li><i class="fab fa-linkedin-in"></i></li>
                                        <li><i class="fab fa-pinterest-p"></i></li>
                                    </ol>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="team-card">
                                <div class="image-team">
                                    <img src="assets/images/team/2.jpg">
                                </div>
                                <div class="team-content">
                                    <h3>Anderson john</h3>
                                    <p>Web Designer</p>
                                    <ol>
                                        <li><i class="fab fa-facebook-f"></i></li>
                                        <li><i class="fab fa-instagram"></i></li>
                                        <li><i class="fab fa-linkedin-in"></i></li>
                                        <li><i class="fab fa-pinterest-p"></i></li>
                                    </ol>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="team-card">
                                <div class="image-team">
                                    <img src="assets/images/team/3.jpg">
                                </div>
                                <div class="team-content">
                                    <h3>Sarah Se</h3>
                                    <p>Web Designer</p>
                                    <ol>
                                        <li><i class="fab fa-facebook-f"></i></li>
                                        <li><i class="fab fa-instagram"></i></li>
                                        <li><i class="fab fa-linkedin-in"></i></li>
                                        <li><i class="fab fa-pinterest-p"></i></li>
                                    </ol>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="team-card">
                                <div class="image-team">
                                    <img src="assets/images/team/4.jpg">
                                </div>
                                <div class="team-content">
                                    <h3>Williams</h3>
                                    <p>English </p>
                                    <ol>
                                        <li><i class="fab fa-facebook-f"></i></li>
                                        <li><i class="fab fa-instagram"></i></li>
                                        <li><i class="fab fa-linkedin-in"></i></li>
                                        <li><i class="fab fa-pinterest-p"></i></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ====================== Footer Section started====================== -->


    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/owl.carousel.js"></script>
    <script src="assets/js/script.js"></script>
@endsection
