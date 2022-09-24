@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row mt-2 mb-5">
        <div class="col-md-8">
            <h1 class="mb-2">{{ $post->judul }}</h1>
            <hr>

            <a class="btn btn-success" href="/dashboard/posts"><span class="mb-1" data-feather="chevron-left"></span>Back to all my posts</a>
        <a class="btn btn-warning" href="/dashboard/posts/{{ $post->id }}/edit"><span class="mb-1" data-feather="edit"></span>edit</a>
        {{-- <a class="btn btn-danger" href=""><span data-feather="x-circle"></span>Delete</a> --}}
        <form action="/dashboard/posts/{{ $post->id }}" method="post" class="d-inline">
            @method('delete')
             @csrf
             <button class="btn btn-danger" onclick="return confirm('Are You Sure?')"><span class="mb-1" data-feather="x-circle"></span>Delete</button>
         </form>


@if ($post->image)
<div class="mt-5" style="overflow:hidden ">
    <img src="{{ asset('storage/' . $post->image) }}" alt="" class="img-fluid">
</div>
@else

@endif

    <article class="my-3 fs-5">
        {!!  $post->body  !!}
        {{-- artinya tidak melakukan escaping --}}
        {{-- jadi kalau ada tag html sama dia di escape  --}}
    </article>
<a href="/posts" class="d-block mt-5">Back to Post</a></p>
        </div>
    </div>

@endsection

