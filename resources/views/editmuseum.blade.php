
@extends('layouts.main')

@section('title')
    Edit Place
@endsection

@section('container')
<div class="container">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Museum Baru</h1>
    </div>
    <div class="col-lg-8 align-items-center">
        <form method="post" action="/museum/edit" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <input type="hidden" name="museum_id" id="museum_id" value="{{ $editmuseum->id }}">
                <input type="hidden" name="place_id" id="place_id" value="{{ $idplace }}">
                <label for="name" class="form-label">Nama Museum</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name', $editmuseum->name) }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="desc">Deskripsi</label>
                <textarea class="form-control @error('desc')is-invalid @enderror" name="desc" id="desc" cols="30" rows="8" placeholder="Deskripsi">{{ old('desc', $editmuseum->desc) }}</textarea>
                @error('desc')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror   
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Gambar</label>
                <input type="hidden" name="oldImage" value="{{ $editmuseum->image }}">
                @if ($editmuseum->image)
                    <img src="{{ asset('storage/' . $editmuseum->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
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
            <button type="submit" class="badge rounded-pill bg-warning bi bi-pencil-square border-0"> Edt</button>
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