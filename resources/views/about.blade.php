@extends('inc.app', ['slider' => false])

@section('content')
<!--====== PAGE BANNER PART START ======-->
    
<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(images/page-banner-1.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-cont">
                    <h2>About Us</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
                        </ol>
                    </nav>
                </div>  <!-- page banner cont -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== PAGE BANNER PART ENDS ======-->

<!--====== ABOUT PART START ======-->

<section id="about-page" class="pt-70 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-title mt-50">
                    <h5>About us</h5>
                    <h2>Welcome to Spotlight Tech </h2>
                </div> <!-- section title -->
                <div class="about-cont">
                    <p>Upon successful completion of assessment of their potentials and experiences in learnings, employment opportunities and demands in the market, the well developed and multi-designed syllabus helps candidates completing their courses successfully. It also develops skill up-gradation, building of new skills not only for existing jobs but also jobs that are to be created. Once completed and certified, they are provided placement assistance.</p>
                </div>
            </div> <!-- about cont -->
            <div class="col-lg-7">
                <div class="about-image mt-50">
                    <img src="images/about/about-2.jpg" alt="About">
                </div>  <!-- about imag -->
            </div> 
        </div> <!-- row -->
        <div class="about-items pt-60">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="about-singel-items mt-30">
                        <span>01</span>
                        <h4>Why Choose us</h4>
                        <p>Spotlight Tech is committed for satisfying the needs and expectations of all stakeholders such as Students, Parents, Employees and the Society.</p>
                    </div> <!-- about singel -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="about-singel-items mt-30">
                        <span>02</span>
                        <h4>Our Mission</h4>
                        <p>This is achieved by providing high quality education, Government Recognized Certifications, Cisco Certifications through qualified trainers and maintaining good quality culture.</p>
                    </div> <!-- about singel -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="about-singel-items mt-30">
                        <span>03</span>
                        <h4>Our vission</h4>
                        <p>Spotlight Tech is committed for Continual Improvement of quality management system and its process.</p>
                    </div> <!-- about singel -->
                </div>
            </div> <!-- row -->
        </div> <!-- about items -->
    </div> <!-- container -->
</section>

<!--====== ABOUT PART ENDS ======-->

<!--====== COUNTER PART START ======-->

<div id="counter-part" class="bg_cover pt-65 pb-110" data-overlay="8" style="background-image: url(images/bg-2.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <div class="singel-counter text-center mt-40">
                    <span><span class="counter">200</span>+</span>
                    <p>Students</p>
                </div> <!-- singel counter -->
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="singel-counter text-center mt-40">
                    <span><span class="counter">15</span>+</span>
                    <p>Courses</p>
                </div> <!-- singel counter -->
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="singel-counter text-center mt-40">
                    <span><span class="counter">150</span>+</span>
                    <p>People certifie</p>
                </div> <!-- singel counter -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</div>

<!--====== COUNTER PART ENDS ======-->

<!--====== TEACHERS PART START ======-->

<section id="teachers-part" class="pt-65 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-title mt-50 pb-35">
                    <h2>Meet Our founders</h2>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="singel-teachers mt-30 text-center">
                    <div class="image">
                        <img src="images/teachers/t-1.jpg" alt="Teachers">
                    </div>
                    <div class="cont">
                        <a href="teachers-singel.html"><h6>Mark alen</h6></a>
                        <span>Vice chencelor</span>
                    </div>
                </div> <!-- singel teachers -->
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="singel-teachers mt-30 text-center">
                    <div class="image">
                        <img src="images/teachers/t-2.jpg" alt="Teachers">
                    </div>
                    <div class="cont">
                        <a href="teachers-singel.html"><h6>Mark alen</h6></a>
                        <span>Vice chencelor</span>
                    </div>
                </div> <!-- singel teachers -->
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="singel-teachers mt-30 text-center">
                    <div class="image">
                        <img src="images/teachers/t-3.jpg" alt="Teachers">
                    </div>
                    <div class="cont">
                        <a href="teachers-singel.html"><h6>Mark alen</h6></a>
                        <span>Vice chencelor</span>
                    </div>
                </div> <!-- singel teachers -->
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="singel-teachers mt-30 text-center">
                    <div class="image">
                        <img src="images/teachers/t-4.jpg" alt="Teachers">
                    </div>
                    <div class="cont">
                        <a href="teachers-singel.html"><h6>Mark alen</h6></a>
                        <span>Vice chencelor</span>
                    </div>
                </div> <!-- singel teachers -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== TEACHERS PART ENDS ======-->

<!--====== TEASTIMONIAL PART START ======-->

<section id="testimonial" class="bg_cover pt-115 pb-120" data-overlay="8" style="background-image: url(images/bg-2.jpg)">
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
                        <img src="images/testimonial/t-1.jpg" alt="Testimonial">
                        <div class="quote">
                            <i class="fa fa-quote-right"></i>
                        </div>
                    </div>
                    <div class="testimonial-cont">
                        <p>Aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet sem nibh id elit sollicitudirem </p>
                        <h6>Rubina Helen</h6>
                        <span>Bsc, Engineering</span>
                    </div>
                </div> <!-- singel testimonial -->
            </div>
            <div class="col-lg-6">
                <div class="singel-testimonial">
                    <div class="testimonial-thum">
                        <img src="images/testimonial/t-2.jpg" alt="Testimonial">
                        <div class="quote">
                            <i class="fa fa-quote-right"></i>
                        </div>
                    </div>
                    <div class="testimonial-cont">
                        <p>Aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet sem nibh id elit sollicitudirem </p>
                        <h6>Rubina Helen</h6>
                        <span>Bsc, Engineering</span>
                    </div>
                </div> <!-- singel testimonial -->
            </div>
            <div class="col-lg-6">
                <div class="singel-testimonial">
                    <div class="testimonial-thum">
                        <img src="images/testimonial/t-3.jpg" alt="Testimonial">
                        <div class="quote">
                            <i class="fa fa-quote-right"></i>
                        </div>
                    </div>
                    <div class="testimonial-cont">
                        <p>Aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet sem nibh id elit sollicitudirem </p>
                        <h6>Rubina Helen</h6>
                        <span>Bsc, Engineering</span>
                    </div>
                </div> <!-- singel testimonial -->
            </div>
        </div> <!-- testimonial slied -->
    </div> <!-- container -->
</section>

<!--====== TEASTIMONIAL PART ENDS ======-->

@endsection