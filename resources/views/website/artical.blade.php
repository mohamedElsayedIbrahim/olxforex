@extends('layouts.app')

@section('title')
    Olxforex | Analytics
@endsection

@section('description')
Olxforex, Analytics
@endsection

@section('description')
Olxforex | Analytics for marketshre in all countries
@endsection

@section('content')
    <!-- main sec -->

    <div id="analytics">

    
        <section id="main">
            <div class="container">
                <h1 class="text-center">Our Analytics</h1>
                <div class="allcards" data-aos="fade-down" data-aos-duration="1500">
                    <div class="row">
    
                        @foreach ($articals as $artical)
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 card">
                            <img class="card-img-top" rel="{{$artical->poster}}" src="{{asset('asset/img/undraw_news_re_6uub.svg')}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{$artical->title}}</h5>
                                <p>{{$artical->created_at}}</p>
                                <p class="card-text">Some quick example text to build on the card</p>
                                <a href="{{route('articals.post',str_replace(' ', '-', $artical->title))}}" class="btn mouse-cursor-gradient-tracking">Read article</a>
                            </div>
                        </div>
                        @endforeach
    
                       
    
                    </div>
                </div>
            </div>
        </section>
        </div>
        </section>

</div>
@endsection

@section('script')
<script src="{{ asset('asset/js/main.min.js') }}"></script>
@endsection