@extends('layouts.main')

@section('title')
    Tempat
@endsection

@section('container')
    <!-- Header Section -->
    <header>
        <div class="d-flex justify-content-center header-title mt-5">
            <h1>Tempat</h1>
        </div>
    </header>
    <!-- End Header Section -->

    <!-- Tabs Section -->
    <nav class="d-flex justify-content-center mt-2">
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Urutkan Berdasarkan Abjad</button>
          <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Urutkan Berdasarkan Waktu</button>
        </div>
    </nav>
      <!-- tab content -->

    <!-- Start Main -->
    <div class="container mb-4">
        <div class="row mt-4">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (Auth::check())
                @if (Auth::user()->is_admin == "1")
                        <a href="/place/create" class=""><span class="badge rounded-pill bg-primary bi bi-plus-circle"> Tambah</span></a>
                @endif
            @endif
            @foreach ($places as $place)
            <div class="col-md-3 mt-3">
                <div class="image" >
                    <div class="position-absolute px-3 py-1 text-white fs-4" style="background-color: rgba(0,0,0,0);">{{ $place->name }}</div>
                    <div class="position-absolute px-3 py-4 text-white mt-3" style="background-color: rgba(0,0,0,0);">{{ $place->category_museums()->count() }} Museum</div>
                    {{-- <div class="position-absolute px-3 py-4 text-white" style="background-color: rgba(0,0,0,0);">{{ $place->category_stories()->count() }} Cerita</div> --}}
                    @if ($place->image)
                        <div style="max-height: 350px; overflow: hidden;">
                            <a href="/place/{{ $place->id }}"><img src="{{ asset('img/'.$place->image) }}" class="rounded float-start" style="width: 250px; height: 150px;" alt="..."></a>
                        </div>
                    @else
                        <a href="/place/{{ $place->id }}"><img src="https://source.unsplash.com/1200x400?{{ $place->name }}"  class="rounded float-start" style="width: 250px; height: 150px;" alt="{{ $place->name }}" class="img-fluid mt-3"></a>
                    @endif
                    {{-- <a href="/place/{{ $place->id }}"><img src="{{ asset('img/'.$place->image) }}" class="rounded float-start" style="width: 250px; height: 150px;" alt="..."></a> --}}
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- End Main -->   
@endsection