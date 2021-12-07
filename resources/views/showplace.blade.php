@extends('layouts.main')

@section('title')
    {{ $place->name }}
@endsection

@section('container')

    <div class="container mt-3">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        <div class="card mb-3 mt-3">

            @if ($place->image)
                <img src="{{ asset('img/'.$place->image) }}" class="img-fluid rounded" style="height: 350px" alt="{{ $place->name }}">
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $place->name }}" class="img-fluid rounded" style="height: 350px" alt="{{ $place->name }}">
            @endif
        </div>
            @if (Auth::check())
                @if (Auth::user()->is_admin == "1")
                        <a href="/place/{{ $place->id }}/edit" class="mb-3"><span class="badge rounded-pill bg-warning bi bi-pencil-square"> Edit</span></a>
                        <form action="{{ url('/place/'.$place->id) }}" method="POST" class="ms-2 text-photo d-inline" onsubmit="return confirm('Apakah yakin ingin menghapus?')">
                            @csrf
                            @method('delete')
                                <button type="submit" class="badge rounded-pill bg-danger bi bi-trash border-0"> Hapus</button>
                        </form>
                @endif
            @endif
        <div>
            <p class="text-center fs-3">{{ $place->name }}</p>
        </div>

        <div class="jumbotron jumbotron-fluid rounded mb-4">
            <div class="container">
              <p class="text-center">{{ $place->desc }}</p>
            </div>
        </div>

        <!-- Start Museum -->
        <div class="container">
            <p class="fs-4 mt-3">{{ $count_museum }} Museum</p>
            <div class="row mt-2">
                @if (Auth::check())
                    @if (Auth::user()->is_admin == "1")
                            <a href="/museum/create" class=""><span class="badge rounded-pill bg-primary bi bi-plus-circle"> Tambah</span></a>
                    @endif
                @endif
                @foreach($museums as $museum)
                {{ $museum->name }}
                <div class="col-md-3 mt-3">
                    <div class="image" >
                        <div class="position-absolute px-2 py-1 text-white" style="background-color: rgba(0,0,0,0);">{{ $museum->museum->name }}</div>
                        @if ($museum->image)
                            <a href="{{ url('/museum/'.$museum->museum_id.'/'.$museum->place_id) }}"><img src="{{ $museum->museum->image }}" class="rounded float-start" style="width: 250px; height: 150px;" alt="{{ $place->name }}"></a>
                        @else
                            <a href="{{ url('/museum/'.$museum->museum_id.'/'.$museum->place_id) }}"><img src="https://source.unsplash.com/1200x400?{{ $museum->museum->name }}" class="rounded float-start" style="width: 250px; height: 150px;" alt="{{ $museum->museum->name }}"></a>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- End Museum -->   

        <!-- Start Cerita -->
        <div class="container mb-4">
            <p class="fs-4 mt-5">{{ $count_story }} Cerita</p>
            <div class="row mt-2">
                @if (Auth::check())
                    @if (Auth::user()->is_admin == "1")
                            <a href="" class=""><span class="badge rounded-pill bg-primary bi bi-plus-circle"> Tambah</span></a>
                    @endif
                @endif
                @foreach($stories as $story)
                <div class="col-md-3 mt-3">
                    <div class="image" >
                        {{-- <div class="position-absolute px-3 py-1 text-white" style="background-color: rgba(0,0,0,0);">{{ $story->story->title }}</div> --}}
                        <a href="{{ url('/story/'.$story->story_id.'/'.$museum->place_id) }}"><img src="{{ $story->story->image }}" class="rounded" style="width: 180px; height: 200px;" alt="..."></a>
                        <p class="px-0 mt-1 col-md-8" style="font-size: 12px">{{ $story->story->title }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- End Cerita -->  
        
        <!-- Start Other Places -->
        <div class="container mb-5">
            <p class="fs-4 mt-3">Tempat Lainnya</p>
            <div class="row mt-2">
                @foreach ($places as $place)
                <div class="col-md-3 mt-3">
                    <div class="image">
                        <div class="position-absolute px-3 py-1 text-white fs-4" style="background-color: rgba(0,0,0,0);">{{ $place->name }}</div>
                        @if ($place->image)
                            <a href="/place/{{ $place->id }}"><img src="{{ asset('img/'.$place->image) }}" class="rounded float-start" style="width: 250px; height: 150px;" alt="{{ $place->image }}"></a>
                        @else
                            <a href="/place/{{ $place->id }}"><img src="https://source.unsplash.com/1200x400?{{ $place->name }}" class="rounded float-start" style="width: 250px; height: 150px;" alt="{{ $place->image }}"></a>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- End Other Place -->
    </div>
@endsection