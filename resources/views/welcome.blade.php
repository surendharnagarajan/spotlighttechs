@extends('inc.app', ['slider' => true])

@section('content')
    <!--====== CATEGORY PART START ======-->

    <section id="category-part">
        <div class="container">
            <div class="category pt-40 pb-80">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="category-text pt-40">
                            <h2>Best coursing center to learn everything</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1 col-md-8 offset-md-2 col-sm-8 offset-sm-2 col-8 offset-2">
                        <div class="row category-slied mt-40">
                            <div class="col-lg-4">
                                <a href="{{ route('mechanical') }}">
                                    <span class="singel-category text-center color-1">
                                        <span class="icon">
                                            <img src="{{ asset('images/home/cogs-solid.svg') }}" width="500" height="100" alt="Mechanical">
                                        </span>
                                        <span class="cont">
                                            <span>Mechanical</span>
                                        </span>
                                    </span> <!-- singel category -->
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="{{ route('civil') }}">
                                    <span class="singel-category text-center color-2">
                                        <span class="icon">
                                            <img src="{{ asset('images/home/city-solid.svg') }}" width="500" height="100" alt="Civil">
                                        </span>
                                        <span class="cont">
                                            <span>Civil</span>
                                        </span>
                                    </span> <!-- singel category -->
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="{{ route('programming') }}">
                                    <span class="singel-category text-center color-3">
                                        <span class="icon">
                                            <img src="{{ asset('images/home/laptop-solid.svg') }}" width="500" height="100" alt="CSE / IT / EEE / ECE">
                                        </span>
                                        <span class="cont">
                                            <span>CSE/IT/EEE/ECE</span>
                                        </span>
                                    </span> <!-- singel category -->
                                </a>
                            </div>
                        </div> <!-- category slied -->
                    </div>
                </div> <!-- row -->
            </div> <!-- category -->
        </div> <!-- container -->
    </section>

    <!--====== CATEGORY PART ENDS ======-->

    <!--====== ABOUT PART START ======-->

    <section id="about-part" class="pt-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title mt-50">
                        <h5>About us</h5>
                        <h2>Welcome to Spotlight Tech </h2>
                    </div> <!-- section title -->
                    <div class="about-cont">
                        <p>Upon successful completion of assessment of their potentials and experiences in learnings, employment opportunities and demands in the market, the well developed and multi-designed syllabus helps candidates completing their courses successfully. It also develops skill up-gradation, building of new skills not only for existing jobs but also jobs that are to be created. Once completed and certified, they are provided placement assistance.</p>
                        <a href="{{ route('about') }}" class="main-btn mt-55">Learn More</a>
                    </div>
                </div> <!-- about cont -->
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="about-bg">
            <img src="{{ asset('images/about/bg-1.png') }}" alt="About">
        </div>
    </section>

    <!--====== ABOUT PART ENDS ======-->

    <!--====== APPLY PART START ======-->

    <section id="apply-aprt" class="pb-120">
        <div class="container">
            <div class="apply">
                <div class="row no-gutters">
                    <div class="col-lg-12">
                        <div class="apply-cont apply-color-1">
                            <h3>Apply for course</h3>
                            <p>This is achieved by providing high quality education, Government Recognized Certifications, Cisco Certifications through qualified trainers and maintaining good quality culture.</p>
                            <a href="{{ route('courses') }}" class="main-btn">Course Enquiry</a>
                        </div> <!-- apply cont -->
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== APPLY PART ENDS ======-->

    <!--====== COURSE PART START ======-->

    <section id="course-part" class="pt-115 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-45">
                        <h5>Our course</h5>
                        <h2>Featured courses </h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row course-slied mt-30">
                <div class="col-lg-4">
                    <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="{{ asset('images/course/cu-1.png') }}" alt="Course">
                            </div>
                            <div class="price">
                                <span>Paid</span>
                            </div>
                        </div>
                        <div class="cont">
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span>(42 Reviws)</span>
                            <a href="{{ route('mechanical') }}">
                                <h4>Mechanical Courses</h4>
                            </a>
                            <div class="course-teacher">
                                <div class="thum">
                                    <a href="#"><img src="{{ asset('images/favicon.png') }}" alt="Spotlight Tech"></a>
                                </div>
                                <div class="name">
                                    <a href="#">
                                        <h6>Spotlight Tech</h6>
                                    </a>
                                </div>
                                <div class="admin">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-user"></i><span>151</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- singel course -->
                </div>
                <div class="col-lg-4">
                    <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="{{ asset('images/course/cu-2.png') }}" alt="Course">
                            </div>
                            <div class="price">
                                <span>Paid</span>
                            </div>
                        </div>
                        <div class="cont">
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span>(29 Reviws)</span>
                            <a href="{{ route('civil') }}">
                                <h4>Civil Courses</h4>
                            </a>
                            <div class="course-teacher">
                                <div class="thum">
                                    <a href="#"><img src="{{ asset('images/favicon.png') }}" alt="Spotlight Tech"></a>
                                </div>
                                <div class="name">
                                    <a href="#">
                                        <h6>Spotlight Tech</h6>
                                    </a>
                                </div>
                                <div class="admin">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-user"></i><span>534</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- singel course -->
                </div>
                <div class="col-lg-4">
                    <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="{{ asset('images/course/cu-3.png') }}" alt="Course">
                            </div>
                            <div class="price">
                                <span>Paid</span>
                            </div>
                        </div>
                        <div class="cont">
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span>(84 Reviws)</span>
                            <a href="{{ route('programming') }}">
                                <h4>CSE/IT/EEE/ECE Courses</h4>
                            </a>
                            <div class="course-teacher">
                                <div class="thum">
                                    <a href="#"><img src="{{ asset('images/favicon.png') }}" alt="Spotlight Tech"></a>
                                </div>
                                <div class="name">
                                    <a href="#">
                                        <h6>Spotlight Tech</h6>
                                    </a>
                                </div>
                                <div class="admin">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-user"></i><span>1521</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- singel course -->
                </div>
            </div> <!-- course slied -->
        </div> <!-- container -->
    </section>

    <!--====== COURSE PART ENDS ======-->

    <!--====== VIDEO FEATURE PART START ======-->

    <section id="video-feature" class="bg_cover pt-60 pb-110" style="background-image: url(images/bg-1.jpg)">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-last order-lg-first">
                    {{-- <div class="video text-lg-left text-center pt-50">
                        <a class="Video-popup" href="#"><i
                                class="fa fa-play"></i></a>
                    </div> <!-- row --> --}}
                </div>
                <div class="col-lg-5 offset-lg-1 order-first order-lg-last">
                    <div class="feature pt-50">
                        <div class="feature-title">
                            <h3>Our Facilities</h3>
                        </div>
                        <ul>
                            <li>
                                <div class="singel-feature">
                                    <div class="icon">
                                        <img src="{{ asset('images/all-icon/f-1.png') }}" alt="icon">
                                    </div>
                                    <div class="cont">
                                        <h4>Certificate</h4>
                                        <p>Gravida nibh vel velit auctor aliquetn auci elit cons solliazcitudirem sem
                                            quibibendum sem nibhutis.</p>
                                    </div>
                                </div> <!-- singel feature -->
                            </li>
                            <li>
                                <div class="singel-feature">
                                    <div class="icon">
                                        <img src="{{ asset('images/all-icon/f-2.png') }}" alt="icon">
                                    </div>
                                    <div class="cont">
                                        <h4>Course Support</h4>
                                        <p>Gravida nibh vel velit auctor aliquetn auci elit cons solliazcitudirem sem
                                            quibibendum sem nibhutis.</p>
                                    </div>
                                </div> <!-- singel feature -->
                            </li>
                            <li>
                                <div class="singel-feature">
                                    <div class="icon">
                                        <img src="{{ asset('images/all-icon/f-3.png') }}" alt="icon">
                                    </div>
                                    <div class="cont">
                                        <h4>Books</h4>
                                        <p>Gravida nibh vel velit auctor aliquetn auci elit cons solliazcitudirem sem
                                            quibibendum sem nibhutis.</p>
                                    </div>
                                </div> <!-- singel feature -->
                            </li>
                        </ul>
                    </div> <!-- feature -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="feature-bg"></div> <!-- feature bg -->
    </section>

    <!--====== VIDEO FEATURE PART ENDS ======-->

    {{-- <!--====== TEACHERS PART START ======-->

    <section id="teachers-part" class="pt-70 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title mt-50">
                        <h2>Meet Our founders</h2>
                    </div> <!-- section title -->
                    <div class="teachers-cont">
                        <p>Spotlight Tech is committed for satisfying the needs and expectations of all stakeholders such as Students, Parents, Employees and the Society.</p>
                        <a href="{{ route('about') }}" class="main-btn mt-55">learns more</a>
                    </div> <!-- teachers cont -->
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="teachers mt-20">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="singel-teachers mt-30 text-center">
                                    <div class="image">
                                        <img src="{{ asset('images/teachers/t-1.jpg') }}" alt="Teachers">
                                    </div>
                                    <div class="cont">
                                        <a href="teachers-singel.html">
                                            <h6>Mark alen</h6>
                                        </a>
                                        <span>Vice chencelor</span>
                                    </div>
                                </div> <!-- singel teachers -->
                            </div>
                            <div class="col-sm-6">
                                <div class="singel-teachers mt-30 text-center">
                                    <div class="image">
                                        <img src="{{ asset('images/teachers/t-2.jpg') }}" alt="Teachers">
                                    </div>
                                    <div class="cont">
                                        <a href="teachers-singel.html">
                                            <h6>David card</h6>
                                        </a>
                                        <span>Pro chencelor</span>
                                    </div>
                                </div> <!-- singel teachers -->
                            </div>
                            <div class="col-sm-6">
                                <div class="singel-teachers mt-30 text-center">
                                    <div class="image">
                                        <img src="{{ asset('images/teachers/t-3.jpg') }}" alt="Teachers">
                                    </div>
                                    <div class="cont">
                                        <a href="teachers-singel.html">
                                            <h6>Rebeka alig</h6>
                                        </a>
                                        <span>Pro chencelor</span>
                                    </div>
                                </div> <!-- singel teachers -->
                            </div>
                            <div class="col-sm-6">
                                <div class="singel-teachers mt-30 text-center">
                                    <div class="image">
                                        <img src="{{ asset('images/teachers/t-4.jpg') }}" alt="Teachers">
                                    </div>
                                    <div class="cont">
                                        <a href="teachers-singel.html">
                                            <h6>Hanna bein</h6>
                                        </a>
                                        <span>Aerobics head</span>
                                    </div>
                                </div> <!-- singel teachers -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- teachers -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== TEACHERS PART ENDS ======-->

    <!--====== TEASTIMONIAL PART START ======-->

    <section id="testimonial" class="bg_cover pt-115 pb-115" data-overlay="8"
        style="background-image: url(images/bg-2.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-40">
                        <h5>Testimonial</h5>
                        <h2>What they say</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row testimonial-slied mt-40">
                <div class="col-lg-6">
                    <div class="singel-testimonial">
                        <div class="testimonial-thum">
                            <img src="{{ asset('images/testimonial/t-1.jpg') }}" alt="Testimonial">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testimonial-cont">
                            <p>Aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed
                                odio sit amet sem nibh id elit sollicitudirem </p>
                            <h6>Rubina Helen</h6>
                            <span>Bsc, Engineering</span>
                        </div>
                    </div> <!-- singel testimonial -->
                </div>
                <div class="col-lg-6">
                    <div class="singel-testimonial">
                        <div class="testimonial-thum">
                            <img src="{{ asset('images/testimonial/t-2.jpg') }}" alt="Testimonial">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testimonial-cont">
                            <p>Aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed
                                odio sit amet sem nibh id elit sollicitudirem </p>
                            <h6>Rubina Helen</h6>
                            <span>Bsc, Engineering</span>
                        </div>
                    </div> <!-- singel testimonial -->
                </div>
                <div class="col-lg-6">
                    <div class="singel-testimonial">
                        <div class="testimonial-thum">
                            <img src="{{ asset('images/testimonial/t-3.jpg') }}" alt="Testimonial">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testimonial-cont">
                            <p>Aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed
                                odio sit amet sem nibh id elit sollicitudirem </p>
                            <h6>Rubina Helen</h6>
                            <span>Bsc, Engineering</span>
                        </div>
                    </div> <!-- singel testimonial -->
                </div>
            </div> <!-- testimonial slied -->
        </div> <!-- container -->
    </section>

    <!--====== TEASTIMONIAL PART ENDS ======--> --}}

@endsection
