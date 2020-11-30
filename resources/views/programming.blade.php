@extends('inc.app', ['slider' => false])

@section('content')
<!--====== PAGE BANNER PART START ======-->
    
<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(images/page-banner-2.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-cont">
                    <h2>Program Courses</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('courses') }}">Courses</a></li>
                            <li class="breadcrumb-item active" aria-current="page">CSE/IT/EEE/ECE Courses</li>
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
                        <h3>CSE/IT/EEE/ECE Courses</h3>
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
                                    <h6>Programming </h6>
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
                                        <li class="rating">(1521 Reviws)</li>
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
                                        <p>Computer coding is the universal language of the planet. People who know how to code will be able to communicate across countries and cultures, be innovative, and solve problems more efficiently, with no barriers to impede their success. Learning programming at a young age helps your children solve everyday problems and get set up for a lifetime of opportunities. In reality, coding is getting to be a newer type of literacy. It is a skill that is useful in everyday life, especially in today’s highly digital world. For most people, having at least a basic level of skill at programming will make it easier to use a smartphone, link devices, and manage files across multiple platforms. </p>
                                        <p>The current generation of children will need to be literate in technology in order to be competitive in the future job market. Not knowing how to code will be comparable to not knowing how to read. Most jobs require the knowledge of basic IT skills, while even retail and fast food jobs require the use of technology and computers. Coding specialists are well-paid and highly sought-after on the current market, and opportunities for these skilled employees will expand in the future.</p>
                                    </div>
                                    <div class="singel-description pt-40">
                                        <h6>C</h6>
                                        <p>Although numerous computer languages are used for writing computer applications, the computer programming language, C is the most popular language worldwide. Everything from microcontrollers to operating systems is written in C since it’s very flexible and versatile, allowing maximum control with minimal commands. If you are interested in a career in computer programming, it would be wise to start by learning the C programming language</p>
                                    </div>
                                    <div class="singel-description pt-40">
                                        <h6>C++</h6>
                                        <p>C++ is known to be a very powerful language. C++ allows you to have a lot of control as to how you use computer resources, so in the right hands its speed and ability to easily use resources should be able to surpass other languages. It is often used to develop games, and desktop apps. C++’s greatest strength is how scalable it could be, so apps that are very resource intensive are usually built with it. Graphics require a lot of resource, which is why the most beautiful 3D games you happily feast your eyes on are often built with C++.</p>
                                    </div>
                                    <div class="singel-description pt-40">
                                        <h6>Python</h6>
                                        <p>Python is an interpreted, high level, general purpose programming language, which means it can be used to build just about anything, made easy with the right tools/libraries. Professionally, Python is great for backend web development, data analysis, artificial intelligence, and scientific computing. Many developers have also used Python to build productivity tools, games, and desktop apps, so there are plenty of resources to help you learn how to do those as well. Python was designed to be easy to understand and fun to use.</p>
                                    </div>
                                    <div class="singel-description pt-40">
                                        <h6>Java</h6>
                                        <p>Java is one of the most popular programming languages used to create Web applications and platforms. It was designed for flexibility, allowing developers to write code that would run on any machine, regardless of architecture or platform. According to the Java home page, more than 1 billion computers and 3 billion mobile phones worldwide run java. Java is a highly portable language as it must be executed through a cross-platform compatible Java Virtual Machine (JVM). Furthermore, Android apps are also developed using Java since the Android Operating System runs on a Java language environment.</p>
                                    </div>
                                    <div class="singel-description pt-40">
                                        <h6>Placements</h6>
                                        <p>Employment of computer programmers is projected to decline 8 percent over the next ten years. Computer programming can be done from anywhere in the world, so companies sometimes hire programmers in many countries; Programmers who have general business experience may become computer systems analysts. With experience, some programmers may become software developers. They may also be promoted to managerial positions. </p>
                                    </div>
                                    <div class="singel-description pt-40">
                                        <h6>Salary</h6>
                                        <p>Up to Rs 3 lakhs per annum (in India).</p>
                                    </div>
                                    <div class="singel-description pt-40">
                                        <h6>Job Titles</h6>
                                        <p>Software Programmer, Developer , Software Tester, System Analyst, Debugger etc.</p>
                                    </div>
                                    <div class="singel-description pt-40">
                                        <h6>Courses</h6>
                                        <ul>
                                            <li>1. C, C++, JAVA</li>
                                            <li>2. PYTHON</li>
                                            <li>3. ARTIFICIAL INTELLIGENCE</li>
                                            <li>4. MACHINE LEARNING</li>
                                            <li>5. IOT</li>
                                            <li>6. CYPER SECURITY</li>
                                            <li>7. ETHICAL HACKING</li>
                                            <li>8. AUTOCAD ELECTRICAL</li>
                                            <li>9. ETAP</li>
                                            <li>10. MATLAB</li>
                                            <li>11. EMBEDDED SYSTEMS</li>
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
                            <h4>Course </h4>
                            <br>
                            <ul>
                                <li><h4>1. C, C++, JAVA</h4></li>
                                <li><h4>2. PYTHON</h4></li>
                                <li><h4>3. ARTIFICIAL INTELLIGENCE</h4></li>
                                <li><h4>4. MACHINE LEARNING</h4></li>
                                <li><h4>5. IOT</h4></li>
                                <li><h4>6. CYPER SECURITY</h4></li>
                                <li><h4>7. ETHICAL HACKING</h4></li>
                                <li><h4>8. AUTOCAD ELECTRICAL</h4></li>
                                <li><h4>9. ETAP</h4></li>
                                <li><h4>10. MATLAB</h4></li>
                                <li><h4>11. EMBEDDED SYSTEMS</h4></li>
                                <li><i class="fa fa-clock-o"></i>Duaration : <span>0 Years</span></li>
                            </ul>
                            <div class="price-button pt-10">
                                <a href="{{ route('enquiry', ['course'=>'programming']) }}" class="main-btn">Enquire Now</a>
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
                    </div> <!-- row -->
                </div> <!-- releted courses -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== COURSES SINGEl PART ENDS ======-->
@endsection