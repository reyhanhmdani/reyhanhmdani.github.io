@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Post</h1>
  </div>

  <div class="col-lg-8">
    <form method="post" action="/dashboard/posts/{{ $post->id }}" class="mb-5" enctype="multipart/form-data">
        {{-- actionnya di gabungkan dengan method post itu akan mengarah ke file DashboardPostController yang methodnya store udah automatis kalau kita pakai resources --}}
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="judul" class="form-label">Title</label>
          <input type="text" class="form-control @error('judul') is-invalid
          @enderror" id="judul" name="judul" required autofocus value="{{ old('judul', $post->judul) }}">
          @error('judul')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
          @enderror
        </div>
          </div>

          <div class="mb-3">
            <label for="image" class="form-label">Post Image</label>
            <input type="hidden" name="oldImage" value="{{ $post->image }}">
            {{-- input ini untuk menyimpan atau kita mau menghapus image lama --}}
            @if ($post->image)
            <img src="{{ asset('storage/' . $post->image) }}" alt="" class="img-preview img-fluid mb-3 col-sm-5 d-block">
            @else
            <img class="img-preview img-fluid mb-2 col-sm-5">
            @endif
            <input class="form-control @error('image') is-invalid  @enderror" type="file" id="image" name="image" accept="image/*" onchange="previewImage()">
            @error('image')
            <div class ="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            @error('body')
              <p class="text-danger">{{ $message }}</p>
            @enderror
                <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
                <trix-editor input="body"></trix-editor>
          </div>
        <button type="submit" class="btn btn-primary">Edit Post</button>


      </form>
  </div>


  <script>
    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })


// buat nampilin gambar
function previewImage() {
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent){
        imgPreview.src = oFREvent.target.result;
    }
    }

  </script>
@endsection
