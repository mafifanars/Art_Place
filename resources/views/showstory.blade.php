@extends('layouts.main')

@section('title')
    {{ $story->title }}
@endsection

@section('container')

    <div class="container mt-3">
        <div class="card mb-3">
            <img src="{{ $story->image }}" class="img-fluid rounded" style="height: 350px" alt="...">
        </div>

        <div>
            <p class="text-center fs-3">{{ $story->title }}</p>
        </div>

        <div class="jumbotron jumbotron-fluid rounded mb-4">
            <div class="container">
              <p class="text-center">{{ $story->desc }}</p>
            </div>
        </div>

        <!-- Start other Story -->
        <div class="container mb-5">
            <p class="fs-4 mt-3">{{ $count }} Cerita Lainnya</p>
            <div class="row mt-2">
                @if (Auth::check())
                    @if (Auth::user()->is_admin == "1")
                            <a href="" class=""><span class="badge rounded-pill bg-primary bi bi-plus-circle"> Tambah</span></a>
                    @endif
                @endif
                @foreach ($stories as $story)
                    <div class="col-md-3 mt-3">
                        <div class="image" >
                            <div class="position-absolute px-3 py-1 text-white" style="background-color: rgba(0,0,0,0);">{{ $story->story->name }}</div>
                            <a href="{{ url('/story/'.$story->story_id.'/'.$story->place_id) }}"><img src="{{ $story->story->image }}" class="rounded float-start" style="width: 250px; height: 150px;" alt="..."></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- End other Story -->  
        
        <!-- Start Other Places -->
        <div class="container mb-5">
            <p class="fs-4 mt-3">Tempat Lainnya</p>
            <div class="row mt-2">
                @foreach ($allplace as $place)
                <div class="col-md-3 mt-3">
                    <div class="image">
                        <div class="position-absolute px-3 py-1 text-white fs-4" style="background-color: rgba(0,0,0,0);">{{ $place->name }}</div>
                        <a href="/place/{{ $place->id }}"><img src="{{ asset('img/'.$place->image) }}" class="rounded float-start" style="width: 250px; height: 150px;" alt="..."></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- End Other Place -->
 
    </div>
@endsection