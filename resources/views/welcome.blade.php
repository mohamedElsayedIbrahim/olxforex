@extends('layouts.app')

@section('title')
    olxforex | Home Page
@endsection

@section('content')
      <!-- main sec -->
  <section id="main">
    <div class="container" data-aos="fade-down" data-aos-duration="1500">
      <h1>We are creating a future for investors</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi quidem, quae voluptates corrupti eveniet
        possimus asperiores consequatur at aut dicta et aliquid repellendus sequi nostrum amet. Vel, dicta? Incidunt
        earum nesciunt beatae nobis nisi minima ex alias et quasi amet officiis, cumque pariatur numquam, adipisci modi
        at blanditiis corrupti fuga!</p>
    </div>
  </section>

  <!-- investment pioneers sec -->
  <section id="pioneers">
    <div class="container mt-5 mb-3" data-aos="fade-down" data-aos-duration="1500">
      <div class="row">
        <div class="pioneers-text col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
          <h1>Investment Pioneers</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi quidem, quae voluptates corrupti eveniet
            possimus asperiores consequatur at aut dicta et aliquid repellendus sequi nostrum amet. Vel, dicta? Incidunt
            earum nesciunt beatae nobis nisi minima ex alias et quasi amet officiis, cumque pariatur numquam, adipisci
            modi
            at blanditiis corrupti fuga!</p>

          <button class="learn-more mb-3">
            <span class="circle" aria-hidden="true">
              <span class="icon arrow"></span>
            </span>
            <a class="button-text" href="#" >Learn More</a>
          </button>
          
        </div>
        <div class="pioneers-img col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
          <img src="{{ asset('asset/img/undraw_investing_re_bov7.svg')}}">
        </div>
      </div>
    </div>
  </section>

  <!-- ads -->
  <section id="ads">
    <div class="container" data-aos="fade-down" data-aos-duration="1500">
      <img src="{{ asset('asset/img/3.png') }}">
    </div>
  </section>

  <!-- Courses sec -->
  <section id="courses">
    <div class="container mt-5 mb-3">
      <h1>We offer courses in all financial topics</h1>
      <div class="allcards" data-aos="fade-down" data-aos-duration="1500">
        <div class="row">

          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 card">
            <img class="card-img-top" src="{{ asset('asset/img/undraw_finance_re_gnv2.svg') }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <a href="#" class="btn mouse-cursor-gradient-tracking">Learn More</a>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 card">
            <img class="card-img-top" src="{{ asset('asset/img/undraw_vault_re_s4my.svg') }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <a href="#" class="btn mouse-cursor-gradient-tracking">Learn More</a>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 card">
            <img class="card-img-top" src="{{ asset('asset/img/undraw_discount_d-4-bd.svg')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <a href="#" class="btn mouse-cursor-gradient-tracking">Learn More</a>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 card">
            <img class="card-img-top" src="{{ asset('asset/img/undraw_credit_card_re_blml.svg')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <a href="#" class="btn mouse-cursor-gradient-tracking">Learn More</a>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 card">
            <img class="card-img-top" src="{{ asset('asset/img/undraw_mobile_pay_re_sjb8.svg')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <a href="#" class="btn mouse-cursor-gradient-tracking">Learn More</a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
@endsection