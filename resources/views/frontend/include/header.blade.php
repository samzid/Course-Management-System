
  <!-- Header -->
  <header id="header" class="header">
    <div class="header-top bg-theme-color-2 sm-text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="widget no-border m-0">
              <ul class="list-inline">
                <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-white"></i> <a class="text-white" href="#">123-456-789</a> </li>
                <li class="text-white m-0 pl-10 pr-10"> <i class="fa fa-clock-o text-white"></i> Mon-Fri 8:00 to 2:00 </li>
                <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-white"></i> <a class="text-white" href="#">{{ @Auth::user()->email }}</a> </li>
                <li class="m-0 pl-10 pr-10"> <i class="fa fa-male" style="color:white"></i> <a class="text-white" href="#">{{ @Auth::user()->name }}</a> </li>

              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="widget no-border m-0">
              <ul class="list-inline text-right sm-text-center">
                <li>
                  <a href="#" class="text-white">FAQ</a>
                </li>
                <li class="text-white">|</li>
                <li>
                  <a href="#" class="text-white">Help Desk</a>
                </li>
                <li class="text-white">|</li>
                <li>
                  <a href="#" class="text-white">Support</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
        <div class="container">
          <nav id="menuzord-right" class="menuzord default">
            <a class="menuzord-brand pull-left flip" href="javascript:void(0)">
              <img src="{{ asset('frontend') }}/assets/images/logo-wide-white.png" alt="">
            </a>




            <ul class="menuzord-menu onepage-nav">
              <li class="active"><a href="{{route('user_home_page')}}">Home</a></li>
              <!-- <li><a href="#courses">Courses</a></li>
              <li><a href="#teachers">Teachers</a></li> -->
              <li><a href="#gallery">Gallery</a></li>
              <li><a href="#events">Events</a></li>
              <li><a href="#blog">Blog</a></li>
              <li><a href="#contact">Contact</a></li>
              <li><a href="{{route('user.register')}}">Register</a></li>
              <li><a href="{{route('login')}}">Login</a></li>
              <li><a href="{{route('registration.form')}}">Take Course</a></li>



     <li>
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
    <span class="caret"></span></button>
    <ul style="background-color: blue" class="dropdown-menu">
    <ul class="sub-menu">

   @if (Auth::check())
    <li ">
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-jet-dropdown-link href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                      this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-jet-dropdown-link>
        </form>
    </li>
    @elseif (!Auth::check())
    <li style="border-radius: 10px" class="btn btn-primary" ><a style="color:white ; font-weight: bold ; font-size:16px ;"  href="#register">Register</a></li>
    <li style="border-radius: 10px" class="btn btn-primary" ><a style="color:white ; font-weight: bold ; font-size:16px ;"  href="{{ route('login') }}">Login</a></li>
    @endif
   <li style="border-radius: 10px" class="btn btn-primary"><a  style="color:white ; font-weight: bold ; font-size:16px ;"   href="{{ route('alladmin.login') }}">Admin Login</a></li>

     </ul>
        </ul>
    </li>
            </ul>




          </nav>
        </div>
      </div>
    </div>
  </header>
