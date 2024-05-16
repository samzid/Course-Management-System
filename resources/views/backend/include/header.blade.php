<nav
    class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-dark navbar-shadow container-xxl">
    <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav d-xl-none">
                <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon"
                            data-feather="menu"></i></a></li>
            </ul>

        </div>
        <ul class="nav navbar-nav align-items-center ms-auto">

            <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon"
                        data-feather="sun"></i></a></li>
            <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link"
                    id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">


                    @if (Auth::guard('admin')->check())
                        <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder"></span><span
                                class="user-status">Admin</span></div>
                    @endif



                    @if (Auth::guard('exam')->check())
                        <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder"></span><span
                                class="user-status">Exam Office</span></div>
                    @endif


                    @if (Auth::guard('register')->check())
                        <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder"></span><span
                                class="user-status">Register Office</span></div>
                    @endif




                    @if (Auth::guard('account')->check())
                        <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder"></span><span
                                class="user-status">Account Office</span></div>
                    @endif


                    @if (Auth::guard('library')->check())
                        <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder"></span><span
                                class="user-status">Library Office</span></div>
                    @endif


                    <span class="avatar"><span class="avatar-status-online"></span></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">


                    @if (Auth::guard('admin')->check())
                        <form class="dropdown-item me-50" method="POST" action="{{ route('admin.logout') }}">
                            @csrf
                            <x-jet-responsive-nav-link href="{{ route('admin.logout') }}"
                                onclick="event.preventDefault();
                                  this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-jet-responsive-nav-link>
                        </form>
                    @endif



                    @if (Auth::guard('exam')->check())
                        <a href="{{ url('exam/logout') }}">Exam Logout</a>
                    @endif



                    @if (Auth::guard('register')->check())
                        <a href="{{ url('register/logout') }}">Register Logout</a>
                    @endif



                    @if (Auth::guard('account')->check())
                        <a href="{{ url('account/logout') }}">Account Logout</a>
                    @endif



                    @if (Auth::guard('library')->check())
                        <a href="{{ url('library/logout') }}">Library Logout</a>
                    @endif


                </div>
            </li>
        </ul>
    </div>
</nav>

<ul class="main-search-list-defaultlist d-none">
    <li class="d-flex align-items-center"><a href="#">
            <h6 class="section-label mt-75 mb-0">Files</h6>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
            href="app-file-manager.html">
            <div class="d-flex">
                <div class="me-75"><img src="{{ asset('backend') }}/app-assets/images/icons/xls.png" alt="png"
                        height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing
                        Manager</small>
                </div>
            </div><small class="search-data-size me-50 text-muted">&apos;17kb</small>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
            href="app-file-manager.html">
            <div class="d-flex">
                <div class="me-75"><img src="{{ asset('backend') }}/app-assets/images/icons/jpg.png" alt="png"
                        height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd
                        Developer</small>
                </div>
            </div><small class="search-data-size me-50 text-muted">&apos;11kb</small>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
            href="app-file-manager.html">
            <div class="d-flex">
                <div class="me-75"><img src="{{ asset('backend') }}/app-assets/images/icons/pdf.png" alt="png"
                        height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital
                        Marketing Manager</small>
                </div>
            </div><small class="search-data-size me-50 text-muted">&apos;150kb</small>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
            href="app-file-manager.html">
            <div class="d-flex">
                <div class="me-75"><img src="{{ asset('backend') }}/app-assets/images/icons/doc.png" alt="png"
                        height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web Designer</small>
                </div>
            </div><small class="search-data-size me-50 text-muted">&apos;256kb</small>
        </a></li>
    <li class="d-flex align-items-center"><a href="#">
            <h6 class="section-label mt-75 mb-0">Members</h6>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
            href="app-user-view-account.html">
            <div class="d-flex align-items-center">
                <div class="avatar me-75"><img
                        src="{{ asset('backend') }}/app-assets/images/portrait/small/avatar-s-8.jpg" alt="png"
                        height="32"></div>
                <div class="search-data">
                    {{-- <p class="search-data-title mb-0"></p><small class="text-muted">UI designer</small> --}}
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
            href="app-user-view-account.html">
            <div class="d-flex align-items-center">
                <div class="avatar me-75"><img
                        src="{{ asset('backend') }}/app-assets/images/portrait/small/avatar-s-1.jpg" alt="png"
                        height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd
                        Developer</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
            href="app-user-view-account.html">
            <div class="d-flex align-items-center">
                <div class="avatar me-75"><img
                        src="{{ asset('backend') }}/app-assets/images/portrait/small/avatar-s-14.jpg" alt="png"
                        height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing
                        Manager</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
            href="app-user-view-account.html">
            <div class="d-flex align-items-center">
                <div class="avatar me-75"><img
                        src="{{ asset('backend') }}/app-assets/images/portrait/small/avatar-s-6.jpg" alt="png"
                        height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
                </div>
            </div>
        </a></li>
</ul>
<ul class="main-search-list-defaultlist-other-list d-none">
    <li class="auto-suggestion justify-content-between"><a
            class="d-flex align-items-center justify-content-between w-100 py-50">
            <div class="d-flex justify-content-start"><span class="me-75"
                    data-feather="alert-circle"></span><span>No results found.</span></div>
        </a></li>
</ul>
