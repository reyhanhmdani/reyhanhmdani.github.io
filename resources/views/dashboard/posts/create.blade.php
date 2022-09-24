@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Blog</h1>
  </div>

  <div class="col-lg-8">
    <form method="post" action="/dashboard/posts" class="mb-5" enctype="multipart/form-data">
        {{-- enctype ini harus ada kalau ingin nanti menggunakan upload file/gambar // Sehingga form ini menangani 2 hal yang pertama semua inputan dalam bentuk text akan di ambil dengan request biasa , yang kedua kalau ada file akan di ambil dengan request file // kalau gak ini file kita tidak akan bisa di upload --}}
        {{-- actionnya di gabungkan dengan method post itu akan mengarah ke file DashboardPostController yang methodnya store udah automatis kalau kita pakai resources --}}
        @csrf
        <div class="mb-3">
          <label for="judul" class="form-label">Title</label>
          <input type="text" class="form-control @error('judul') is-invalid
          @enderror" id="judul" name="judul" required autofocus value="{{ old('judul') }}">
          @error('judul')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
          @enderror
        </div>
          <div class="mb-3">
            <label for="image" class="form-label">Choose Image</label>
            <img class="img-preview img-fluid mt-2 mb-3 col-sm-4">
            <input class="form-control @error('image') is-invalid  @enderror" type="file" id="image" name="image" accept="image/*" onchange="previewImage()">
            @error('image')
            <div class ="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>

            <label class="mt-2" for="body" class="form-label">Body</label>
            @error('body')
              <p class="text-danger">{{ $message }}</p>
            @enderror
                <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                <trix-editor input="body"></trix-editor>

        <button type="submit" class="btn btn-primary" style="margin-top: 10px">Create Post</button>
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
