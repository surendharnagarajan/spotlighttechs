@extends('inc.app', ['slider' => false])

@section('content')
<!--====== PAGE BANNER PART START ======-->
    
<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(images/page-banner-2.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-cont">
                    <h2>Civil Courses</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('courses') }}">Courses</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Civil Courses</li>
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
                        <h3>Civil Courses</h3>
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
                                    <h6>Civil </h6>
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
                                        <li class="rating">(29 Reviws)</li>
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
                                        <p>Civil SPOTLIGHT TECH learning is an essential requirement for large construction companies as well as businesses that have SPOTLIGHT TECH software for development of civil designs and plans. SPOTLIGHT TECH course is by far the right way for any student to maximize productivity and prove their potential in the shortest time frame. The course of Civil SPOTLIGHT TECH at SPOTLIGHT TECH includes worthwhile assistance on structural design, land survey & transportation design, and building design.</p>
                                        <p>In education of structural design, it imparts skills on analyzing & calculating the rigidity, stability, and strength of structures. In the land survey and transportation, it teaches on how to conduct the land survey for determine the position of points and angles distances on the land. The segment of building design upskills an individual in planning and designing layouts of a building.</p>
                                    </div>
                                    <div class="singel-description pt-40">
                                        <h6>Role in Industries</h6>
                                        <p>Once, the student has gained a basic understanding of SPOTLIGHT TECH software; they can learn how it can be applied in the civil drafting projects. Civil SPOTLIGHT TECH professionals can also quickly come up with a finished set of drawings that includes planning, profile cross-sections, topographic maps, and subdivisions. Civil SPOTLIGHT TECH will prepare students to make use of SPOTLIGHT TECH in Building Information Modeling (BIM) for enhancing Civil Engineering Designs and Construction Documentation.</p>
                                    </div>
                                    <div class="singel-description pt-40">
                                        <h6>Employment</h6>
                                        <p>The Civil SPOTLIGHT TECH professionals can take up construction and infrastructural development projects. The town planning and others are on the rise, and therefore, demands for skilled domain specialist is high. In short, for the search of comfortable homes, better roads, and standardized living, the demand for Civil professionals will always remain on a rise.</p>
                                    </div>
                                    <div class="singel-description pt-40">
                                        <h6>Job Titles</h6>
                                        <p>Upon the completion of the course, students can apply for the jobs of Civil Engineer, Field Engineer, Construction Manager, Site Inspector & Supervisor and more.</p>
                                    </div>
                                    <div class="singel-description pt-40">
                                        <h6>Entry-level Salary</h6>
                                        <p>Up to Rs. 2 Lakh per annum (in India)</p>
                                    </div>
                                    <div class="singel-description pt-40">
                                        <h6>Courses</h6>
                                        <ul>
                                            <li>1. AUTOCAD</li>
                                            <li>2. REVIT ARCHITECTURE</li>
                                            <li>3. SKETCHUP</li>
                                            <li>4. 3DS MAX</li>
                                            <li>5. STAAD PRO</li>
                                            <li>6. ETABS</li>
                                            <li>7. MSP PPM</li>
                                            <li>8. PRIMAVERA P6</li>
                                            <li>9. LAND SURVEY</li>
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
                           <h4>Courses </h4>
                           <br>
                           <ul>
                                <li><h4>1. AUTOCAD</h4></li>
                                <li><h4>2. REVIT ARCHITECTURE</h4></li>
                                <li><h4>3. SKETCHUP</h4></li>
                                <li><h4>4. 3DS MAX</h4></li>
                                <li><h4>5. STAAD PRO</h4></li>
                                <li><h4>6. ETABS</h4></li>
                                <li><h4>7. MSP PPM</h4></li>
                                <li><h4>8. PRIMAVERA P6</h4></li>
                                <li><h4>9. LAND SURVEY</h4></li>
                                <li><i class="fa fa-clock-o"></i>Duaration : <span>0 Years</span></li>
                            </ul>
                            <div class="price-button pt-10">
                                <a href="{{ route('enquiry', ['course'=>'civil']) }}" class="main-btn">Enquire Now</a>
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