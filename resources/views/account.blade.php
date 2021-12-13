@extends('layouts.main')

@section('title')
    Akun
@endsection

@section('container')
<!-- tab content -->
<div class="container">
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="row justify-content-start mt-4">
        <div class="d-flex justify-content-start header-title">
            <h4>Akun Saya</h4>
        </div>
                <table class="table">
                    <tbody>
                        <tr>
                            @if (Auth::user()->image)
                                <td scope="row" rowspan="4"> <img src="{{ asset('storage/'.Auth::user()->image) }}" alt="{{ asset('images/'.Auth::user()->image) }}" height="250" width="200" class="rounded float-start mb-3"></td>
                                @else
                                <td scope="row" rowspan="4"> <img src="{{ asset('img/noprofile.jpg') }}" alt="{{ asset('images/'.Auth::user()->image) }}" height="250" width="200" class="rounded float-start mb-3"></td>
                            @endif
                            <th>Nama : </th>
                            <td>{{ Auth::user()->name }}</td>
                        </tr>

                        <tr>
                            <th>Username : </th>
                            <td>{{ Auth::user()->username }}</td>
                        </tr>

                        <tr>
                            <th>Email : </th>
                            <td>{{Auth::user()->email}}</td>
                        </tr>
                    </tbody>
                </table>
    </div>
    <button type="submit" class="badge rounded-pill bg-warning bi bi-pencil-square border-0" data-bs-toggle="modal" data-bs-target="#editAkunModal"> Edit Akun</button>
</div>
  <!-- End tab content -->
<div class="modal fade" id="editAkunModal" tabindex="-1" aria-labelledby="editAkunModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title" id="editAkunModalLabel">Edit Akun</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form action="/account" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
                <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id }}">
                <label class="label" for="name">Nama</label>
                <input id="name" name="name" type="text" class="form-control @error('nama') is-invalid @enderror" placeholder="Nama" value="{{ Auth::user()->name }}" autocomplete="name" autofocus >
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label class="label" for="username">Username</label>
                <input id="username" name="username" type="texr" class="form-control @error('username') is-invalid @enderror" placeholder="username" value="{{ Auth::user()->username }}" autocomplete="username" autofocus required>
                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label class="label" for="email">E-mail</label>
                <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="email" value="{{ Auth::user()->email }}" autocomplete="email" autofocus required>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="image" class="form-label">Gambar</label>
                <input type="hidden" name="oldImage" value="">
                @if (Auth::user()->image)
                    <img src="" class="img-preview img-fluid mb-3 col-sm-5 d-block">
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
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="editAkun" class="btn btn-primary">Save</button>
    </div>
        </form>
</div>
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
    