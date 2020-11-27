@extends('inc.app', ['slider' => false])

@section('content')
<!--====== PAGE BANNER PART START ======-->
    
<section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8" style="background-image: url(images/page-banner-6.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-cont">
                    <h2>Contact</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
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
                        <h5>Contact Us</h5>
                        <h2>Keep in touch</h2>
                    </div> <!-- section title -->
                    <div class="main-form pt-45">
                        <form action="{{ route('send.mail') }}" method="POST">
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
                                        <input name="subject" type="text" placeholder="Subject" required="required">
                                    </div> <!-- singel form --> 
                                </div>
                                <div class="col-md-6">
                                    <div class="singel-form form-group">
                                        <input name="phone" type="text" placeholder="Phone" required="required">
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
            <div class="col-lg-4">
                <div class="contact-address">
                    <div class="contact-heading">
                        <h5>Address</h5>
                        <p>If you have any further questions, please don’t hesitate to contact me.</p>
                    </div>
                    <ul>
                        <li>
                            <div class="singel-address">
                                <div class="icon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <div class="cont">
                                    <p>61, First floor, Anush complex, AMC road, Dindigul- 624001.</p>
                                </div>
                            </div> <!-- singel address -->
                        </li>
                        <li>
                            <div class="singel-address">
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="cont">
                                    <p><a class="text-dark" href="tel:+91 99440 54898">+91 99440 54898</a></p>
                                </div>
                            </div> <!-- singel address -->
                        </li>
                        <li>
                            <div class="singel-address">
                                <div class="icon">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <div class="cont">
                                    <p><a class="text-dark" href="mailto:spotlighttechs@gmail.com">spotlighttechs@gmail.com</a></p>
                                    <p><a class="text-dark" href="mailto:info@spotlighttechs.com">info@spotlighttechs.com</a></p>
                                </div>
                            </div> <!-- singel address -->
                        </li>
                        <li>
                            <div class="singel-address">
                                <div class="icon">
                                    <i class="fa fa-globe"></i>
                                </div>
                                <div class="cont">
                                    <p><a class="text-dark" href="https://www.spotlighttechs.com">www.spotlighttechs.com</a></p>
                                </div>
                            </div> <!-- singel address -->
                        </li>
                    </ul>
                </div> <!-- contact address -->
            
            </div>
        </div> <!-- row -->
    </div> <!-- container -->

</section>
<div class="map map-big">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3924.769144590499!2d77.98258714637835!3d10.360334910774672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b00abbf48b82de3%3A0x8d0e7d730832f725!2sSPOTLIGHT%20TECHNOLOGY!5e0!3m2!1sen!2sin!4v1606486298570!5m2!1sen!2sin" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div> <!-- map -->
<!--====== CONTACT PART ENDS ======-->
@endsection