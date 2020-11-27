@extends('inc.app', ['slider' => false])

@section('content')
    <!--====== 401 PART START ======-->

    <section id="category-part">
        <div class="container text-center my-5">
            <h2>Page Unauthorised!</h2>
            <a href="{{ route('home') }}" class="main-btn mt-4">Back to Home</a>
        </div> <!-- container -->
    </section>

    <!--====== 401 PART ENDS ======-->
@endsection
