@extends('inc.app', ['slider' => false])

<title>Service Unavailable!</title>

@section('content')
    <!--====== 503 PART START ======-->

    <section id="category-part">
        <div class="container text-center my-5">
            <h2>Service Unavailable!</h2>
            <a href="{{ route('home') }}" class="main-btn mt-4">Back to Home</a>
        </div> <!-- container -->
    </section>

    <!--====== 503 PART ENDS ======-->
@endsection
