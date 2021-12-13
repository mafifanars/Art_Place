@extends('layouts.main')

@section('title')
    {{ $museum->name }}
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
            @if ($museum->image)
                <img src="{{ asset('storage/'.$museum->image) }}" class="img-fluid rounded" style="height: 350px" alt="{{ $museum->name }}">
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $museum->name }}" class="img-fluid rounded" style="height: 350px" alt="{{ $museum->name }}">
            @endif
        </div>
        @if (Auth::check())
            @if (Auth::user()->is_admin == "1")
                    <a href="{{url('/museum/edit/'.$museum->id.'/'.$placeid)}}" class="mb-3"><span class="badge rounded-pill bg-warning bi bi-pencil-square"> Edit</span></a>
                    <form action="/museum/delete/" method="POST" class="ms-2 text-photo d-inline" onsubmit="return confirm('Apakah yakin ingin menghapus?')">
                            @csrf
                            <input type="hidden" name="museum_id" value="{{ $museum->id }}"> 
                            <input type="hidden" name="place_id" value="{{ $placeid }}"> 
                            <button type="submit" class="badge rounded-pill bg-danger bi bi-trash border-0"> Hapus</button>
                    </form>
            @endif
        @endif
        
        @if ($liked ==  0)
                <form action="{{ url('/account/favourite/museum/'.$museum->id . '/'. $placeid) }}" method="POST" class="ms-2 text-photo d-inline">
                @csrf
                    <input type="hidden" name="user_id" id="user_id" value="{{ auth()->user()->id }}">
                    <button style="background-color: #FF69B4" type="submit" class="badge rounded-pill bi bi-heart border-0"> Favorit</button>
                </form>
        @else
            <form action="{{ url('/account/favourite/museum/delete/'.$museum->id . '/' . $placeid) }}" method="POST" class="ms-2 text-photo d-inline">
                    @csrf
                    <input type="hidden" name="user_id" id="user_id" value="{{ auth()->user()->id }}">
                    <button type="submit" class="badge rounded-pill text-dark bg-transparant bi bi-heart border-0"> Hapus Favorit</button>
            </form>
        @endif

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
                        <a href="{{url('/place/'.$placeid.'/museum/create/')}}" class=""><span class="badge rounded-pill bg-primary bi bi-plus-circle"> Tambah</span></a>
                    @endif
                @endif
                @foreach ($museums as $museum)
                    <div class="col-md-3 mt-3">
                        <div class="image" >
                            <div class="position-absolute px-3 py-1 text-white" style="background-color: rgba(0,0,0,0);">{{ $museum->museum->name }}</div>
                            @if ($museum->image)
                                <a href="{{ url('/museum/'.$museum->museum_id.'/'.$museum->place_id) }}"><img src="{{ $museum->museum->image }}" class="rounded float-start" style="width: 250px; height: 150px;" alt="{{ $place->name }}"></a>
                            @else
                                <a href="{{ url('/museum/'.$museum->museum_id.'/'.$museum->place_id) }}"><img src="https://source.unsplash.com/1200x400?{{ $museum->museum->name }}" class="rounded float-start" style="width: 250px; height: 150px;" alt="{{ $museum->museum->name }}"></a>
                            @endif
                            {{-- <a href="{{ url('/museum/'.$museum->museum_id.'/'.$museum->place_id) }}"><img src="{{ $museum->museum->image }}" class="rounded float-start" style="width: 250px; height: 150px;" alt="..."></a> --}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- End Museum -->      
    </div>
@endsection