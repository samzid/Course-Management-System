@extends('layouts.frontend_master')

@section('main_content')

<style>

body{
    background-color: skyblue;
}

</style>



    <!-- body overlay area start -->
    <div class="body_overlay"></div>
    <!-- body overlay area end -->

    <!-- crumbs area start -->
    <div class="crumbs-area">
        <div class="container">
            <div class="crumb-content">
                <h4 class="crumb-title"><span>Contact </span>Us</h4>
            </div>
        </div>
    </div>
    <!-- crumbs area end -->

    <!-- contact info area start -->
    <div class="contact-info pt--120 pb--20">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="cnt-info">
                        <h4>Contact Info</h4>
                        <p>51 Siddeswari Road (Ramna), Dhaka-1217</p>
                        <ul class="address" style="font-size: 16px">
                            <li><i class="fa fa-phone"></i>01986191470</li>
                            <li><i class="fa fa-phone"></i>01986191480</li>
                            <li><i class="fa fa-envelope"></i>iqbalmunna01@gmail.com</li>
                        </ul>
                        <ul class="social list-inline mt-5">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </div>
                </div>


                <div class="col-lg-8">
                    <div>


                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3652.08060118297!2d90.4058612!3d23.744505!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b88bfd0133c5%3A0xfde0a96bf5fecf99!2sStamford%20University%20Bangladesh!5e0!3m2!1sen!2sbd!4v1669403450778!5m2!1sen!2sbd"
                            width="900" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>


                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- contact info area end -->
    <!-- contact form area start -->
    <div class="contact-form-area pb--30">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="cnt-title">
                        <h4>Get in touch <span>with us</span></h4><br>
                        <a class="btn btn-primary" style="padding:15px 60px; font-size:16px; border-radius:60%"
                            href="https://mail.google.com/mail/u/0/?tab=wm#inbox?compose=new">Email Us</a>
                    </div>
                </div>
            </div>
            
            <div class="contact-form">


                <div class="row" style="background-color: #bccfe2; width:800px; margin-left:200px ">

                    <div class="col-md-12">
                        <h2>
                            Drop a line here
                        </h2>

                        <div data-form-type="formoid">
                            <form class="block mbr-form" method="POST" action="{{ route('contact_message.store') }}"
                                data-form-title="Mobirise Form"><input type="hidden" data-form-email="true"
                                    value="VyfBhjXY/U/Zmt1Pt1h8AUq3OZw8hzMN2LHhS02AKmRlJXOXYztQHFLe4ZtOqtsGZcolY6Zc/k02XjN6+grxxBoiXlO8zOY2aPEWv+XteZzFKh7BTcuG/y+UuTZ6thxI">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 multi-horizontal" data-for="name">
                                        <input style="font-size: 16px" type="text" class="form-control input"
                                            name="name" data-form-field="Name" placeholder="Your Name"
                                            id="name-form4-2y">
                                    </div>
                                    <div class="col-md-6 multi-horizontal" data-for="phone">
                                        <input style="font-size: 16px" type="text" class="form-control input"
                                            name="phone" data-form-field="Phone" placeholder="Phone" id="phone-form4-2y">
                                    </div>
                                    <div class="col-md-12" data-for="email">
                                        <input style="font-size: 16px" type="text" class="form-control input"
                                            name="email" data-form-field="Email" placeholder="Email" required=""
                                            id="email-form4-2y">
                                    </div>
                                    <div class="col-md-12" data-for="message">
                                        <textarea style="font-size: 16px" class="form-control input" name="message" rows="2" data-form-field="Message"
                                            placeholder="Message" required="" id="message-form4-2y"></textarea>
                                    </div>
                                    <div class="input-group-btn col-md-12" style="margin-top:-50px">
                                        <button href="" type="submit"
                                            class="btn btn-primary btn-form display-4">SEND MESSAGE</button>
                                    </div>
                                </div><br>
                            </form>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>
    <!-- contact form area end -->
@endsection
