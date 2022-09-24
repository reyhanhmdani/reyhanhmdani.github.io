@extends('layouts.index')

@section('Post')

    <div class="container-post">
        <div id="postblog" class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>
                @if ($post->image)
    <div class="" style="overflow:hidden ">
       <img width="100%" src="{{ asset('storage/' . $post->image) }}" alt="" class="img-fluid">
   </div>
    @else
    {{-- <img src="https://source.unsplash.com/random/1200×400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid"> --}}
    @endif

        <article style="font-size: 25px;" class="my-3 text-light">
            {!!  $post->body  !!}
            {{-- artinya tidak melakukan escaping --}}
            {{-- jadi kalau ada tag html sama dia di escape  --}}
        </article>
        <br>
            <a href="/#" class="text-decoration-none text-light fw-bold p-3 bg-primary d-inline rounded mt-5">Back to Post</a></p>
            </div>
        </div>
    </div>

@endsection
