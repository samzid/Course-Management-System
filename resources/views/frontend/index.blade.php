@extends('layouts.frontend_master')
@section('main_content')



<!-- ///////////////Body start//////////////////////////////////// -->


<body class="dark">
<div id="wrapper" class="clearfix">
  <!-- preloader -->



  <div id="preloader">
    <div id="spinner">
      <img alt="" src="{{ asset('frontend') }}/assets/images/preloaders/5.gif">
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>

  </div>





  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: home -->
    <section id="home">

      <!-- Slider Revolution Start -->
      <div class="rev_slider_wrapper">
        <div class="rev_slider" data-version="5.0">
          <ul>

            <!-- SLIDE 1 -->
            <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/bg/bg5.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide 1" data-description="">
              <!-- MAIN IMAGE -->
              <img src="{{ asset('frontend') }}/assets/images/bg/bg5.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
              <!-- LAYERS -->

              <!-- LAYER NR. 1 -->
              <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway"
                id="rs-1-layer-1"

                data-x="['left']"
                data-hoffset="['30']"
                data-y="['middle']"
                data-voffset="['-110']"
                data-fontsize="['100']"
                data-lineheight="['110']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1000"
                data-splitin="none"
                data-splitout="none"
                data-responsive_offset="on"
                style="z-index: 7; white-space: nowrap; font-weight:700;">Education
              </div>

              <!-- LAYER NR. 2 -->
              <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent border-left-theme-color-2-6px pl-20 pr-20"
                id="rs-1-layer-2"

                data-x="['left']"
                data-hoffset="['35']"
                data-y="['middle']"
                data-voffset="['-25']"
                data-fontsize="['35']"
                data-lineheight="['54']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1000"
                data-splitin="none"
                data-splitout="none"
                data-responsive_offset="on"
                style="z-index: 7; white-space: nowrap; font-weight:600;">Education For EveryOne
              </div>

              <!-- LAYER NR. 3 -->
              <div class="tp-caption tp-resizeme text-white"
                id="rs-1-layer-3"

                data-x="['left']"
                data-hoffset="['35']"
                data-y="['middle']"
                data-voffset="['35']"
                data-fontsize="['16']"
                data-lineheight="['28']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1400"
                data-splitin="none"
                data-splitout="none"
                data-responsive_offset="on"
                style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">We provides always our best services for our clients and  always<br> try to achieve our client's trust and satisfaction.
              </div>

              <!-- LAYER NR. 4 -->
              <div class="tp-caption tp-resizeme"
                id="rs-1-layer-4"

                data-x="['left']"
                data-hoffset="['35']"
                data-y="['middle']"
                data-voffset="['100']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1400"
                data-splitin="none"
                data-splitout="none"
                data-responsive_offset="on"
                style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-colored btn-lg btn-flat btn-theme-colored border-left-theme-color-2-6px pl-20 pr-20" href="#">View Details</a>
              </div>
            </li>

            <!-- SLIDE 2 -->
            <li data-index="rs-2" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/bg/bg7.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide 2" data-description="">
              <!-- MAIN IMAGE -->
              <img src="{{ asset('frontend') }}/assets/images/bg/bg7.jpg"  alt=""  data-bgposition="center 40%" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
              <!-- LAYERS -->

              <!-- LAYER NR. 1 -->
              <div class="tp-caption tp-resizeme text-uppercase  bg-theme-colored-transparent text-white font-raleway border-left-theme-color-2-6px border-right-theme-color-2-6px pl-30 pr-30"
                id="rs-2-layer-1"

                data-x="['center']"
                data-hoffset="['0']"
                data-y="['middle']"
                data-voffset="['-90']"
                data-fontsize="['28']"
                data-lineheight="['54']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1000"
                data-splitin="none"
                data-splitout="none"
                data-responsive_offset="on"
                style="z-index: 7; white-space: nowrap; font-weight:400; border-radius: 30px;">Feed Your Knowledge
              </div>

              <!-- LAYER NR. 2 -->
              <div class="tp-caption tp-resizeme text-uppercase bg-theme-colored-transparent text-white font-raleway pl-30 pr-30"
                id="rs-2-layer-2"

                data-x="['center']"
                data-hoffset="['0']"
                data-y="['middle']"
                data-voffset="['-20']"
                data-fontsize="['48']"
                data-lineheight="['70']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1000"
                data-splitin="none"
                data-splitout="none"
                data-responsive_offset="on"
                style="z-index: 7; white-space: nowrap; font-weight:700; border-radius: 30px;">World's Best University
              </div>

              <!-- LAYER NR. 3 -->
              <div class="tp-caption tp-resizeme text-white text-center"
                id="rs-2-layer-3"

                data-x="['center']"
                data-hoffset="['0']"
                data-y="['middle']"
                data-voffset="['50']"
                data-fontsize="['16']"
                data-lineheight="['28']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1400"
                data-splitin="none"
                data-splitout="none"
                data-responsive_offset="on"
                style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">We provides always our best services for our clients and  always<br> try to achieve our client's trust and satisfaction.
              </div>

              <!-- LAYER NR. 4 -->
              <div class="tp-caption tp-resizeme"
                id="rs-2-layer-4"

                data-x="['center']"
                data-hoffset="['0']"
                data-y="['middle']"
                data-voffset="['115']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1400"
                data-splitin="none"
                data-splitout="none"
                data-responsive_offset="on"
                style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-default btn-circled btn-transparent pl-20 pr-20" href="#">Apply Now</a>
              </div>
            </li>

            <!-- SLIDE 3 -->
            <li data-index="rs-3" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/bg/bg1.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide 3" data-description="">
              <!-- MAIN IMAGE -->
              <img src="{{ asset('frontend') }}/assets/images/bg/bg1.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
              <!-- LAYERS -->

              <!-- LAYER NR. 1 -->
              <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent border-right-theme-color-2-6px pr-20 pl-20"
                id="rs-3-layer-1"

                data-x="['right']"
                data-hoffset="['30']"
                data-y="['middle']"
                data-voffset="['-90']"
                data-fontsize="['64']"
                data-lineheight="['72']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1000"
                data-splitin="none"
                data-splitout="none"
                data-responsive_offset="on"
                style="z-index: 7; white-space: nowrap; font-weight:600;">Best Education
              </div>

              <!-- LAYER NR. 2 -->
              <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway"
                id="rs-3-layer-2"

                data-x="['right']"
                data-hoffset="['35']"
                data-y="['middle']"
                data-voffset="['-25']"
                data-fontsize="['32']"
                data-lineheight="['54']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1000"
                data-splitin="none"
                data-splitout="none"
                data-responsive_offset="on"
                style="z-index: 7; white-space: nowrap; font-weight:600;">For Your Better Future
              </div>

              <!-- LAYER NR. 3 -->
              <div class="tp-caption tp-resizeme text-white text-right"
                id="rs-3-layer-3"

                data-x="['right']"
                data-hoffset="['35']"
                data-y="['middle']"
                data-voffset="['30']"
                data-fontsize="['16']"
                data-lineheight="['28']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1400"
                data-splitin="none"
                data-splitout="none"
                data-responsive_offset="on"
                style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">We provides always our best services for our clients and  always<br> try to achieve our client's trust and satisfaction.
              </div>

              <!-- LAYER NR. 4 -->
              <div class="tp-caption tp-resizeme"
                id="rs-3-layer-4"

                data-x="['right']"
                data-hoffset="['35']"
                data-y="['middle']"
                data-voffset="['95']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1400"
                data-splitin="none"
                data-splitout="none"
                data-responsive_offset="on"
                style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-colored btn-lg btn-flat btn-theme-colored btn-theme-colored border-right-theme-color-2-6px pl-20 pr-20" href="#">Apply Now</a>
              </div>
            </li>

          </ul>
        </div>
        <!-- end .rev_slider -->
      </div>
      <!-- end .rev_slider_wrapper -->
      <script>
        $(document).ready(function(e) {
          $(".rev_slider").revolution({
            sliderType:"standard",
            sliderLayout: "auto",
            dottedOverlay: "none",
            delay: 5000,
            navigation: {
                keyboardNavigation: "off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation: "off",
                onHoverStop: "off",
                touch: {
                    touchenabled: "on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                },
              arrows: {
                style:"zeus",
                enable:true,
                hide_onmobile:true,
                hide_under:600,
                hide_onleave:true,
                hide_delay:200,
                hide_delay_mobile:1200,
                tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                left: {
                  h_align:"left",
                  v_align:"center",
                  h_offset:30,
                  v_offset:0
                },
                right: {
                  h_align:"right",
                  v_align:"center",
                  h_offset:30,
                  v_offset:0
                }
              },
              bullets: {
                enable:true,
                hide_onmobile:true,
                hide_under:600,
                style:"metis",
                hide_onleave:true,
                hide_delay:200,
                hide_delay_mobile:1200,
                direction:"horizontal",
                h_align:"center",
                v_align:"bottom",
                h_offset:0,
                v_offset:30,
                space:5,
                tmp:'<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">AA</span>'
              }
            },
            responsiveLevels: [1240, 1024, 778],
            visibilityLevels: [1240, 1024, 778],
            gridwidth: [1170, 1024, 778, 480],
            gridheight: [650, 768, 960, 720],
            lazyType: "none",
            parallax: {
                origo: "slidercenter",
                speed: 1000,
                levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                type: "scroll"
            },
            shadow: 0,
            spinner: "off",
            stopLoop: "on",
            stopAfterLoops: 0,
            stopAtSlide: -1,
            shuffle: "off",
            autoHeight: "off",
            fullScreenAutoWidth: "off",
            fullScreenAlignForce: "off",
            fullScreenOffsetContainer: "",
            fullScreenOffset: "0",
            hideThumbsOnMobile: "off",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: false,
            fallbacks: {
                simplifyAll: "off",
                nextSlideOnWindowFocus: "off",
                disableFocusListener: false,
            }
          });
        });
      </script>
      <!-- Slider Revolution Ends -->

    </section>

   <!--  Section: welcome -->
    <section>
      <div class="container pt-0 pb-0">
        <div class="section-content">
          <div class="row equal-height-inner mt-sm-0" data-margin-top="-150px">



          <!--
            <div class="col-sm-12 col-md-3 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay1">
              <div class="sm-height-auto" data-bg-img="{{ asset('frontend') }}/assets/images/about/h1.jpg">
                <div class="p-20">
                  <h3 class="text-white text-uppercase">Get 30% Discount In All Courses</h3>
                  <div class="clearfix">
                  </div>
                  <p class="text-white-f1 mt-10 lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas odit unde dolor inventore autem quod vero incidunt labore sunt reprehenderit.</p>
                  <a href="#" class="btn btn-default font-14 btn-theme-colored mt-10 hvr-bounce-to-left no-border">Read More</a>
                </div>
              </div>
            </div>

      -->




      <div class="col-sm-12 col-md-2 pl-0 pl-sm-15 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay2 " style="margin: 10px; padding:10px;">
              <div class="sm-height-auto" data-bg-img="{{ asset('frontend') }}/assets/images/about/h2.jpg">
                <div class="p-30">
                  <h3 class="text-white text-uppercase  mt-10 hvr-bounce-to-left">Offered Course </h3>
                  <p class="lead text-white-f1">Certainly! If you’re interested in online courses and certifications,</p>
                  <ul class="pull-left flip hidden-sm hidden-xs">
                    <li>
                      <!-- Modal: Book Now Starts -->
                      <a class="btn btn-dark  font-15 bs-modal-ajax-load mt-0 p-10 pr-15 " href="{{ url('/offered_course_batch/show') }}" >View Offered</a>
                      <!-- Modal: Book Now End -->
                    </li>
                  </ul>
                </div>
              </div>
            </div>




            <div class="col-sm-12 col-md-2 pl-0 pl-sm-15 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay2">
              <div class="sm-height-auto" data-bg-img="{{ asset('frontend') }}/assets/images/about/h2.jpg">
                <div class="p-30">
                  <h3 class="text-white text-uppercase">Taken Course</h3>
                  <p class="lead text-white-f1">Certainly! Let’s explore the concept of university courses. When you attend a university, </p>
                  <ul class="pull-left flip hidden-sm hidden-xs">
                    <li>
                      <!-- Modal: Book Now Starts -->
                      <a class="btn btn-dark  font-15 bs-modal-ajax-load mt-0 p-5 pr-5" href="{{ route('all.taken_course') }}">View Taken Course</a>
                      <!-- Modal: Book Now End -->
                    </li>
                  </ul>
                </div>
              </div>
            </div>





            <div class="col-sm-12 col-md-2 pl-0 pl-sm-15 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay2">
              <div class="sm-height-auto" data-bg-img="{{ asset('frontend') }}/assets/images/about/h2.jpg">
                <div class="p-30">
                  <h3 class="text-white text-uppercase">Complete Course</h3>
                  <p class="lead text-white-f1">Lorem ipsum dolor sit amet, conse ctetur adipi sicing elit. Quas odit unde dolor adipisicing inventore autem quod incidunt labore.</p>
                  <ul class="pull-left flip hidden-sm hidden-xs">
                    <li>
                      <!-- Modal: Book Now Starts -->
                      <a class="btn btn-dark  font-15 bs-modal-ajax-load mt-0 p-10 pr-10" href="{{ route('all.completed_course') }}">View Complete Course</a>
                      <!-- Modal: Book Now End -->
                    </li>
                  </ul>
                </div>
              </div>
            </div>




            <div class="col-sm-12 col-md-2 pl-0 pl-sm-15 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay2">
              <div class="sm-height-auto" data-bg-img="{{ asset('frontend') }}/assets/images/about/h2.jpg">
                <div class="p-30">
                  <h3 class="text-white text-uppercase">Retake Course</h3>
                  <p class="lead text-white-f1">Lorem ipsum dolor sit amet, conse ctetur adipi sicing elit. Quas odit unde dolor adipisicing inventore autem quod incidunt labore.</p>
                  <ul class="pull-left flip hidden-sm hidden-xs">
                    <li>
                      <!-- Modal: Book Now Starts -->
                      <a class="btn btn-dark  font-15 bs-modal-ajax-load mt-0 p-10 pr-15"  href="{{ route('all.retake_course') }}">View Retake Course</a>
                      <!-- Modal: Book Now End -->
                    </li>
                  </ul>
                </div>
              </div>
            </div>




            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-sm-15 wow fadeInLeft animation-delay2">
              <div class="sm-height-auto" data-bg-img="{{ asset('frontend') }}/assets/images/about/h2.jpg">
                <div class="p-30">
                  <h3 class="text-white text-uppercase">Payment</h3>
                  <ul class="pull-left flip hidden-sm hidden-xs">
                    <li>
                      <!-- Modal: Book Now Starts -->
                      <a class="btn btn-dark  font-15 bs-modal-ajax-load mt-0 p-10 pr-15 "  href="{{ route('add_payment') }}">Give Payment</a>
                      <!-- Modal: Book Now End -->
                    </li>
                  </ul>
                </div>
              </div>
            </div>





          </div>
        </div>
      </div>
    </section>

    <!-- Section: courses -->
    <section id="courses">
      <div class="container pt-70 pb-40">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="mt-0 line-height-1 text-center text-uppercase mb-10 text-black-333">Our <span class="text-theme-color-2"> Courses</span></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
            </div>
          </div>
        </div>
        <div class="row multi-row-clearfix">


          <div class="col-md-12">
            <div class="owl-carousel-3col owl-nav-top" data-dots="true">



@php
    $course_Views = App\Models\Admin\Department::where('department', @Auth::user()->department)->get();
@endphp


          @foreach ($course_Views as $course_View)
            <div class="item">
                <div class="project mb-30 border-2px">
                  <div class="thumb">
                    <img class="img-fullwidth" alt="" src="{{ asset('frontend') }}/assets/images/project/p1.jpg">
                    <div class="hover-link">
                      <a class="btn btn-flat btn-dark btn-theme-colored btn-md pull-left font-20" href="#"><span>$500</span> </a>
                    </div>
                  </div>
                  <div class="project-details p-15 pt-10 pb-10">
                    <h5 class="font-14 font-weight-500 mb-5">Department: {{$course_View->department}}</h5>
                    <h4 class="font-weight-700 text-uppercase mt-0"><a href="page-courses-accounting-technologies.html">Course Title: {{$course_View->name}}</a></h4>
                    <p>{{$course_View->description}}</p>
                    <ul class="list-inline project-conditions text-center m-0 p-10">
                      <li class="current-fund"><strong>Type</strong> {{$course_View->type}}</li>
                      <li class="target-fund"><strong>Fee</strong>{{$course_View->fee}}</li>
                      <li class="remaining-days"><strong>Duration</strong>{{$course_View->duration}}</li>
                    </ul>
                  </div>
                </div>
              </div>
              @endforeach

            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Section: Mission -->
    <section id="mission">
      <div class="container-fluid pt-0 pb-0">
        <div class="row equal-height">
          <div class="col-sm-6 col-md-6 pull-right xs-pull-none bg-theme-colored wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
            <div class="pt-60 pb-40 pl-90 pr-160 p-md-30">
              <h2 class="title text-white text-uppercase line-bottom mt-0 mb-30">Our Mission</h2>
              <div class="icon-box clearfix m-0 p-0 pb-10">
                <a href="#" class="icon icon-circled bg-white icon-lg pull-left flip sm-pull-none">
                  <i class="fa fa-desktop text-theme-color-2 font-36"></i>
                </a>
                <div class="ml-120 ml-sm-0">
                  <h4 class="icon-box-title text-white mt-5 mb-10 letter-space-1">Best Lab For All</h4>
                  <p class="text-white">Creating a "Best Lab For All" within a university context suggests a comprehensive and inclusive approach to research, experimentation, and innovation. Here are some steps you might consider to achieve this:

1. **Define Your Goals**: Clearly outline what you mean by "Best Lab For All." What are the primary objectives? Is it to foster interdisciplinary collaboration, provide state-of-the-art facilities, or prioritize accessibility for all students and researchers?

2. **Infrastructure and Resources**: Ensure that the lab has the necessary infrastructure, equipment, and resources to support a wide range of research activities. This might include laboratories, workshops, computing facilities, and specialized equipment.

3. **Interdisciplinary Collaboration**: Encourage collaboration across disciplines by creating spaces and programs that facilitate interaction and exchange of ideas. This could involve organizing interdisciplinary research projects, seminars, or workshops.

4. **Accessibility and Inclusivity**: Make the lab accessible to all members of the university community, regardless of their background or level of experience. This might involve providing training and support for students and researchers from diverse backgrounds, as well as ensuring that facilities are physically accessible.

5. **Cutting-Edge Research**: Foster a culture of innovation and excellence by supporting cutting-edge research projects and providing opportunities for students and researchers to pursue their own ideas and initiatives.

6. **Community Engagement**: Engage with the broader community to share research findings, collaborate on projects of mutual interest, and contribute to the social and economic development of the region.

7. **Continuous Improvement**: Regularly assess the lab's performance and seek feedback from users to identify areas for improvement. This might involve conducting surveys, holding focus groups, or soliciting input from advisory boards.

By focusing on these areas, you can create a lab that truly lives up to its mission of being the "Best Lab For All" within the university context. </p>
                </div>
              </div>
              <div class="icon-box clearfix m-0 p-0 pb-10">
                <a href="#" class="icon icon-circled bg-white icon-lg pull-left flip sm-pull-none">
                  <i class="fa fa-user text-theme-color-2 font-36"></i>
                </a>
                <div class="ml-120 ml-sm-0">
                  <h4 class="icon-box-title text-white mt-5 mb-10 letter-space-1">World Best Teacher</h4>
                  <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam interdum diam tortor, egestas varius erat aliquam. </p>
                </div>
              </div>
              <div class="icon-box clearfix m-0 p-0 pb-10">
                <a href="#" class="icon icon-circled bg-white icon-lg pull-left flip sm-pull-none">
                  <i class="fa fa-money text-theme-color-2 font-36"></i>
                </a>
                <div class="ml-120 ml-sm-0">
                  <h4 class="icon-box-title text-white mt-5 mb-10 letter-space-1">Low Cost Services</h4>
                  <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam interdum diam tortor, egestas varius erat aliquam. </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 p-0 bg-img-cover wow fadeInRight hidden-xs" data-bg-img="{{ asset('frontend') }}/assets/images/photos/ab1.jpg" data-wow-duration="1s" data-wow-delay="0.3s">
          </div>
        </div>
      </div>
    </section>

     <!-- Section: teachers -->
    <section id="teachers">
      <div class="container pt-70 pb-40">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="mt-0 line-height-1 text-uppercase">Our <span class="text-theme-color-2">Teachers</span></h2>
              <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
            </div>
          </div>
        </div>
        <div class="row multi-row-clearfix">
          <div class="col-md-12">
            <div class="owl-carousel-4col" data-nav="true">
              <div class="item">
                <div class="hover-effect mb-30">
                  <div class="thumb">
                    <img class="img-fullwidth" alt="" src="{{ asset('frontend') }}/assets/images/team/1.jpg">
                    <div class="hover-link">
                      <ul class="styled-icons icon-dark icon-theme-colored icon-circled icon-sm">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="details p-15 pt-10 pb-10">
                    <h4 class="title mb-5">Proff.  DR.  Jhon Doe</h4>
                    <h5 class="sub-title mt-0 mb-15">Teacher's Designation</h5>
                    <a class="btn btn-theme-colored btn-sm" href="page-doctor-details.html">view details</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="hover-effect mb-30">
                  <div class="thumb">
                    <img class="img-fullwidth" alt="" src="{{ asset('frontend') }}/assets/images/team/2.jpg">
                    <div class="hover-link">
                      <ul class="styled-icons icon-dark icon-theme-colored icon-circled icon-sm">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="details p-15 pt-10 pb-10">
                    <h4 class="title mb-5">Proff.  DR.  Jhon Doe</h4>
                    <h5 class="sub-title mt-0 mb-15">Teacher's Designation</h5>
                    <a class="btn btn-theme-colored btn-sm" href="{{ asset('frontend') }}/assets/page-doctor-details.html">view details</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="hover-effect mb-30">
                  <div class="thumb">
                    <img class="img-fullwidth" alt="" src="{{ asset('frontend') }}/assets/images/team/3.jpg">
                    <div class="hover-link">
                      <ul class="styled-icons icon-dark icon-theme-colored icon-circled icon-sm">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="details p-15 pt-10 pb-10">
                    <h4 class="title mb-5">Proff.  DR.  Jhon Doe</h4>
                    <h5 class="sub-title mt-0 mb-15">Teacher's Designation</h5>
                    <a class="btn btn-theme-colored btn-sm" href="{{ asset('frontend') }}/assets/page-doctor-details.html">view details</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="hover-effect mb-30">
                  <div class="thumb">
                    <img class="img-fullwidth" alt="" src="{{ asset('frontend') }}/assets/images/team/4.jpg">
                    <div class="hover-link">
                      <ul class="styled-icons icon-dark icon-theme-colored icon-circled icon-sm">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="details p-15 pt-10 pb-10">
                    <h4 class="title mb-5">Proff.  DR.  Jhon Doe</h4>
                    <h5 class="sub-title mt-0 mb-15">Teacher's Designation</h5>
                    <a class="btn btn-theme-colored btn-sm" href="page-doctor-details.html">view details</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="hover-effect mb-30">
                  <div class="thumb">
                    <img class="img-fullwidth" alt="" src="{{ asset('frontend') }}/assets/images/team/3.jpg">
                    <div class="hover-link">
                      <ul class="styled-icons icon-dark icon-theme-colored icon-circled icon-sm">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="details p-15 pt-10 pb-10">
                    <h4 class="title mb-5">Proff.  DR.  Jhon Doe</h4>
                    <h5 class="sub-title mt-0 mb-15">Teacher's Designation</h5>
                    <a class="btn btn-theme-colored btn-sm" href="page-doctor-details.html">view details</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Gallery -->
    <section class="divider parallax layer-overlay overlay-dark-8" data-bg-img="{{ asset('frontend') }}/assets/images/bg/bg6.jpg" id="gallery">
     <div class="container pt-60 pb-40">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="mt-0 pb-0 mb-0 text-white text-uppercase">Photo  <span class="text-theme-color-2">Gallery</span></h2>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <!-- Gallery Grid -->
            <div class="owl-carousel-4col" data-nav="true">
              <div class="item">
                <div class="work-gallery">
                  <div class="gallery-thumb">
                    <img class="img-fullwidth" alt="" src="{{ asset('frontend') }}/assets/images/gallery/1.jpg">
                    <div class="gallery-overlay"></div>
                    <div class="gallery-contect">
                      <ul class="styled-icons icon-bordered icon-circled icon-sm">
                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                        <li><a data-rel="prettyPhoto" href="{{ asset('frontend') }}/assets/images/gallery/1.jpg"><i class="fa fa-arrows"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="gallery-bottom-part text-center">
                    <h4 class="title text-uppercase font-raleway font-weight-600 m-0">Title Place Here</h4>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="work-gallery">
                  <div class="gallery-thumb">
                    <img class="img-fullwidth" alt="" src="{{ asset('frontend') }}/assets/images/gallery/2.jpg">
                    <div class="gallery-overlay"></div>
                    <div class="gallery-contect">
                      <ul class="styled-icons icon-bordered icon-circled icon-sm">
                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                        <li><a data-rel="prettyPhoto" href="{{ asset('frontend') }}/assets/images/gallery/2.jpg"><i class="fa fa-arrows"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="gallery-bottom-part text-center">
                    <h4 class="title text-uppercase font-raleway font-weight-600 m-0">Title Place Here</h4>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="work-gallery">
                  <div class="gallery-thumb">
                    <img class="img-fullwidth" alt="" src="{{ asset('frontend') }}/assets/images/gallery/3.jpg">
                    <div class="gallery-overlay"></div>
                    <div class="gallery-contect">
                      <ul class="styled-icons icon-bordered icon-circled icon-sm">
                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                        <li><a data-rel="prettyPhoto" href="{{ asset('frontend') }}/assets/images/gallery/3.jpg"><i class="fa fa-arrows"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="gallery-bottom-part text-center">
                    <h4 class="title text-uppercase font-raleway font-weight-600 m-0">Title Place Here</h4>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="work-gallery">
                  <div class="gallery-thumb">
                    <img class="img-fullwidth" alt="" src="{{ asset('frontend') }}/assets/images/gallery/4.jpg">
                    <div class="gallery-overlay"></div>
                    <div class="gallery-contect">
                      <ul class="styled-icons icon-bordered icon-circled icon-sm">
                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                        <li><a data-rel="prettyPhoto" href="{{ asset('frontend') }}/assets/images/gallery/4.jpg"><i class="fa fa-arrows"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="gallery-bottom-part text-center">
                    <h4 class="title text-uppercase font-raleway font-weight-600 m-0">Title Place Here</h4>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="work-gallery">
                  <div class="gallery-thumb">
                    <img class="img-fullwidth" alt="" src="{{ asset('frontend') }}/assets/images/gallery/5.jpg">
                    <div class="gallery-overlay"></div>
                    <div class="gallery-contect">
                      <ul class="styled-icons icon-bordered icon-circled icon-sm">
                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                        <li><a data-rel="prettyPhoto" href="{{ asset('frontend') }}/assets/images/gallery/3.jpg"><i class="fa fa-arrows"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="gallery-bottom-part text-center">
                    <h4 class="title text-uppercase font-raleway font-weight-600 m-0">Title Place Here</h4>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="work-gallery">
                  <div class="gallery-thumb">
                    <img class="img-fullwidth" alt="" src="images/gallery/6.jpg">
                    <div class="gallery-overlay"></div>
                    <div class="gallery-contect">
                      <ul class="styled-icons icon-bordered icon-circled icon-sm">
                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                        <li><a data-rel="prettyPhoto" href="{{ asset('frontend') }}/assets/images/gallery/6.jpg"><i class="fa fa-arrows"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="gallery-bottom-part text-center">
                    <h4 class="title text-uppercase font-raleway font-weight-600 m-0">Title Place Here</h4>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Gallery Grid -->
          </div>
        </div>
      </div >
    </section>

    <!-- Section: Why Choose Us -->
    <section class="bg-lighter">
      <div class="container pt-40 pb-50">
        <div class="section-content">
          <div class="row">
            <div class="col-md-5 wow fadeInRight pr-40" data-wow-duration="1s" data-wow-delay="0.3s">
              <h3 class="text-uppercase title line-bottom">What <span class="text-theme-color-2 font-weight-700">Clients Say ?</span></h3>
              <div class="bxslider bx-nav-top">
                <div class="testimonial bg-theme-colored border-radius-10px p-20 mb-15">
                  <div class="comment">
                   <p class="text-white"><em>Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui.</em></p>
                  </div>
                  <div class="content mt-20">
                    <div class="thumb pull-left flip">
                      <img width="64" src="{{ asset('frontend') }}/assets/images/testimonials/1.jpg" alt="" class="img-circle">
                    </div>
                    <div class="testimonials-details pull-left flip ml-20">
                      <h5 class="author text-theme-color-2 mt-0 mb-0 font-weight-600">Jonathan Smith</h5>
                      <h6 class="title font-14 m-0 mt-5 mb-5 text-gray-darkgray">cici inc.</h6>
                      <ul class="review_text list-inline">
                        <li>
                          <div class="star-rating" title="Rated 4.50 out of 5"><span data-width="90%">4.50</span></div>
                        </li>
                      </ul>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
                <div class="testimonial bg-theme-colored border-radius-10px p-20 mb-15">
                  <div class="comment">
                   <p class="text-white"><em>Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui.</em></p>
                  </div>
                  <div class="content mt-20">
                    <div class="thumb pull-left flip">
                      <img width="64" src="{{ asset('frontend') }}/assets/images/testimonials/2.jpg" alt="" class="img-circle">
                    </div>
                    <div class="testimonials-details pull-left flip ml-20">
                      <h5 class="author text-theme-color-2 mt-0 mb-0 font-weight-600">Jonathan Smith</h5>
                      <h6 class="title font-14 m-0 mt-5 mb-5 text-gray-darkgray">cici inc.</h6>
                      <ul class="review_text list-inline">
                        <li>
                          <div class="star-rating" title="Rated 4.50 out of 5"><span data-width="90%">4.50</span></div>
                        </li>
                      </ul>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
                <div class="testimonial bg-theme-colored border-radius-10px p-20 mb-15">
                  <div class="comment">
                   <p class="text-white"><em>Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui.</em></p>
                  </div>
                  <div class="content mt-20">
                    <div class="thumb pull-left flip">
                      <img width="64" src="{{ asset('frontend') }}/assets/images/testimonials/3.jpg" alt="" class="img-circle">
                    </div>
                    <div class="testimonials-details pull-left flip ml-20">
                      <h5 class="author text-theme-color-2 mt-0 mb-0 font-weight-600">Jonathan Smith</h5>
                      <h6 class="title font-14 m-0 mt-5 mb-5 text-gray-darkgray">cici inc.</h6>
                      <ul class="review_text list-inline">
                        <li>
                          <div class="star-rating" title="Rated 4.50 out of 5"><span data-width="90%">4.50</span></div>
                        </li>
                      </ul>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-7 hidden-xs pl-40">
              <h3 class="line-bottom mt-20 line-height-1"><span class="text-theme-color-2">FAQ</span></h3>
              <div id="accordion1" class="panel-group accordion">
                <div class="panel">
                  <div class="panel-title"> <a class="active" data-parent="#accordion1" data-toggle="collapse" href="#accordion11" aria-expanded="true"> <span class="open-sub"></span> Why this Company is Best?</a> </div>
                  <div id="accordion11" class="panel-collapse collapse in" role="tablist" aria-expanded="true">
                    <div class="panel-content">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore impedit quae repellendus provident dolor iure poss imusven am aliquam. Officiis totam ea laborum deser unt vonsess.  iure poss imusven am aliquam</p>
                    </div>
                  </div>
                </div>
                <div class="panel">
                  <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion12" class="" aria-expanded="true"> <span class="open-sub"></span> Why this Company is Best?</a> </div>
                  <div id="accordion12" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                    <div class="panel-content">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore impedit quae repellendus provident dolor iure poss imusven am aliquam. Officiis totam ea laborum deser unt vonsess.  iure poss imusven am aliquam</p>
                    </div>
                  </div>
                </div>
                <div class="panel">
                  <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion13" class="" aria-expanded="true"> <span class="open-sub"></span> Why this Company is Best?</a> </div>
                  <div id="accordion13" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                    <div class="panel-content">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore impedit quae repellendus provident dolor iure poss imusven am aliquam. Officiis totam ea laborum deser unt vonsess.  iure poss imusven am aliquam</p>
                    </div>
                  </div>
                </div>
                <div class="panel">
                  <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion14" class="" aria-expanded="true"> <span class="open-sub"></span> Why this Company is Best?</a> </div>
                  <div id="accordion14" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                    <div class="panel-content">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore impedit quae repellendus provident dolor iure poss imusven am aliquam. Officiis totam ea laborum deser unt vonsess.  iure poss imusven am aliquam</p>
                    </div>
                  </div>
                </div>
                <div class="panel">
                  <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion15" class="" aria-expanded="true"> <span class="open-sub"></span> Why this Company is Best?</a> </div>
                  <div id="accordion15" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                    <div class="panel-content">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore impedit quae repellendus provident dolor iure poss imusven am aliquam. Officiis totam ea laborum deser unt vonsess.  iure poss imusven am aliquam</p>
                    </div>
                  </div>
                </div>
                <div class="panel">
                  <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion16" class="" aria-expanded="true"> <span class="open-sub"></span> Why this Company is Best?</a> </div>
                  <div id="accordion16" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                    <div class="panel-content">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore impedit quae repellendus provident dolor iure poss imusven am aliquam. Officiis totam ea laborum deser unt vonsess.  iure poss imusven am aliquam</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: events -->
    <section id="events" class="divider parallax layer-overlay overlay-dark-8" data-stellar-background-ratio="0.5" data-bg-img="{{ asset('frontend') }}/assets/images/bg/bg6.jpg">
      <div class="container pt-70 pb-40">
        <div class="section-title mb-30">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
              <h2 class="mt-0 line-height-1 text-center mb-10 text-white text-uppercase">Upcoming Events</h2>
              <p class="text-white mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 mb-30 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="pricing table-horizontal maxwidth400">
                <div class="row">
                  <div class="col-md-6">
                    <div class="thumb">
                    <img class="img-fullwidth mb-sm-0" src="{{ asset('frontend') }}/assets/images/about/as7.jpg" alt="">
                    </div>
                  </div>
                  <div class="col-md-6 p-30 pl-sm-50">
                    <h4 class="mt-0 mb-5"><a href="#" class="text-white">Upcoming Events Title</a></h4>
                    <ul class="list-inline mb-5 text-white">
                      <li class="pr-0"><i class="fa fa-calendar mr-5"></i> June 26, 2016 |</li>
                      <li class="pl-5"><i class="fa fa-map-marker mr-5"></i>New York</li>
                    </ul>
                    <p class="mb-15 mt-15 text-white">Lorem ipsum dolor sit amet, consectetur adi isicing elit. Quas eveniet, nemo dicta. Ullam nam.</p>
                    <a class="text-white font-weight-600" href="#">Read More →</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 mb-30 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="pricing table-horizontal maxwidth400">
                <div class="row">
                  <div class="col-md-6">
                    <div class="thumb">
                    <img class="img-fullwidth mb-sm-0" src="{{ asset('frontend') }}/assets/images/about/as8.jpg" alt="">
                    </div>
                  </div>
                  <div class="col-md-6 p-30 pl-sm-50">
                    <h4 class="mt-0 mb-5"><a href="#" class="text-white">Upcoming Events Title</a></h4>
                    <ul class="list-inline mb-5 text-white">
                      <li class="pr-0"><i class="fa fa-calendar mr-5"></i> June 26, 2016 |</li>
                      <li class="pl-5"><i class="fa fa-map-marker mr-5"></i>New York</li>
                    </ul>
                    <p class="mb-15 mt-15 text-white">Lorem ipsum dolor sit amet, consectetur adi isicing elit. Quas eveniet, nemo dicta. Ullam nam.</p>
                    <a class="text-white font-weight-600" href="#">Read More →</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 mb-30 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="pricing table-horizontal maxwidth400">
                <div class="row">
                  <div class="col-md-6">
                    <div class="thumb">
                    <img class="img-fullwidth mb-sm-0" src="{{ asset('frontend') }}/assets/images/about/as9.jpg" alt="">
                    </div>
                  </div>
                  <div class="col-md-6 p-30 pl-sm-50">
                    <h4 class="mt-0 mb-5"><a href="#" class="text-white">Upcoming Events Title</a></h4>
                    <ul class="list-inline mb-5 text-white">
                      <li class="pr-0"><i class="fa fa-calendar mr-5"></i> June 26, 2016 |</li>
                      <li class="pl-5"><i class="fa fa-map-marker mr-5"></i>New York</li>
                    </ul>
                    <p class="mb-15 mt-15 text-white">Lorem ipsum dolor sit amet, consectetur adi isicing elit. Quas eveniet, nemo dicta. Ullam nam.</p>
                    <a class="text-white font-weight-600" href="#">Read More →</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 mb-30 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="pricing table-horizontal maxwidth400">
                <div class="row">
                  <div class="col-md-6">
                    <div class="thumb">
                    <img class="img-fullwidth mb-sm-0" src="{{ asset('frontend') }}/assets/images/about/as10.jpg" alt="">
                    </div>
                  </div>
                  <div class="col-md-6 p-30 pl-sm-50">
                    <h4 class="mt-0 mb-5"><a href="#" class="text-white">Upcoming Events Title</a></h4>
                    <ul class="list-inline mb-5 text-white">
                      <li class="pr-0"><i class="fa fa-calendar mr-5"></i> June 26, 2016 |</li>
                      <li class="pl-5"><i class="fa fa-map-marker mr-5"></i>New York</li>
                    </ul>
                    <p class="mb-15 mt-15 text-white">Lorem ipsum dolor sit amet, consectetur adi isicing elit. Quas eveniet, nemo dicta. Ullam nam.</p>
                    <a class="text-white font-weight-600" href="#">Read More →</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Blog -->
    <section id="blog">
      <div class="container pb-70 pt-60 pb-sm-20">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="mt-10 line-height-1 text-uppercase">Recent  <span class="text-theme-color-2"> News</span></h2>
              <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
              <article class="post clearfix mb-sm-30">
                <div class="entry-header">
                  <div class="post-thumb thumb">
                    <img src="{{ asset('frontend') }}/assets/images/blog/1.jpg" alt="" class="img-responsive img-fullwidth">
                  </div>
                </div>
                <div class="entry-content p-20 pr-10">
                  <div class="entry-meta media mt-0 no-bg no-border">
                    <div class="entry-date media-left flip text-center">
                      <ul>
                        <li class="font-16 font-weight-600 border-bottom bg-white-f1 pt-5 pr-15 pb-5 pl-15">28</li>
                        <li class="font-12 text-white text-uppercase bg-theme-colored pt-5 pr-15 pb-5 pl-15">Feb</li>
                      </ul>
                    </div>
                    <div class="media-body pl-10">
                      <div class="event-content pull-left flip">
                        <h4 class="entry-title text-white text-capitalize m-0"><a href="#">This is a standard post with thumbnail</a></h4>
                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>
                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span>
                      </div>
                    </div>
                  </div>
                  <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti, sint assumenda. Pariatur iste veritatis excepturi, ipsa optio nobis</p>
                      <div class="mt-10"> <a href="blog-single-left-sidebar.html" class="btn btn-theme-colored btn-sm">Read More</a> </div>
                  <div class="clearfix"></div>
                </div>
              </article>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
              <article class="post clearfix mb-sm-30">
                <div class="entry-header">
                  <div class="post-thumb thumb">
                    <img src="{{ asset('frontend') }}/assets/images/blog/2.jpg" alt="" class="img-responsive img-fullwidth">
                  </div>
                </div>
                <div class="entry-content p-20 pr-10">
                  <div class="entry-meta media mt-0 no-bg no-border">
                    <div class="entry-date media-left flip text-center">
                      <ul>
                        <li class="font-16 font-weight-600 border-bottom bg-white-f1 pt-5 pr-15 pb-5 pl-15">28</li>
                        <li class="font-12 text-white text-uppercase bg-theme-colored pt-5 pr-15 pb-5 pl-15">Feb</li>
                      </ul>
                    </div>
                    <div class="media-body pl-10">
                      <div class="event-content pull-left flip">
                        <h4 class="entry-title text-white text-capitalize m-0"><a href="#">This is a standard post with thumbnail</a></h4>
                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>
                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span>
                      </div>
                    </div>
                  </div>
                  <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti, sint assumenda. Pariatur iste veritatis excepturi, ipsa optio nobis</p>
                      <div class="mt-10"> <a href="blog-single-left-sidebar.html" class="btn btn-theme-colored btn-sm">Read More</a> </div>
                  <div class="clearfix"></div>
                </div>
              </article>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 wow mb-sm-0  fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
              <article class="post clearfix mb-sm-30">
                <div class="entry-header">
                  <div class="post-thumb thumb">
                    <img src="{{ asset('frontend') }}/assets/images/blog/3.jpg" alt="" class="img-responsive img-fullwidth">
                  </div>
                </div>
                <div class="entry-content p-20 pr-10">
                  <div class="entry-meta media mt-0 no-bg no-border">
                    <div class="entry-date media-left flip text-center">
                      <ul>
                        <li class="font-16 font-weight-600 border-bottom bg-white-f1 pt-5 pr-15 pb-5 pl-15">28</li>
                        <li class="font-12 text-white text-uppercase bg-theme-colored pt-5 pr-15 pb-5 pl-15">Feb</li>
                      </ul>
                    </div>
                    <div class="media-body pl-10">
                      <div class="event-content pull-left flip">
                        <h4 class="entry-title text-white text-capitalize m-0"><a href="#">This is a standard post with thumbnail</a></h4>
                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>
                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span>
                      </div>
                    </div>
                  </div>
                  <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti, sint assumenda. Pariatur iste veritatis excepturi, ipsa optio nobis</p>
                      <div class="mt-10"> <a href="blog-single-left-sidebar.html" class="btn btn-theme-colored btn-sm">Read More</a> </div>
                  <div class="clearfix"></div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Contact -->
    <section id="contact" class="bg-lighter">
      <div class="container pt-70 pb-40">
        <div class="section-content">
          <div class="row">
            <div class="col-md-5">
              <h3 class="line-bottom text-uppercase mt-0 mb-30 mt-sm-20">Find Our Location</h3>
              <!-- Google Map HTML Codes -->
              <div
                data-address="121 King Street, Melbourne Victoria 3000 Australia"
                data-popupstring-id="#popupstring1"
                class="map-canvas autoload-map"
                data-mapstyle="style8"
                data-height="353"
                data-latlng="-37.817314,144.955431"
                data-title="sample title"
                data-zoom="12"
                data-marker="{{ asset('frontend') }}/assets/images/map-marker.png">
              </div>
              <div class="map-popupstring hidden" id="popupstring1">
                <div class="text-center">
                  <h3>Health Zone Office</h3>
                  <p>121 King Street, Melbourne Victoria 3000 Australia</p>
                </div>
              </div>
              <!-- Google Map Javascript Codes -->
              <script src="http://maps.google.com/maps/api/js?key=AIzaSyAYWE4mHmR9GyPsHSOVZrSCOOljk8DU9B4"></script>
              <script src="{{ asset('frontend') }}/assets/js/google-map-init.js"></script>
            </div>
            <div class="col-md-7">
              <h3 class="line-bottom text-uppercase mt-0 mb-30 mt-sm-20">Send Us a Message </h3> <!-- Contact Form -->
              <form id="contact_form" name="contact_form" class="" action="#" method="post">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group mb-30">
                      <input name="form_name" class="form-control" type="text" placeholder="Enter Name" required="">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group mb-30">
                      <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group mb-30">
                      <input name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group mb-30">
                      <input name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                    </div>
                  </div>
                </div>
                    <div class="form-group mb-15">
                  <textarea name="form_message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
                </div>
                    <div class="form-group mb-30">
                  <input name="form_botcheck" class="form-control" type="hidden" value="" />
                  <button type="submit" class="btn btn-flat btn-theme-colored text-uppercase mt-20 mb-sm-30 border-left-theme-color-2-4px" data-loading-text="Please wait...">Send your message</button>
                  <button type="reset" class="btn btn-flat btn-theme-colored text-uppercase mt-20 mb-sm-30 border-left-theme-color-2-4px">Reset</button>
                </div>
              </form>
              <!-- Contact Form Validation-->
              <script type="text/javascript">
                $("#contact_form").validate({
                  submitHandler: function(form) {
                    var form_btn = $(form).find('button[type="submit"]');
                    var form_result_div = '#form-result';
                    $(form_result_div).remove();
                    form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                    var form_btn_old_msg = form_btn.html();
                    form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                    $(form).ajaxSubmit({
                      dataType:  'json',
                      success: function(data) {
                        if( data.status == 'true' ) {
                          $(form).find('.form-control').val('');
                        }
                        form_btn.prop('disabled', false).html(form_btn_old_msg);
                        $(form_result_div).html(data.message).fadeIn('slow');
                        setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                      }
                    });
                  }
                });
              </script>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Clients -->
    <section class="clients bg-theme-colored">
      <div class="container pt-10 pb-0 pt-sm-0 pb-sm-0">
        <div class="row">
          <div class="col-md-12">
            <!-- Section: Clients -->
            <div class="owl-carousel-6col transparent text-center owl-nav-top">
              <div class="item"> <a href="#"><img src="{{ asset('frontend') }}/assets/images/clients/w1.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="{{ asset('frontend') }}/assets/images/clients/w2.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="{{ asset('frontend') }}/assets/images/clients/w3.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="{{ asset('frontend') }}/assets/images/clients/w4.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="{{ asset('frontend') }}/assets/images/clients/w5.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="{{ asset('frontend') }}/assets/images/clients/w6.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="{{ asset('frontend') }}/assets/images/clients/w3.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="{{ asset('frontend') }}/assets/images/clients/w4.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="{{ asset('frontend') }}/assets/images/clients/w5.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="{{ asset('frontend') }}/assets/images/clients/w6.png" alt=""></a></div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>
  <!-- end main-content -->





  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="{{ asset('frontend') }}/assets/js/custom.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS
      (Load Extensions only on Local File Systems !
       The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="{{ asset('frontend') }}/assets/js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="{{ asset('frontend') }}/assets/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="{{ asset('frontend') }}/assets/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="{{ asset('frontend') }}/assets/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="{{ asset('frontend') }}/assets/js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="{{ asset('frontend') }}/assets/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="{{ asset('frontend') }}/assets/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="{{ asset('frontend') }}/assets/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="{{ asset('frontend') }}/assets/js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>
</body>











<!-- ///////////////Body End//////////////////////////////////// -->



    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
            var
                direction = section.replace(/#/, ''),
                reqSection = $('.section').filter('[data-section="' + direction + '"]'),
                reqSectionPos = reqSection.offset().top - 0;

            if (isAnimate) {
                $('body, html').animate({
                        scrollTop: reqSectionPos
                    },
                    800);
            } else {
                $('body, html').scrollTop(reqSectionPos);
            }

        };

        var checkSection = function checkSection() {
            $('.section').each(function() {
                var
                    $this = $(this),
                    topEdge = $this.offset().top - 80,
                    bottomEdge = topEdge + $this.height(),
                    wScroll = $(window).scrollTop();
                if (topEdge < wScroll && bottomEdge > wScroll) {
                    var
                        currentId = $this.data('section'),
                        reqLink = $('a').filter('[href*=\\#' + currentId + ']');
                    reqLink.closest('li').addClass('active').
                    siblings().removeClass('active');
                }
            });
        };

        $('.main-menu, .scroll-to-section').on('click', 'a', function(e) {
            if ($(e.target).hasClass('external')) {
                return;
            }
            e.preventDefault();
            $('#menu').removeClass('active');
            showSection($(this).attr('href'), true);
        });

        $(window).scroll(function() {
            checkSection();
        });
    </script>
@endsection
