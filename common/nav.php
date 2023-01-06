<?php
$current_url = substr($_SERVER['REQUEST_URI'], 19);
?>
<style type="text/css">
  .active {
    font-weight: 800 !important;
  }
</style>
<!-- MAIN HEADER -->
<style>
  @media only screen and (max-width: 600px) {

    .p-1,
    .p-2,
    .p-3,
    .p-4,
    .p-5,
    .px-1,
    .px-2,
    .px-3,
    .px-4,
    .px-5 {
      padding: 20px 15px !important;
    }

    h1 {
      font-size: 30px !important;
      font-weight: 600 !important;
    }

    h2 {
      font-size: 18px !important;
    }

    h3 {
      font-size: 15px !important;
    }

    h4 {
      font-size: 14px !important;
    }

    h5 {
      font-size: 13px !important;
    }

    h6 {
      font-size: 16px !important;
    }

    p {
      font-size: 16px !important;
    }

    .navbar-brand img {
      width: 190px !important;
    }
  }

  .navbar {
    transition: 100ms ease-in-out;
  }

  .navbar-scrolled {
    background-color: #fff;
    box-shadow: 0px 7px 11px 2px #0000000a;
  }

  @media only screen and (max-width: 600px) {
    .navbar.navbar-expand-sm.fixed-top  {
      background-color: #fff !important;
    }
  }

</style>
<nav class="navbar navbar-expand-sm fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="assets/logo1.png" height="70px" /></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
      <ul class="navbar-nav  align-items-sm-center">
        <li class="nav-item">
          <a class="nav-link active" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">E-book</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Ghostwriting</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Story Writing</a></li>
            <li><a class="dropdown-item" href="#">Memoir Writing</a></li>
            <li><a class="dropdown-item" href="#">Fiction Writing</a></li>
            <li><a class="dropdown-item" href="#">Non-Fiction Writing</a></li>
            <li><a class="dropdown-item" href="#">Biography Writing</a></li>
            <li><a class="dropdown-item" href="#">Autobiograpy Writing</a></li>
            <li><a class="dropdown-item" href="#">Script Writing</a></li>
            <li><a class="dropdown-item" href="#">Novel Writing</a></li>
            <li><a class="dropdown-item" href="#">Comic Book Writing</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Editing Publishing</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Book Editing</a></li>
            <li><a class="dropdown-item" href="#">Book Editing </a></li>
            <li><a class="dropdown-item" href="#">Book Editing </a></li>
            <li><a class="dropdown-item" href="#">Amazon Editing </a></li>
            <li><a class="dropdown-item" href="#">Book Editing </a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Content Writing</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Article Writing</a></li>
            <li><a class="dropdown-item" href="#">Blog Writing </a></li>
            <li><a class="dropdown-item" href="#"> Writing </a></li>
            <li><a class="dropdown-item" href="#">Web Writing </a></li>
            <li><a class="dropdown-item" href="#">SEO Writing </a></li>
            <li><a class="dropdown-item" href="#">Resume Writing </a></li>
            <li><a class="dropdown-item" href="#">Press Release Writing </a></li>
          </ul>
        </li>


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Other Services</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Book Cover Design</a></li>
            <li><a class="dropdown-item" href="#">Audio Book</a></li>
            <li><a class="dropdown-item" href="#">Video Book Trailer </a></li>
            <li><a class="dropdown-item" href="#">Web Writing </a></li>
            <li><a class="dropdown-item" href="#">Author Web Design</a></li>
            <li><a class="dropdown-item" href="#">Book Marketing</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link nav-cta-btn" href="#">Get Started</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<script>
  const navEl = document.querySelector('.navbar');
  window.addEventListener('scroll', () => {
    if (window.scrollY >= 56) {
      navEl.classList.add('navbar-scrolled');
    } else if (window.scrollY < 56) {
      navEl.classList.remove('navbar-scrolled');
    }
  });
</script>