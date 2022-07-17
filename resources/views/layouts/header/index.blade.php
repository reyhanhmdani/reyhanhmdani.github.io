<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="description" content="">
  <meta name="author" content="">

  <title>{{ $title }}</title>
  <!-- Bootstrap core CSS -->
  <link href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
  <!-- Custom fonts for this template -->
  <link href="{{ asset('frontend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <!-- Custom styles for this template -->
  <link href="{{ asset('frontend/css/clean-blog.min.css')}}" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a style="border: none; outline:none;" class="navbar-brand" href="index.html">{{ $title }}</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            @if (Route::has('login'))
            <li class="nav-item">
                    @auth
                        <a class="nav-link" href="{{ url('/home') }}">Admin Home</a>
                    @else
                    {{--  <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>  --}}
                     @endauth
            </li>
            @endif
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Profil Pondok
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" style="background: background-color:rgb(48, 48, 48); border-radius: 10px ; opacity:0.7;" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="#profilblog">Profil <span style="font-weight:800">Pondok</span></a></li>
                <li><a class="dropdown-item" href="#">Profil <span style="font-weight: 800" id="" class="">AinulYakin</span></a></li>
                <li><a class="dropdown-item" href="#">Profil <span style="font-weight: 800" id="" class="">YICS</span></a></li>
                <li><a class="dropdown-item" href="#">Profil <span style="font-weight: 800" id="" class="">Example</span></a></li>
                <li><a class="dropdown-item" href="#">Profil <span style="font-weight: 800" id="" class="">Example</span></a></li>

            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Zisway</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Blog Pondok</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Tentang Pondok</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url({{ asset('frontend/img/ainuly.jpeg')}}">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-md-16 mx-auto">
          <div class="site-heading">
            <h1 class="d-block m-auto" style="font-size:7vw; opacity:0.9;">PondokPesantren</h1>
            <span class="subheading" style="font-size: 40px ; font-weight:700; color:rgba(255, 255, 255, 0.945);">Ainul Yakin</span>
          </div>
        </div>
      </div>
    </div>
  </header>
@yield('topcontainer')
@yield('jumbotron')
  <!-- Main Content -->
  <div class="container-fluid">
    @yield('main')

  </div>
  <div class="container-fluid">

    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        @yield('content')

      </div>
    </div>
  </div>
  <hr>
@yield('containner')
<hr>
{{--  maps  --}}

<h2 style="color: rgba(14, 104, 31, 0.774) ;" class="pb-2 px-5 border-bottom"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class=" bi bi-geo-alt" viewBox="0 0 16 16">
    <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  </svg>Lokasi <span style="color: rgba(71, 82, 73, 0.699) ;"> Pondok Pesantren Ainul Yakin</span></h2>
<div style="" class="container-fluid">
    <iframe class="container-fluid shadow-sm p-3 mb-5 bg-body" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.384472538169!2d110.6367297143359!3d-8.062207994195052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7bb6dd152d1def%3A0xc94772d2275a2bff!2sPONDOK%20PESANTREN%20AINUL%20YAKIN%20SPECIAL%20CHILDREN%20GUNUNG%20SEMPU!5e0!3m2!1sid!2sid!4v1657967037925!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

  {{-- ---  --}}
  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-youtube fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">Copyright &copyadmin ainulyakin.com 2022</p>
        </div>
      </div>
    </div>
  </footer>
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('frontend/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="{{ asset('frontend/js/clean-blog.min.js')}}"></script>

</body>

</html>
