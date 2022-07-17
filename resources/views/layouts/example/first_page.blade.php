@extends('layouts.header.index')
@section('content')
    <div class="container-fluid">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div style="border:1px solid; background-size:cover; border-radius: 10px; " class="carousel-item active">
                <img src="{{ asset('frontend/img/20220715_212528.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div style="background-size:cover; border-radius: 10px; " class="carousel-item">
                <img src="{{ asset('frontend/img/ainuly.jpeg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div style="background-size:cover; border-radius: 10px; " class="carousel-item">
                <img src="{{ asset('frontend/img/20220716_090759.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div style="background-size:cover; border-radius: 10px; " class="carousel-item">
                <img src="{{ asset('frontend/img/20220715_212418.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
              <div style="background-size:cover; border-radius: 10px; " class="carousel-item">
                <img src="{{ asset('frontend/img/20220716_082131.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>endd slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
{{--
<div class="w-4/5 m-auto text-left">
    <div class="sm:grid grid-cols-1 gap-10 w-4/5 mx-auto py-15 border-b border-gray-200">
        <img src="{{ asset('images/' . $post->image_path) }}" alt="">
    </div>
    <div class="py-1">

        <h1 class="text-6xl">
            {{ $post->title }}
        </h1>

    </div>

</div>

<div class="w-4/5 m-auto pt-20">
    <span class="text-gray-500">
        By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
    </span>

    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {{ $post->description }}
    </p>
</div>

@endsection  --}}

    </div>
        @php
            $post=DB::table('news')->get();
        @endphp
        @foreach ($post as $row)
        <div class="post-preview">
                <img src="{{ asset('public/post' .$row->image) }}" alt="" srcset="">
                <a href="{{URL::to('single_news/'.$row->id)}}">
                  <h2 class="post-title">
                    {{$row->title}}
                  </h2>
                  <h6 class="post-subtitle">
                   {{$row->details}}
                  </h6>
                </a>
                <p class="post-meta">Posted by
                  <a href="#">{{$row->author}}</a>
                  on September 24, 2019</p>
              </div>
              <hr>
        <!-- Pager -->
        <div class="clearfix">
            <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
          </div>
        @endforeach
@endsection
