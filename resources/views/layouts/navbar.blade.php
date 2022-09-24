
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a style="border: none; outline:none;" class="p-2 navbar-brand" href="/">Genshin Impact</a>
      <button class="navbar-toggler outline-0 mx-2 navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        {{-- <i class="fas fa-bars" style=""></i> --}}
      </button>

      {{--  Menu Main  --}}
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav px-3 ml-auto">
            @if (Route::has('login'))
            <li class="nav-item">
                    @auth
                        <a class="nav-link" href="{{ url('/dashboard') }}">Admin Home</a>
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

            <li class="nav-item">
                <a class="nav-link " href="/">Home</a>
              </li>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#characters">Characters</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#Contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
