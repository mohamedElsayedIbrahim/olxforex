@extends('layouts.app')

@section('title')
    Olxforex | About us
@endsection

@section('content')
   
<div id="contact">


    <!-- main sec -->
    <section id="main">
        <div class="container">
            <h1 class="text-center">Contact Us</h1>
            <div class="row center mb-3">

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <img src="{{ asset('asset/img/undraw_mobile_apps_re_3wjf.svg') }}" style="width: 100%">
                </div>

                <div class="contact-text col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    @include('snnipt.validate')
                    @include('snnipt.session')
                    <form method="POST" action="{{ route('contact.store') }}" class="g-3 needs-validation" novalidate>
                        @csrf
                        <div class="row">
                            <h2>Write your notes</h2>
                            <div class="form-group col-md-6 mt-2">
                                <label for="inputName">Full Name</label>
                                <input type="text" id="inputName" name="inputName" class="form-control" placeholder="Full Name" required>
                            </div>
                            <div class="form-group col-md-6 mt-2">
                                <label for="inputEmail">Email</label>
                                <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-2">
                            <label for="inputSubject">Subject</label>
                            <input type="text" class="form-control" name="inputSubject" id="inputSubject" placeholder="subject" required>
                        </div>
                        <div class="form-group mt-2">
                            <label for="inputAddress">Your Masssage</label>
                            <textarea class="form-control" id="inputAddress" name="inputMassage" placeholder="Message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn mt-3 blue">Submit</button>

                    </form>
                </div>
            </div>

        </div>
    </section>

    <section id="cards">
        <div class="container">
            <div class="row allcards">

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12 card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-map-marker-alt fa-sm uk-margin-small-right"></i> Address
                        </h5>
                        <p class="card-text">Alexandria, Egypt</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12 card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-envelope fa-sm uk-margin-small-right"></i> Email</h5>
                        <p class="card-text">olxforex@gmail.com</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12 card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-phone-alt fa-sm uk-margin-small-right"></i> Phone</h5>
                        <p class="card-text">01*********</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>
@endsection

@section('script')
<script src="{{ asset('asset/js/main.min.js') }}"></script>
@endsection