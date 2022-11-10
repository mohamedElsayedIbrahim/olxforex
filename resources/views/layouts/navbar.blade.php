 <!-- Navbar sec -->
 <section id="nav">
  <nav id="navlogo" class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html"><img src="{{ asset('asset/img/logo2.png') }}"></a>

      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="dropdown">
          <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-regular fa-user"></i>
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" style="user-select: none;" disabled>User Name</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="pages/login.html">sign in / sign up</a></li>
          </ul>
        </li>
      </ul>

    </div>
  </nav>

  <nav id="navitems" class="navbar navbar-expand-lg">
    <div class="container-fluid items">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent1"
        aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa-solid fa-bars-staggered"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent1">
        <ul class="navbar-nav center me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('currency') }}">Currency Change </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('education') }}">Education </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/market.html">Market</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/news.html">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/calender.html">Calender</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/accounts.html">Accounts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/corporate.html">Local Depositor HFM</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/analytics.html">Analytics</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/blogPromotion.html">blog promotion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('about') }}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('contact') }}">Contact us</a>
          </li>

      </div>
    </div>
  </nav>

</section>

