@extends('layouts.main')

@section('title', 'Home')

@section('content')
<!-- Some info update -->
    <!-- main -->
    <div class="container">
        <main class="d-block d-lg-flex text-center">
            <!-- section1 -->
            <div class="mt-5 col-12 col-lg-6">
                <h1 class="fs-2 lead mt-5 mainT">
                    Hi!👋 I am Mohammad Sadati.
                </h1>
                <p class="fs-1 fw-bold">
                    A <span class="span1">Software Developer</span> <br>
                    from Gonbad-e Kavus.
                </p>
                <div>
                    <a class="btn btn-purple col-12 col-md-5 mb-2" href="/Aboutme">Contact me</a>
                    <a class="btn btn-gray col-12 col-md-5 mb-2" href="/Projects">view porfolio</a>
                </div>
            </div>
            <!-- section2 -->
            <div class="col-12 col-lg-6">
                <div class="img-responsive shadow" style="border-radius: 50%; width: 500px; height: 500px">
                    <img class="" style="margin:10%" src="/assets/avatar.png" alt="Avatar">
                </div>
            </div>
        </main>
    </div>

    <!-- My skills -->

    <div class="container mt-5">
        <h2 class="text-center">
            My Skills
        </h2>
        <div class="d-lg-flex flex-wrap mt-3">
            <div class="col-lg-4 text-center mb-5">
                <img class="img-responsive2" src="/assets/html.png" alt="logo">
                <h4>HTML5</h4>
                
            </div>
            <div class="col-lg-4 text-center mb-5">
                <img class="img-responsive2" src="/assets/css.png" alt="logo">
                <h4>CSS</h4>
                
            </div>
            <div class="col-lg-4 text-center mb-5">
                <img class="img-responsive2" src="/assets/js.png" alt="logo">
                <h4>javascript</h4>
                
            </div>
            <div class="col-lg-4 text-center mb-5">
                <img class="img-responsive2" src="/assets/bootstrap.png" alt="logo">
                <h4>bootstrap</h4>
                
            </div>
            <div class="col-lg-4 text-center mb-5">
                <img class="img-responsive2" src="/assets/php.png" alt="logo">
                <h4>php</h4>
                
            </div>
            <div class="col-lg-4 text-center mb-5">
                <img class="img-responsive2" src="/assets/laravel.png" alt="logo">
                <h4>laravel</h4>
                
            </div>
        </div>
    </div>

    <!-- My projects -->

    <div class="container mt-5">
        <h2 class="text-center">
            My Projects
        </h2>
        <div class="col-12">

            <!-- section1 -->

            <div class="my-5 ">
                <a class="btn btn-gray" href="pupart.html">
                    <div>
                        <h2>PupArt</h2>
                        <p>Software Developer</p>
                    </div>
                    <div class="text-center">
                        <img class="img-myP" src="/assets/pupart.PNG" alt="Pupart">
                    </div>
                </a>
            </div>

            <!-- section2 -->

            <div class="my-5">
                <a class="btn btn-purple" href="klteam.html">
                    <div>
                        <h2>KLTEAM</h2>
                        <p>Software Developer</p>
                    </div>
                    <div class="text-center">
                        <img class="img-myP" src="/assets/KLteam.PNG" alt="KLteam">
                    </div>
                </a>
            </div>

            <!-- section3 -->

            <div class="text-center">
                <a class="btn btn-purple" href="/Projects">View more</a>
            </div>
        </div>

    </div>


@endsection
