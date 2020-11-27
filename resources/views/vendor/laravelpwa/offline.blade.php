@extends('inc.app', ['slider' => false])

<title>You're Offline - Spotlight Tech</title>

@section('content')
    <!--====== OFFLINE PART START ======-->

    <section id="category-part">
        <div class="container text-center my-5">
            <h1>You're Offline</h1>
            <p>You are currently not connected to any networks.</p>
            <a href="{{ route('home') }}" class="main-btn mt-4">Retry</a>
        </div> <!-- container -->
    </section>

    <!--====== OFFLINE PART ENDS ======-->
@endsection