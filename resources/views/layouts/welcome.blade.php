<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('frontend/img/logoainulyakin.jpeg') }}">
        <title>PonpesAinulYakin</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
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
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <!-- Navigation -->
            <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
              <div class="container">
                <img src="{{ asset('frontend/img/logoainulyakin.jpeg') }}" class="w-100" alt="">
                <a class="navbar-brand" href="index.html">{{ $title }}</a>
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
                      <ul class="dropdown-menu dropdown-menu-dark" style="background: background-color:#867e96; border-radius: 10px ; opacity:0.7;" aria-labelledby="navbarDarkDropdownMenuLink">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="post.html">Sample Post</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="contact.html">Contact</a>
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
                      <span class="subheading" style="font-size: 40px ; font-weight:700; color:rgba(255, 241, 241, 0.87);">Ainul Yakin</span>
                    </div>
                  </div>
                </div>
              </div>
            </header>

            <!-- Main Content -->
            <div class="container-fluid">
              <div class="row">

                <div class="col-lg-8 col-md-10 mx-auto">
                  @yield('content')

                </div>
              </div>
            </div>

            <hr>

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
                            <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
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
                            <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                          </span>
                        </a>
                      </li>
                    </ul>
                    <p class="copyright text-muted">Copyright &copy; Your Website 2019</p>
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
