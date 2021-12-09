@extends('layouts.main')

@section('title')
    Add Place
@endsection

@section('container')
<div class="container">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Tempat Baru</h1>
    </div>
    
    <div class="col-lg-8 align-items-center">
        <form method="post" action="/place/create" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Tempat</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="desc">Deskripsi</label>
                <textarea class="form-control @error('desc')is-invalid @enderror" name="desc" id="desc" cols="30" rows="8" placeholder="Deskripsi"></textarea>
                @error('desc')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror   
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Gambar</label>
                <img class="img-preview img-fluid mb-3 col-sm-5">
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Tipe Tempat</label>
                <select class="form-select" name="type_places">
                    @foreach ($type_places as $type)
                        @if (old('type_place_id') == $type->id)
                            <option value="{{ $type->id }}" selected>{{ $type->name }}</option>    
                        @else
                            <option value="{{ $type->id }}">{{ $type->name }}</option>    
                    @endif 
                @endforeach
                </select>
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