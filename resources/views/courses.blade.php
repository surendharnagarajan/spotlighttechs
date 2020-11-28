@extends('inc.app', ['slider' => false])

@section('content')
<!--====== PAGE BANNER PART START ======-->
    
<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(images/page-banner-2.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-cont">
                    <h2>Our Courses</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Courses</li>
                        </ol>
                    </nav>
                </div>  <!-- page banner cont -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== PAGE BANNER PART ENDS ======-->

<!--====== COURSES PART START ======-->

<section id="courses-part" class="pt-120 pb-120 gray-bg">
    <div class="container">
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="courses-grid" role="tabpanel" aria-labelledby="courses-grid-tab">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="singel-course mt-30">
                            <div class="thum">
                                <div class="image">
                                    <img src="{{ asset('images/course/cu-1.jpg') }}" alt="Course">
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
                                <a href="{{ route('mechanical') }}"><h4>Mechanical Courses</h4></a>
                                <div class="course-teacher">
                                    <div class="thum">
                                        <a href="{{ route('mechanical') }}"><img src="{{ asset('images/favicon.png') }}" alt="Spotlight Tech"></a>
                                    </div>
                                    <div class="name">
                                        <a href="#"><h6>Spotlight Tech</h6></a>
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
                    <div class="col-lg-4 col-md-6">
                        <div class="singel-course mt-30">
                            <div class="thum">
                                <div class="image">
                                    <img src="{{ asset('images/course/cu-2.jpg') }}" alt="Course">
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
                                <a href="{{ route('civil') }}"><h4>Civil Courses</h4></a>
                                <div class="course-teacher">
                                    <div class="thum">
                                        <a href="{{ route('civil') }}"><img src="{{ asset('images/favicon.png') }}" alt="Spotlight Tech"></a>
                                    </div>
                                    <div class="name">
                                        <a href="#"><h6>Spotlight Tech</h6></a>
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
                    <div class="col-lg-4 col-md-6">
                        <div class="singel-course mt-30">
                            <div class="thum">
                                <div class="image">
                                    <img src="{{ asset('images/course/cu-3.jpg') }}" alt="Course">
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
                                <a href="{{ route('programming') }}"><h4>CSE/IT/EEE/ECE Courses</h4></a>
                                <div class="course-teacher">
                                    <div class="thum">
                                        <a href="{{ route('programming') }}"><img src="{{ asset('images/favicon.png') }}" alt="Spotlight Tech"></a>
                                    </div>
                                    <div class="name">
                                        <a href="#"><h6>Spotlight Tech</h6></a>
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
                </div> <!-- row -->
            </div>
        </div> <!-- tab content -->
    </div> <!-- container -->
</section>

<!--====== COURSES PART ENDS ======-->
@endsection