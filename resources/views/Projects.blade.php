@extends('layouts.main')

@section('title', 'Projects')

@section('content')

    <!-- My projects -->

    <div class="container mt-5">
        <h2>
            My Projects
        </h2>
        <div class="col-12">

            <!-- section1 -->

            <div class="my-5">
                <a class="btn btn-gray" href="pupart.html">
                    <div>
                        <h2>PupArt</h2>
                        <p>Software developer</p>
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
        @endsection
