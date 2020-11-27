@extends('inc.app', ['slider' => false])

<title>Page Not Found!</title>

@section('content')
    <!--====== 404 PART START ======-->

    <section id="category-part">
        <div class="container text-center my-5">
            <h2>Page Not Found!</h2>
            <a href="{{ route('home') }}" class="main-btn mt-4">Back to Home</a>
        </div> <!-- container -->
    </section>

    <!--====== 404 PART ENDS ======-->
@endsection
