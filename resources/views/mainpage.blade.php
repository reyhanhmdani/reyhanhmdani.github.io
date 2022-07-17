@extends('layouts.header.index')
@section('jumbotron')
<div id="profilblog" style="overflow: hidden" class="resp-jumbotron p-5 mb-5 bg-light shadow-sm p-3 mb-5 bg-body rounded">
    <main>
        <h1 class="visually-hidden">Profil Pondok Pesantren</h1>
        <div class="container px-4 py-5" id="featured-3">
         <h2 style="color: rgb(56, 55, 55) ;" class="pb-2 border-bottom">Profil Pondok Pesantren</h2>
         <div class="row g-5 py-5 row-cols-1 row-cols-lg-3">
            <div class="shadow-sm p-3 mb-5 bg-body rounded feature col-2">
             <h2><span style="color: rgb(56, 55, 55) ;" class="d-block">Ainul Yakin</span></h2>
                 <p>Paragraph of text beneath the heading to explain the heading Well add onto it with another sentence and probably just keep going until we run out of words.</p>
                 <a href="#" class="icon-link d-inline-flex outline-none text-decoration-none align-items-center">
                  Lanjut Baca
             </a>
         </div>
         {{--    --}}
         <div class="shadow-sm p-3 mb-5 bg-body rounded feature col-2">
         <h2 class="" style="color: rgb(56, 55, 55) ;">YISC</h2>
             <p>Paragraph of text beneath the heading to explain the heading Well add onto it with another sentence and probably just keep going until we run out of words.</p>
             <a  href="#" class="icon-link d-inline-flex outline-none text-decoration-none align-items-center">
              Lanjut Baca
         </a>
     </div>
     <div class="shadow-sm p-3 mb-5 bg-body rounded feature col-2">
     <h2 class="" style="color: rgb(56, 55, 55) ;">Featured title</h2>
         <p>Paragraph of text beneath the heading to explain the heading Well add onto it with another sentence and probably just keep going until we run out of words.</p>
         <a  href="#" class="icon-link d-inline-flex outline-none text-decoration-none align-items-center">
          Lanjut baca
     </a>
 </div>
 <div class="shadow-sm p-3 mb-5 bg-body rounded feature col-2">
 <h2 class="" style="color: rgb(56, 55, 55) ;">Featured title</h2>
     <p>Paragraph of text beneath the heading to explain the heading Well add onto it with another sentence and probably just keep going until we run out of words.</p>
     <a  href="#" class="icon-link d-inline-flex outline-none text-decoration-none align-items-center">
      Lanjut baca
 </a>
</div>
<div class="shadow-sm p-3 mb-5 bg-body rounded feature col-2">
 <h2 class="" style="color: rgb(56, 55, 55) ;">Featured title</h2>
     <p>Paragraph of text beneath the heading to explain the heading Well add onto it with another sentence and probably just keep going until we run out of words.</p>
     <a  href="#" class="icon-link d-inline-flex outline-none text-decoration-none align-items-center">
      Lanjut baca
 </a>
</div>
<div class="shadow-sm p-3 mb-5 bg-body rounded feature col-2">
 <h2 class="" style="color: rgb(56, 55, 55) ;">Featured title</h2>
     <p>Paragraph of text beneath the heading to explain the heading Well add onto it with another sentence and probably just keep going until we run out of words.</p>
     <a  href="#" class="icon-link d-inline-flex outline-none text-decoration-none align-items-center">
      Lanjut baca
 </a>
</div>
<div class="shadow-sm p-3 mb-5 bg-body rounded feature col-2">
 <h2 class="" style="color: rgb(56, 55, 55) ;">Featured title</h2>
     <p>Paragraph of text beneath the heading to explain the heading Well add onto it with another sentence and probably just keep going until we run out of words.</p>
     <a  href="#" class="icon-link d-inline-flex outline-none text-decoration-none align-items-center">
      Lanjut baca
 </a>
</div>
<div class="shadow-sm p-3 mb-5 bg-body rounded feature col-2">
 <h2 class="" style="color: rgb(56, 55, 55) ;">Featured title</h2>
     <p>Paragraph of text beneath the heading to explain the heading Well add onto it with another sentence and probably just keep going until we run out of words.</p>
     <a  href="#" class="icon-link d-inline-flex outline-none text-decoration-none align-items-center">
      Lanjut baca
 </a>
</div>
<div class="shadow-sm p-3 mb-5 bg-body rounded feature col-2">
 <h2 class="" style="color: rgb(56, 55, 55) ;">Featured title</h2>
     <p>Paragraph of text beneath the heading to explain the heading Well add onto it with another sentence and probably just keep going until we run out of words.</p>
     <a  href="#" class="icon-link d-inline-flex outline-none text-decoration-none align-items-center">
      Lanjut baca
 </a>
</div>
</div>
</div>
</main>
</div>
@endsection
@section('topcontainer')
<div class="row featurette mb-5 m-auto">
    <div class="col-md-7">
      <h2 class="px-5 mt-5 featurette-heading fw-bold lh-5" style="color: rgb(48, 48, 48);"> Pemimpin Pondok Pesantren <span class="d-block px-3" style="font-size:40px; font-weight:700; color:rgb(35, 62, 88);">AinulYakin</span> <span class="px-3" style="color: rgb(134, 63, 34); font-weight:700;">AbiGuru <span class="" style="font-size: 20px; color:rgb(199, 87, 43); text-shadow:3px 2px 5px rgba(0, 0, 0, 0.226)">Muhidin Isma Almatin ps.ps </span> </span></h2>
      <p class="px-5 lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
    </div>
    <div class="col-md-4">
      {{--  <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>  --}}
        <img style="border-radius: 10px" class="w-auto b-cover bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto " width="500" height="400" src="{{ asset('frontend/img/abiguru.jpg') }}"  alt="" srcset="">
    </div>
  </div>

@endsection
@section('main')
<pdiv class="container-fluid mb-5" style="display: flex; justify-content:center; ">
    <div class="row align-items-start">
      <div class="col">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('frontend/img/20220716_082131.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content</p>
              <a href="#" style="border-radius: 10px; background-color:rgb(78, 129, 131); color:white;" class="btn ">Go somewhere</a>
            </div>
          </div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('frontend/img/20220716_090759.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content</p>
              <a href="#" style="border-radius: 10px; background-color:rgb(78, 129, 131); color:white;" class="btn">Go somewhere</a>
            </div>
          </div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('frontend/img/20220715_212418.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content</p>
              <a href="#" style="border-radius: 10px; background-color:rgb(78, 129, 131); color:white;" class="btn">Go somewhere</a>
            </div>
          </div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('frontend/img/20220716_090917.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content</p>
              <a href="#" style="border-radius: 10px; background-color:rgb(78, 129, 131); color:white;" class="btn">Go somewhere</a>
            </div>
          </div>
      </div>
    </div>
@endsection
@section('content')
@section('containner')

@endsection
{{--
    <div class="container">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div style=" background-size:cover; border-radius: 10px; " class="carousel-item active">
                <img src="{{ asset('frontend/img/20220715_212528.jpg') }}" class="d-block w-100" alt="...">
                <div style="background-color:rgba(31, 36, 36, 0.432);"  class="carousel-caption d-none d-md-block">
                  <h4>Pemimpin PonpesAinulYakin</h4>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div style="background-size:cover; border-radius: 10px; " class="carousel-item">
                <img src="{{ asset('frontend/img/20220716_090917.jpg') }}" class="d-block w-100" alt="...">
                <div style="background-color:rgba(31, 36, 36, 0.432);" class=" carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div style="background-size:cover; border-radius: 10px; " class="carousel-item">
                <img src="{{ asset('frontend/img/ainuly.jpeg') }}" class="d-block w-100" alt="...">
                <div style="background-color:rgba(31, 36, 36, 0.432);"  class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div style="background-size:cover; border-radius: 10px; " class="carousel-item">
                <img src="{{ asset('frontend/img/20220716_082131.jpg') }}" class="d-block w-100" alt="...">
                <div style="background-color:rgba(31, 36, 36, 0.432);"  class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
              <div style="background-size:cover; border-radius: 10px; " class="carousel-item">
                <img src="{{ asset('frontend/img/20220716_090759.jpg') }}" class="d-block w-100" alt="...">
                <div style="background-color:rgba(31, 36, 36, 0.432);"  class="carousel-caption d-none d-md-block">
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
          </div>  --}}
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

{{--
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
        @endforeach  --}}
@endsection
