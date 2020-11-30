@extends('inc.app', ['slider' => false])

@section('content')
<!--====== PAGE BANNER PART START ======-->
    
<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(images/page-banner-2.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-cont">
                    <h2>Mechanical Courses</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('courses') }}">Courses</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Mechanical Courses</li>
                        </ol>
                    </nav>
                </div>  <!-- page banner cont -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== PAGE BANNER PART ENDS ======-->

<!--====== COURSES SINGEl PART START ======-->

<section id="corses-singel" class="pt-90 pb-120 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="corses-singel-left mt-30">
                    <div class="title">
                        <h3>Mechanical Courses</h3>
                    </div> <!-- title -->
                    <div class="course-terms">
                        <ul>
                            <li>
                                <div class="teacher-name">
                                    <div class="thum">
                                        <img src="{{ asset('images/favicon.png') }}" alt="Spotlight">
                                    </div>
                                    <div class="name">
                                        <span>Center</span>
                                        <h6>Spotlight Tech</h6>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="course-category">
                                    <span>Category</span>
                                    <h6>Mechanical </h6>
                                </div>
                            </li>
                            <li>
                                <div class="review">
                                    <span>Review</span>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="rating">(42 Reviws)</li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div> <!-- course terms -->
                    
                    <div class="corses-singel-image pt-50">
                        <img src="{{ asset('images/course/cu-1.png') }}" alt="Courses">
                    </div> <!-- corses singel image -->
                    
                    <div class="corses-tab mt-30">
                        <ul class="nav nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                            </li>
                        </ul>
                        
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                                <div class="overview-description">
                                    <div class="singel-description pt-40">
                                        <h6>Course Summery</h6>
                                        <p>Mechanical engineering is a broad field that encompasses industry, business, medicine and even law. Planning and designing mechanical objects is the primary focus of mechanical engineers, whether they are producing engine and motor components or complete devices like refrigerators and robots. Design programs like SPOTLIGHT TECH help mechanical engineers do their jobs by helping them create preliminary designs and spot flaws before production, saving time and resources.</p>
                                        <p>Mechanical engineers use computer-aided drafting (SPOTLIGHT TECH) software to design 2-dimensional and 3-dimensional models of mechanical devices. Mechanical SPOTLIGHT TECH software can convey many types of information’s including views, dimensions, types of material, tolerances and is essential in offering solutions to both engineering and manufacturing problems. It’s producing photo realistic animations and videos; it can simulate how a design will actually function in the real world.</p>
                                    </div>
                                    <div class="singel-description pt-40">
                                        <h6>Role in the Industry</h6>
                                        <p>Mechanical engineers can do plant layout and solid model, sheet metal, assembly design, manufacturing design such as casting, welding etc.,</p>
                                    </div>
                                    <div class="singel-description pt-40">
                                        <h6>Employment</h6>
                                        <p>Mechanical engineers are hired by many organizations which engage in various fields or sectors in India. Here we enlisted the top mechanical engineering companies in India: Thermax, Larsen & Toubro, Godrej Group, Kirloskar, TATA Group etc.,</p>
                                    </div>
                                    <div class="singel-description pt-40">
                                        <h6>Job Titles</h6>
                                        <p>Students who have completed these basic SPOTLIGHT TECH courses can apply for the jobs of Mechanical draughtsman/ Mechanical design engineer/ Design engineer (Casting)/ Design Engineer (Sheet metal)</p>
                                    </div>
                                    <div class="singel-description pt-40">
                                        <h6>Entry-level Salary</h6>
                                        <p>Upto Rs 2.25 lakh per annum (in India)</p>
                                    </div>
                                    <div class="singel-description pt-40">
                                        <h6>Courses</h6>
                                        <ul>
                                            <li>1. AUTOCAD</li>
                                            <li>2. CREO PARAMETRIC</li>
                                            <li>3. SOLIDWORKS</li>
                                            <li>4. PLASTIC MOLDING</li>
                                            <li>5. CATIA V5</li>
                                            <li>6. NX CAD</li>
                                            <li>7. NX CAM</li>
                                            <li>8. 3D PRINTING</li>
                                            <li>9. GD & T</li>
                                        </ul>
                                    </div>
                                </div> <!-- overview description -->
                            </div>
                        </div> <!-- tab content -->
                    </div>
                </div> <!-- corses singel left -->
                
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-12 col-md-6">
                        <div class="course-features mt-30">
                            <h2>Courses </h2>
                            <br>
                            <ul>
                                <li><h4>1. AUTOCAD</h4></li>
                                <li><h4>2. CREO PARAMETRIC</h4></li>
                                <li><h4>3. SOLIDWORKS</h4></li>
                                <li><h4>4. PLASTIC MOLDING</h4></li>
                                <li><h4>5. CATIA V5</h4></li>
                                <li><h4>6. NX CAD</h4></li>
                                <li><h4>7. NX CAM</h4></li>
                                <li><h4>8. 3D PRINTING</h4></li>
                                <li><h4>9. GD & T</h4></li>
                                <li><i class="fa fa-clock-o"></i>Duaration : <span>0 Years</span></li>
                            </ul>
                            <div class="price-button pt-10">
                                <a href="{{ route('enquiry', ['course'=>'mechanical']) }}" class="main-btn">Enquire Now</a>
                            </div>
                        </div> <!-- course features -->
                    </div>
                </div>
            </div>
        </div> <!-- row -->
        <div class="row">
            <div class="col-lg-8">
                <div class="releted-courses pt-95">
                    <div class="title">
                        <h3>Releted Courses</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="singel-course mt-30">
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
                        <div class="col-md-6">
                            <div class="singel-course mt-30">
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
                    </div> <!-- row -->
                </div> <!-- releted courses -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== COURSES SINGEl PART ENDS ======-->
@endsection