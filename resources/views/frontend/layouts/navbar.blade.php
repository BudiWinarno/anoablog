<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="{{ route('homepage') }}" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Anoa Indonesia</h1>
      </a>

      

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#features">Blog</a></li>
          <li><a href="#services">Portofolio</a></li>
          {{-- <li><a href="#pricing">Contact</a></li> --}}
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      {{-- <a href="{{ route('frontend.loginpage.login') }}" class="btn-getstarted">
          <i class="bi bi-box-arrow-in-right"></i> Login
      </a> --}}

      <a class="btn-getstarted" href="{{ route('login') }}">Login</a>

    </div>
  </header>