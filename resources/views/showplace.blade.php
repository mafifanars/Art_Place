@extends('layouts.main')

@section('container')

    <div class="container mt-3">
        <div class="card mb-3">
            <img src="{{ asset('img/denmark.jpg') }}" class="img-fluid rounded" style="height: 350px" alt="...">
        </div>

        <div>
            <p class="text-center fs-3">Denmark</p>
        </div>

        <div class="jumbotron jumbotron-fluid rounded mb-4">
            <div class="container">
              <p class="text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus itaque ipsa, qui officia repellat earum? Animi quod ad vero dolore voluptatibus ab ut deleniti impedit fuga autem sunt repudiandae rem dolores architecto fugit totam aliquam, eveniet beatae numquam, minima tempora odio nemo. Cum reprehenderit in quidem adipisci totam? Unde a repellendus minima natus esse doloribus ea repellat! Recusandae illo aspernatur dolore, praesentium a molestias, eligendi accusantium voluptate aliquam voluptatem possimus ipsam quo repellat quas eos quos quasi iste tenetur sapiente laborum modi maiores ducimus? Fuga cum similique esse, accusantium ducimus alias voluptates tempore consectetur ut velit facere, enim accusamus at.</p>
            </div>
        </div>

        <!-- Start Museum -->
        <div class="container">
            <p class="fs-4 mt-3">Museum</p>
            <div class="row mt-2">
                <a href="" class=""><span class="badge rounded-pill bg-primary bi bi-plus-circle"> Tambah</span></a>
                <div class="col-md-3 mt-3">
                    <div class="image" >
                        <div class="position-absolute px-3 py-1 text-white" style="background-color: rgba(0,0,0,0);">Museum 1</div>
                        <a href="/museum"><img src="{{ asset('img/denmark.jpg') }}" class="rounded float-start" style="width: 250px; height: 150px;" alt="..."></a>
                    </div>
                </div>
                <div class="col-md-3 mt-3">
                    <div class="image" >
                        <div class="position-absolute px-3 py-1 text-white" style="background-color: rgba(0,0,0,0);">Museum 2</div>
                        <a href="/museum"><img src="{{ asset('img/goiânia.jpg') }}" class="rounded float-start" style="width: 250px; height: 150px;" alt="..."></a>
                    </div>
                </div>
                <div class="col-md-3 mt-3">
                    <div class="image" >
                        <div class="position-absolute px-3 py-1 text-white" style="background-color: rgba(0,0,0,0);">Museum 3</div>
                        <a href="/museum"><img src="{{ asset('img/lehavre.jpg') }}" class="rounded float-start" style="width: 250px; height: 150px;" alt="..."></a>
                    </div>
                </div>
                <div class="col-md-3 mt-3">
                    <div class="image" >
                        <div class="position-absolute px-3 py-1 text-white" style="background-color: rgba(0,0,0,0);">Museum 4</div>
                        <a href="/museum"><img src="{{ asset('img/toledo.jpg') }}" class="rounded float-start" style="width: 250px; height: 150px;" alt="..."></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Museum -->   

        <!-- Start Cerita -->
        <div class="container">
            <p class="fs-4 mt-5">Cerita</p>
            <div class="row mt-2">
                <a href="" class=""><span class="badge rounded-pill bg-primary bi bi-plus-circle"> Tambah</span></a>
                <div class="col-md-3 mt-3">
                    <div class="image" >
                        <div class="position-absolute px-3 py-1 text-white" style="background-color: rgba(0,0,0,0);">Cerita 1</div>
                        <a href="/story"><img src="{{ asset('img/denmark.jpg') }}" class="rounded float-start" style="width: 180px; height: 200px;" alt="..."></a>
                    </div>
                </div>
                <div class="col-md-3 mt-3">
                    <div class="image" >
                        <div class="position-absolute px-3 py-1 text-white" style="background-color: rgba(0,0,0,0);">Cerita 2</div>
                        <a href="/story"><img src="{{ asset('img/goiânia.jpg') }}" class="rounded float-start" style="width: 180px; height: 200px;" alt="..."></a>
                    </div>
                </div>
                <div class="col-md-3 mt-3">
                    <div class="image" >
                        <div class="position-absolute px-3 py-1 text-white" style="background-color: rgba(0,0,0,0);">Cerita 3</div>
                        <a href="/story"><img src="{{ asset('img/lehavre.jpg') }}" class="rounded float-start" style="width: 180px; height: 200px;" alt="..."></a>
                    </div>
                </div>
                <div class="col-md-3 mt-3">
                    <div class="image" >
                        <div class="position-absolute px-3 py-1 text-white" style="background-color: rgba(0,0,0,0);">Cerita 4</div>
                        <a href="/story"><img src="{{ asset('img/toledo.jpg') }}" class="rounded float-start" style="width: 180px; height: 200px;" alt="..."></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Cerita -->   
    </div>
    

@foreach ($places as $place)
    1. Nama tempat : {{ $place->name }} <br>
    2. Deskripsi tempat : {{ $place->desc}} <br>
    3. Photo tempat : {{ $place->image }} <br> <br>
@endforeach
@endsection