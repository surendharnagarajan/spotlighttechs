<!--====== HEADER PART START ======-->
    
<header id="header-part">
       
    <div class="header-top d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="header-contact text-lg-left text-center">
                        <ul>
                            <li><img src="{{ asset('images/all-icon/map.png') }}" alt="icon"><span>#61, Anush complex, AMC road, Dindigul</span></li>
                            <li><img src="{{ asset('images/all-icon/email.png') }}" alt="icon"><span><a class="text-white" href="mailto:info@spotlighttechs.com">info@spotlighttechs.com</a></span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="header-opening-time text-lg-right text-center">
                        <p>Opening Hours : Monday to Saturay - 9 Am to 6 Pm</p>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- header top -->
    
    <div class="header-logo-support pt-30 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('images/spotlight.png') }}" alt="Spotlight Tech">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="support-button float-right d-none d-md-block">
                        <div class="support float-left">
                            <div class="icon">
                                <img src="{{ asset('images/all-icon/support.png') }}" alt="icon">
                            </div>
                            <div class="cont">
                                <p>Need Help? call us free</p>
                                <span><a style="color: #07294D;" href="tel:+91 99440 54898">+91 99440 54898</a></span>
                            </div>
                        </div>
                        <div class="button float-left">
                            <a href="{{ route('courses') }}" class="main-btn">Enquiry Courses</a>
                        </div>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- header logo support -->
    
    <div class="navigation">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-10 col-sm-9 col-8">
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="{{ Request::is('/') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="{{ Request::is('about') ? 'active' : '' }}" href="{{ route('about') }}">About us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="{{ Request::is('courses') ? 'active' : '' }}" href="{{ route('courses') }}">Courses</a>
                                </li>
                                <li class="nav-item">
                                    <a class="{{ Request::is('blog') ? 'active' : '' }}" href="{{ route('blog') }}">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="{{ Request::is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav> <!-- nav -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>
    
</header>

<!--====== HEADER PART ENDS ======-->