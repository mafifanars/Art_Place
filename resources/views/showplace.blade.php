@extends('layouts.main')

@section('title')
    {{ $place->name }}
@endsection

@section('container')

    <div class="container mt-3">
        <div class="card mb-3">
            <img src="{{ asset('img/'.$place->image) }}" class="img-fluid rounded" style="height: 350px" alt="...">
        </div>

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
                <a href="" class=""><span class="badge rounded-pill bg-primary bi bi-plus-circle"> Tambah</span></a>
                @foreach($museums as $museum)
                {{ $museum->name }}
                <div class="col-md-3 mt-3">
                    <div class="image" >
                        <div class="position-absolute px-2 py-1 text-white" style="background-color: rgba(0,0,0,0);">{{ $museum->museum->name }}</div>
                        <a href="/museum"><img src="{{ asset('img/'.$museum->museum->image) }}" class="rounded float-start" style="width: 250px; height: 150px;" alt="..."></a>
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
                <a href="" class=""><span class="badge rounded-pill bg-primary bi bi-plus-circle"> Tambah</span></a>
                @foreach($stories as $story)
                <div class="col-md-3 mt-3">
                    <div class="image" >
                        <div class="position-absolute px-3 py-1 text-white" style="background-color: rgba(0,0,0,0);">Cerita 1</div>
                        <a href="/story"><img src="{{ asset('img/denmark.jpg') }}" class="rounded float-start" style="width: 180px; height: 200px;" alt="..."></a>
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
                        <div class="position-absolute px-3 py-1 text-white" style="background-color: rgba(0,0,0,0);">{{ $place->name }}</div>
                        <div class="position-absolute px-3 py-4 text-white" style="background-color: rgba(0,0,0,0);">{{ $count_museum }} Museum</div>
                        <a href="/place/{{ $place->id }}"><img src="{{ asset('img/'.$place->image) }}" class="rounded float-start" style="width: 250px; height: 150px;" alt="..."></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- End Other Place -->
    </div>
@endsection