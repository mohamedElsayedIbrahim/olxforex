@extends('layouts.app')

@section('title')
    olxforex | Home Page
@endsection

@section('content')
   <!-- main sec -->
   <div id="index">
   <section id="main">

    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        @include('snnipt.slider')
      </div>

      <div class="swiper-pagination"></div>

  </section>

  <!-- investment pioneers sec -->
  <section id="pioneers">
    <div class="container mt-5 mb-3" data-aos="fade-down" data-aos-duration="1500">
      <div class="row">
        <div class="pioneers-text col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
          <h2 class="g-theme">Investment Pioneers</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi quidem, quae voluptates corrupti eveniet
            possimus asperiores consequatur at aut dicta et aliquid repellendus sequi nostrum amet. Vel, dicta? Incidunt
            earum nesciunt beatae nobis nisi minima ex alias et quasi amet officiis, cumque pariatur numquam, adipisci
            modi
            at blanditiis corrupti fuga!</p>

          <button class="learn-more mb-3">
            <span class="circle" aria-hidden="true">
              <span class="icon arrow"></span>
            </span>
            <a class="button-text" href="#">Learn More</a>
          </button>

        </div>
        <div class="pioneers-img col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
          <img src="{{ asset('asset/img/ox.png') }}">
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
      <h2 class="g-theme">We offer courses in all financial topics</h2>
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
            <img class="card-img-top" src="{{ asset('asset/img/undraw_discount_d-4-bd.svg') }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <a href="#" class="btn mouse-cursor-gradient-tracking">Learn More</a>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 card">
            <img class="card-img-top" src="{{ asset('asset/img/undraw_credit_card_re_blml.svg') }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <a href="#" class="btn mouse-cursor-gradient-tracking">Learn More</a>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 card">
            <img class="card-img-top" src="{{ asset('asset/img/undraw_mobile_pay_re_sjb8.svg') }}" alt="Card image cap">
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

  

  <!-- reviews sec -->
  <section id="reviews">
    <div class="container">
      <h2 class="g-theme my-5">Success Partners</h2>
      <!-- Swiper -->
      <div class="swiper mySwiper1" dir="ltr"  data-aos="fade-down" data-aos-duration="1500">
        <div class="swiper-wrapper">
          @include('snnipt.brokers')
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-pagination"></div>
      </div>
    </div>

  </section>

    

</div>
@endsection

@section('script')

<script>
  let preview = 5;
    if(document.body.offsetWidth < 767){
      preview = 3
    }
    if(document.body.offsetWidth < 321){
      preview = 1
    }
    var swiper = new Swiper(".mySwiper1", {
      slidesPerView: preview,
      spaceBetween: 15,
      // centeredSlides: true,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    pagination: {
          el: ".swiper-pagination",
          clickable: true,
          },
    navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
    autoplay: {
    delay: 2000,
    disableOnInteraction: false,
          },
  });


  </script>

<script src="{{ asset('asset/js/main.min.js') }}"></script>
@endsection