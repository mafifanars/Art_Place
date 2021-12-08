@extends('layouts.main')

@section('title')
    Add Place
@endsection

@section('container')
<div class="container">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Museum Baru</h1>
    </div>
    {{ $place->id }}
    <div class="col-lg-8 align-items-center">
        <form method="post" action="/museum/{{ $museum->id }}" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <input type="hidden" name="place_id" id="place_id" value="{{ $place->id }}">
                <label for="name" class="form-label">Nama Museum</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name', $museum->name) }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="desc">Deskripsi</label>
                <textarea class="form-control @error('desc')is-invalid @enderror" name="desc" id="desc" cols="30" rows="8" placeholder="Deskripsi">{{ old('desc', $museum->desc) }}</textarea>
                @error('desc')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror   
            </div>
            <div class="mb-3">
                label for="image" class="form-label">Gambar</label>
                <input type="hidden" name="oldImage" value="{{ $place->image }}">
                @if ($place->image)
                    <img src="{{ asset('storage/' . $place->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                @else
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                @endif
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="badge rounded-pill bg-primary bi bi-plus-circle border-0"> Tambah</button>
        </form>
    </div>
</div>


<script>
    function previewImage(){
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