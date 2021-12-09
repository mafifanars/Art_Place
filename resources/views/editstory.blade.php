@extends('layouts.main')

@section('title')
    Tambah Cerita
@endsection

@section('container')
<div class="container">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Cerita</h1>
    </div>
    
    <div class="col-lg-8 align-items-center">
        <form method="post" action="/story/edit" class="mb-5" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="story_id" id="story_id" value="{{ $editstory->id }}">
            <input type="hidden" name="place_id" id="place_id" value="{{ $idplace }}">
            <div class="mb-3">
                <label for="title" class="form-label">Judul Cerita</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title', $editstory->title) }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="desc">Deskripsi</label>
                <textarea class="form-control @error('desc')is-invalid @enderror" name="desc" id="desc" cols="30" rows="8" placeholder="Deskripsi">{{ old('desc', $editstory->desc) }}</textarea>
                @error('desc')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror   
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Gambar</label>
                <input type="hidden" name="oldImage" value="{{ $editstory->image }}">
                @if ($editstory->image)
                    <img src="{{ asset('storage/' . $editstory->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
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
            </div>
            <button type="submit" class="badge rounded-pill bg-warning bi bi-plus-circle border-0 mb-5 px-2 py-2"> Edit</button>
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