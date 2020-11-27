@extends('inc.app', ['slider' => false])

@section('content')
    <!--====== 429 PART START ======-->

    <section id="category-part">
        <div class="container text-center my-5">
            <h2>Page Too Many Requests!</h2>
            <a href="{{ route('home') }}" class="main-btn mt-4">Back to Home</a>
        </div> <!-- container -->
    </section>

    <!--====== 429 PART ENDS ======-->
@endsection
