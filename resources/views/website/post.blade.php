@extends('layouts.app')

@section('title')
    Olxforex | {{$artical->title}}
@endsection

@section('keywords')
{{$artical->keywords}}
@endsection

@section('description')
{{$artical->description}}
@endsection

@section('content')
    <!-- main sec -->

    <div id="articale">

    
            <!-- main -->
    <section id="main">
        <div class="container">
            <div class="text-center">
                <h1>{{$artical->title}}</h1>
                <p>{{$artical->created_at}}</p>
                <img src="{{asset('asset/img/2.jpg')}}" alt="olx forex analytical {{$artical->title}}">
            </div>
            <div class="mt-3">
                {!!$artical->conent!!}
            </div>
            
            <p>Article By {{$artical->auther}}</p>
        </div>
    </section>

    <!-- ads -->
    <section id="ads">
        <div class="container">
            <img src="{{asset('asset/img/3.png')}}">
        </div>
    </section>

        </div>
        </section>

</div>
@endsection

@section('script')
<script src="{{ asset('asset/js/main.min.js') }}"></script>
@endsection