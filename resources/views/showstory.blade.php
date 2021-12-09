@extends('layouts.main')

@section('title')
    {{ $story->title }}
@endsection

@section('container')

    <div class="container mt-3">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        <div class="card mb-3">
            @if ($story->image)
                <img src="{{ asset('storage/'.$story->image) }}" class="img-fluid rounded" style="height: 350px" alt="{{ $story->title }}">
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $story->title }}" class="img-fluid rounded" style="height: 350px" alt="{{ $story->title }}">
            @endif
        </div>
        @if (Auth::check())
            @if (Auth::user()->is_admin == "1")
                    <a href="{{url('/story/edit/'.$story->id.'/'.$place_id)}}" class="mb-3"><span class="badge rounded-pill bg-warning bi bi-pencil-square"> Edit</span></a>
                    
                    <form action="/story/delete" method="POST" class="ms-2 text-photo d-inline" onsubmit="return confirm('Apakah yakin ingin menghapus?')">
                            @csrf
                            <input type="hidden" name="story_id" value="{{ $story->id }}"> 
                            <input type="hidden" name="place_id" value="{{ $place_id }}"> 
                            <button type="submit" class="badge rounded-pill bg-danger bi bi-trash border-0"> Hapus</button>
                    </form>
            @endif
        @endif
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
                            <a href="{{url('/place/'.$place_id.'/story/create/')}}" class=""><span class="badge rounded-pill bg-primary bi bi-plus-circle"> Tambah</span></a>
                    @endif
                @endif
                @foreach ($stories as $story)
                    <div class="col-md-3 mt-3">
                        <div class="image" >
                            @if ($story->story->image)
                                <a href="{{ url('/story/'.$story->id.'/'.$story->place_id) }}"><img src="{{ asset('storage/'.$story->story->image) }}" class="rounded" style="width: 180px; height: 200px;" alt="{{ $story->story->title }}"></a>
                            @else
                                <a href="{{ url('/story/'.$story->id.'/'.$story->place_id) }}"><img src="https://source.unsplash.com/1200x400?{{ $story->story->title }}" class="rounded" style="width: 180px; height: 200px;" alt="{{ $story->story->title }}"></a>
                            @endif
                            <p class="px-0 mt-1 col-md-8" style="font-size: 12px">{{ $story->story->title }}</p>
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
                        <a href="/place/{{ $place->id }}"><img src="{{ asset('storage/'.$place->image) }}" class="rounded float-start" style="width: 250px; height: 150px;" alt="..."></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- End Other Place -->
 
    </div>
@endsection