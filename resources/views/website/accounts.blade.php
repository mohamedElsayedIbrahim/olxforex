@extends('layouts.app')

@section('title')
    Olxforex | Accounts
@endsection

@section('content')
<div id="accounts">

    <!-- main sec -->
    <section id="main">
        <div class="container mt-5">
            <h1 class="text-center">Open Your Now Account For Great Investment</h1>
            <div class="AllBTN">
                <a href="" class="btn red">
                    Demo Account
                </a>
                <a href="" class="btn green">
                    Real Account
                </a>
            </div>
        </div>
    </section>

    <!-- Text sec -->
    <section id="Text">
        <div class="container mt-2">
            <h1>Lorem, ipsum dolor.</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In unde fuga id nemo sunt doloribus, ab, qui
                nesciunt laudantium cum voluptates amet perspiciatis maxime corrupti odit natus dolorum quidem eius?</p>
        </div>
        <div class="container mt-2">
            <h1>Features</h1>
            <ul>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, cumque.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, cumque.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, cumque.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, cumque.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, cumque.</li>
            </ul>
        </div>
        <div class="container mt-2">
            <h1>licenses</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel quis perspiciatis est amet temporibus ad,
                in eaque recusandae deserunt maiores aliquid rem porro incidunt soluta?</p>
        </div>
        <div class="container mt-2">
            <h1>Services provided</h1>
            <ul>
                <li>Lorem ipsum cumque.</li>
                <li>Lorem ipsum cumque.</li>
                <li>Lorem ipsum cumque.</li>
                <li>Lorem ipsum cumque.</li>
                <li>Lorem ipsum cumque.</li>
            </ul>
        </div>
    </section>

</div>
@endsection

@section('script')
<script src="{{ asset('asset/js/main.min.js') }}"></script>
@endsection