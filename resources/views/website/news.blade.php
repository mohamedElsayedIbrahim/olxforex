@extends('layouts.app')

@section('title')
    Olxforex | News
@endsection

@section('content')
<div id="news">

        <!-- main -->
        <section id="main">
            <div class="container">
                <div class="row main-container">
                    <div id="loading">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
        </section>

</div>
@endsection

@section('script')
<script src="{{ asset('asset/js/main.min.js') }}"></script>
<script src="{{ asset('asset/js/news.js') }}"></script>
@endsection