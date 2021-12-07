@extends('layouts.main')

@section('title')
    {{ $museum->name }}
@endsection

@section('container')

    <div class="container mt-3">
        <div class="card mb-3">
            <img src="{{ $museum->image }}" class="img-fluid rounded" style="height: 350px" alt="...">
        </div>

        <div>
            <p class="text-center fs-3">{{ $museum->name }}</p>
        </div>

        <div class="jumbotron jumbotron-fluid rounded mb-4">
            <div class="container">
              <p class="text-center">{{ $museum->desc }}.</p>
            </div>
        </div>

        <!-- Start Museum -->
        <div class="container mb-5">
            <p class="fs-4 mt-3">{{ $count }} Museum Lainnya</p>
            <div class="row mt-2">
                @if (Auth::check())
                    @if (Auth::user()->is_admin == "1")
                            <a href="" class=""><span class="badge rounded-pill bg-primary bi bi-plus-circle"> Tambah</span></a>
                    @endif
                @endif
                @foreach ($museums as $museum)
                    <div class="col-md-3 mt-3">
                        <div class="image" >
                            <div class="position-absolute px-3 py-1 text-white" style="background-color: rgba(0,0,0,0);">{{ $museum->museum->name }}</div>
                            <a href="{{ url('/museum/'.$museum->museum_id.'/'.$museum->place_id) }}"><img src="{{ $museum->museum->image }}" class="rounded float-start" style="width: 250px; height: 150px;" alt="..."></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- End Museum -->      
    </div>
@endsection