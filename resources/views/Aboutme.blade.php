@extends('layouts.main')

@section('title', 'About-me')
@section('content')

    <!-- main -->

    <div class="container">
        <div class="d-lg-flex about-info">
            <div class="col-12 col-lg-6">
                <img class="img-info2" src="/assets/avatar.png" alt="Mohammad Sadati">
            </div>
            <div class="align-self-center mx-2 text-white text-center">
                <h3>
                    Mohammad Sadati
                </h3>
                <h4>
                    Web Developer <br>
                    Gonbad-e Kavus <br>
                    1998/04/04
                </h4>
                <div>
                    <a href="#"><i class="fa fa-linkedin mx-2 text-dark fs-2 text-white"></i></a>
                    <a href="https://instagram.com/mammad_sadati?utm_source=qr&igshid=MzNlNGNkZWQ4Mg%3D%3D"><i
                            class="fa fa-instagram mx-2 text-dark fs-2 text-white"></i></a>
                    <a href="https://t.me/mammad_sadati"><i class="fa fa-telegram mx-2 text-dark fs-2 text-white"></i></a>
                </div>
            </div>
        </div>
    </div>

@endsection
