@extends('layouts.index')

@section('header')
<header class="masthead" style="background-image: url({{ asset('frontend/img/walpaper1.jpg')}}">

    <div class="overlay"></div>
    <div class="container">
            {{--  kosong!  --}}
      <div class="row">

        <div class="col-lg-10 col-md-16 mx-auto">
          <div class="site-heading">
            <h1 class="d-block m-auto judul" style="font-size:7vw; opacity:0.9;">HOYOVERSE</h1>
           <div class="mt-5 Read">
            <a id="login" class="text-center" href="/login">L O G I N</a>
           </div>
          </div>
        </div>
        {{-- <div class="d-block m-auto text-center site-heading">
        </div> --}}


      </div>
    </div>
  </header>
@endsection


@section('About')

<div id="about" class="container px-4 py-5">
    <h2 style="color:#FFFFFF; " id="profilblog" class="rounded p-3 m-0  mb-5 border-bottom">About Me</h2>
    <div class="d-flex justify-content-center align-items-center">
        <div class="col-lg-4 justify-content-center align-content-center" id="kepala">
          {{-- <img src="img/diluc1.webp" class="img-thumbnail rounded-circle bg-dark"> --}}
          <hr>
          <h2>Red Dead of Night </h2>
          <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
        </div>
      </div>
</div>

@endsection

@section('Characters')
<div class="container">
    <div class="row">
        <h2 id="characters" style="color:#FFFFFF; " id="profilblog" class="rounded p-3 m-0  mb-5 border-bottom">Characters</h2>
      @foreach ($posts->skip(0) as $post )
      <div class="col-3 mb-3">
        <div class="card">
          <div class="position-absolute px-2 py-2" style="background-color:rgba(0,0,0,0.7)"><a href="/posts?category={{ $post->id}}" class=" text-white text-decoration-none">{{ $post->name }}</a>
          </div>
          @if ($post->image)
             <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->name }}" class="img-fluid">
          @endif
                 <div class="card-body bg-dark" style="">
                   {{-- <h5 class="card-title">{{ $post->title }}</h5> --}}
                     {{-- <p><small class="text-muted">
                         By, <a href="/posts?author=/{{ $post->author->username }}">
                      {{ $post->author->name }}
                      </a>{{ $post->created_at->diffForHumans() }} </small>
                     </p> --}}
                    <p class="card-text">{{ $post->name }}</p>
                    <a href="/posts/{{ $post->id }}" class="btn btn-primary">Read more</a>
                 </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>


@endsection

@section('footer')

@endsection
