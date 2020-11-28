@extends('inc.app', ['slider' => false])

@section('content')
<!--====== PAGE BANNER PART START ======-->
    
<section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8" style="background-image: url(images/page-banner-6.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-cont">
                    <h2>Course Enquiry</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Course Enquiry</li>
                        </ol>
                    </nav>
                </div>  <!-- page banner cont -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== PAGE BANNER PART ENDS ======-->

<!--====== CONTACT PART START ======-->

<section id="contact-page" class="pt-90 pb-120 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="contact-from">
                    <div class="section-title">
                        <h5>Course Enquiry</h5>
                    </div> <!-- section title -->
                    <div class="main-form pt-45">
                        <form action="{{ route('enquiry.mail') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="singel-form form-group">
                                        <input name="name" type="text" placeholder="Your name" required="required">
                                    </div> <!-- singel form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="singel-form form-group">
                                        <input name="email" type="email" placeholder="Email" required="required">
                                    </div> <!-- singel form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="singel-form form-group">
                                        <input name="phone" type="text" placeholder="Phone" required="required">
                                    </div> <!-- singel form -->
                                </div>
                                <div class="col-md-12">
                                    <div class="singel-form form-group">
                                        <select id="course" name="course" placeholder="Courses" required="required">
                                            <option>Courses</option>
                                            @if ($course == 'mechanical')
                                            <option value="AUTOCAD">AUTOCAD</option>
                                            <option value="CREO PARAMETRIC">CREO PARAMETRIC</option>
                                            <option value="SOLIDWORKS">SOLIDWORKS</option>
                                            <option value="PLASTIC MOLDING">PLASTIC MOLDING</option>
                                            <option value="CATIA V5">CATIA V5</option>
                                            <option value="NX CAD">NX CAD</option>
                                            <option value="NX CAM">NX CAM</option>
                                            <option value="3D PRINTING">3D PRINTING</option>
                                            <option value="GD & T">GD & T</option>
                                            @endif
                                            @if ($course == 'civil')
                                            <option value="AUTOCAD">AUTOCAD</option>
                                            <option value="REVIT ARCHITECTURE">REVIT ARCHITECTURE</option>
                                            <option value="SKETCHUP">SKETCHUP</option>
                                            <option value="3DS MAX">3DS MAX</option>
                                            <option value="STAAD PRO">STAAD PRO</option>
                                            <option value="ETABS">ETABS</option>
                                            <option value="MSP PPM">MSP PPM</option>
                                            <option value="PRIMAVERA P6">PRIMAVERA P6</option>
                                            <option value="LAND SURVEY">LAND SURVEY</option>
                                            @endif
                                            @if ($course == 'programming')
                                            <option value="C, C++, JAVA">C, C++, JAVA</option>
                                            <option value="PYTHON">PYTHON</option>
                                            <option value="ARTIFICIAL INTELLIGENCE">ARTIFICIAL INTELLIGENCE</option>
                                            <option value="MACHINE LEARNING">MACHINE LEARNING</option>
                                            <option value="IOT">IOT</option>
                                            <option value="CYPER SECURITY">CYPER SECURITY</option>
                                            <option value="ETHICAL HACKING">ETHICAL HACKING</option>
                                            <option value="AUTOCAD ELECTRICAL">AUTOCAD ELECTRICAL</option>
                                            <option value="ETAP">ETAP</option>
                                            <option value="MATLAB">MATLAB</option>
                                            <option value="EMBEDDED SYSTEMS">EMBEDDED SYSTEMS</option>
                                            @endif
                                        </select>
                                    </div> <!-- singel form -->
                                </div>
                                <div class="col-md-12">
                                    <div class="singel-form form-group">
                                        <textarea name="message" placeholder="Message" required="required"></textarea>
                                    </div> <!-- singel form -->
                                </div>
                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="singel-form">
                                        <button type="submit" class="main-btn">Send</button>
                                    </div> <!-- singel form -->
                                </div> 
                            </div> <!-- row -->
                        </form>
                    </div> <!-- main form -->
                </div> <!--  contact from -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->

</section>
<div class="map map-big">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3924.769144590499!2d77.98258714637835!3d10.360334910774672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b00abbf48b82de3%3A0x8d0e7d730832f725!2sSPOTLIGHT%20TECHNOLOGY!5e0!3m2!1sen!2sin!4v1606486298570!5m2!1sen!2sin" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div> <!-- map -->
<!--====== CONTACT PART ENDS ======-->
@endsection