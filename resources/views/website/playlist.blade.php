@extends('layouts.app')

@section('title')
    Olxforex | watch
@endsection

@section('content')
<div id="Videos">

    <!-- ads -->
    <section id="ads">
        <div class="container" data-aos="fade-down" data-aos-duration="1500">
            <img src="{{ asset('asset/img/3.png') }}">
        </div>
    </section>

    <!-- main -->
    <section id="main">
        <div class="row main-container mt-2">
            <div class="col-xl-3 col-lg-3 col-md-5 col-sm-12 col-12" id="mainMenu">
                <h3>playlist</h3>
                <ul class="list-group" id="listGroup">

                </ul>
            </div>

            <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12" id="mainAccordion">

            </div>

            <div class="col-xl-2 col-lg-2" id="mainAds">
                <img src="{{ asset('asset/img/51.jpg') }}">
            </div>

        </div>
    </section>

    <!-- ads -->
    <section id="ads">
        <div class="container">

        </div>
    </section>

</div>
@endsection

@section('script')
<script src="{{ asset('asset/js/videos.js') }}"></script>
@endsection