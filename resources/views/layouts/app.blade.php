<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="{{ asset('asset/img/business.svg')}}" />
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{ asset('asset/css/flickity.min.css') }}" />
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <!-- font awesome -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Secular+One&display=swap" rel="stylesheet">
  <!-- AOS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <!-- main css file -->
  <link rel="stylesheet" href="{{ asset('asset/css/main.min.css') }}" />
</head>

<body class="custom-scrollbar" id="index">

  @include('layouts.navbar')

    <!-- loader sec -->
    <div id="loader">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <!-- <div class="circle"></div> -->
    </div>

  @yield('content')
  
  @include('layouts.footer')

  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
  <script>
    AOS.init();
  </script>
  <!-- Swiper JS -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      effect: "fade",
      lazy: true,
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      loop: true,
      // mousewheel: true,
      spaceBetween: 0,
      coverflowEffect: {
        modifier: 0,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },

    });
  </script>
  <!-- main js file -->
  <script src="{{ asset('asset/js/validate.min.js') }}"></script>
  <script src="{{ asset('asset/js/loader.js') }}"></script>
  <script src="{{ asset('asset/js/main.min.js') }}"></script>
</body>

</html>