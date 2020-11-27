@extends('inc.app', ['slider' => false])

@section('content')
    <!--====== 403 PART START ======-->

    <section id="category-part">
        <div class="container text-center my-5">
            <h2>Page Forbidden!</h2>
            <a href="{{ route('home') }}" class="main-btn mt-4">Back to Home</a>
        </div> <!-- container -->
    </section>

    <!--====== 403 PART ENDS ======-->
@endsection
