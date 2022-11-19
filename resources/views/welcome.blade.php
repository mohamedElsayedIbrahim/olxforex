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
        <div class="swiper-slide">
          <img src="{{ asset('asset/img/4.png') }}" />
          <div class="text">
            <h2>We are the investment pioneers</h2>
            <p>Start investing now</p>
            <a href="#" class="btn">Learn More</a>
          </div>
        </div>
        <div class="swiper-slide">
          <img src="{{ asset('asset/img/2.png') }}" />
          <div class="text">
            <h2>We provide economic analytics</h2>
            <p>read now</p>
            <a href="#" class="btn">Learn More</a>
          </div>
        </div>
        <div class="swiper-slide">
          <img src="{{ asset('asset/img/1.png') }}" />
          <div class="text">
            <h2>Our educational courses</h2>
            <p>watch now</p>
            <a href="#" class="btn">Learn More</a>
          </div>
        </div>
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

  <section>
    <div class="container">
      <div class="w-100 text-center">
        <h2 class="g-theme">Market Data</h2>
        <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
  {
  "width": "100%",
  "height": "400",
  "symbolsGroups": [
    {
      "name": "Indices",
      "originalName": "Indices",
      "symbols": [
        {
          "name": "FOREXCOM:SPXUSD",
          "displayName": "S&P 500"
        },
        {
          "name": "FOREXCOM:NSXUSD",
          "displayName": "US 100"
        },
        {
          "name": "FOREXCOM:DJI",
          "displayName": "Dow 30"
        },
        {
          "name": "INDEX:NKY",
          "displayName": "Nikkei 225"
        },
        {
          "name": "INDEX:DEU40",
          "displayName": "DAX Index"
        },
        {
          "name": "FOREXCOM:UKXGBP",
          "displayName": "UK 100"
        }
      ]
    },
    {
      "name": "Futures",
      "originalName": "Futures",
      "symbols": [
        {
          "name": "CME_MINI:ES1!",
          "displayName": "S&P 500"
        },
        {
          "name": "CME:6E1!",
          "displayName": "Euro"
        },
        {
          "name": "COMEX:GC1!",
          "displayName": "Gold"
        },
        {
          "name": "NYMEX:CL1!",
          "displayName": "Crude Oil"
        },
        {
          "name": "NYMEX:NG1!",
          "displayName": "Natural Gas"
        },
        {
          "name": "CBOT:ZC1!",
          "displayName": "Corn"
        }
      ]
    },
    {
      "name": "Bonds",
      "originalName": "Bonds",
      "symbols": [
        {
          "name": "CME:GE1!",
          "displayName": "Eurodollar"
        },
        {
          "name": "CBOT:ZB1!",
          "displayName": "T-Bond"
        },
        {
          "name": "CBOT:UB1!",
          "displayName": "Ultra T-Bond"
        },
        {
          "name": "EUREX:FGBL1!",
          "displayName": "Euro Bund"
        },
        {
          "name": "EUREX:FBTP1!",
          "displayName": "Euro BTP"
        },
        {
          "name": "EUREX:FGBM1!",
          "displayName": "Euro BOBL"
        }
      ]
    },
    {
      "name": "Forex",
      "originalName": "Forex",
      "symbols": [
        {
          "name": "FX:EURUSD",
          "displayName": "EUR/USD"
        },
        {
          "name": "FX:GBPUSD",
          "displayName": "GBP/USD"
        },
        {
          "name": "FX:USDJPY",
          "displayName": "USD/JPY"
        },
        {
          "name": "FX:USDCHF",
          "displayName": "USD/CHF"
        },
        {
          "name": "FX:AUDUSD",
          "displayName": "AUD/USD"
        },
        {
          "name": "FX:USDCAD",
          "displayName": "USD/CAD"
        }
      ]
    }
  ],
  "showSymbolLogo": true,
  "colorTheme": "light",
  "isTransparent": false,
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->
      </div>
    </div>
  </section>

    <!-- reviews sec -->
    <section id="reviews" class="my-5">
      <div class="container">
        <h2 class="g-theme text-center">Success Partners</h2>
        <!-- Swiper -->
        <div class="swiper mySwiper1" dir="ltr"  data-aos="fade-down" data-aos-duration="1500">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="{{ asset('asset/img/1.jpg') }}" />
            </div>
            <div class="swiper-slide">
              <img src="{{ asset('asset/img/1.jpg') }}" />
            </div>
            <div class="swiper-slide">
              <img src="{{ asset('asset/img/1.jpg') }}" />
            </div>
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
  var swiper = new Swiper(".mySwiper1", {
    effect: "coverflow",
    lazy: true,
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    loop: true,
    // mousewheel: true,
    spaceBetween: 10,
    coverflowEffect: {
      modifier: 8,   
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
    delay: 3500,
    disableOnInteraction: false,
          },
  });
  </script>

<script src="{{ asset('asset/js/main.min.js') }}"></script>
@endsection