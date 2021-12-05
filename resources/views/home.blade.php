@extends('layouts.main')

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
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-3 mt-3">
                <div class="image" >
                    <div class="position-absolute px-3 py-1 text-white" style="background-color: rgba(0,0,0,0);">Denmark</div>
                    <div class="position-absolute px-3 py-4 text-white" style="background-color: rgba(0,0,0,0);">100 items</div>
                    <a href=""><img src="{{ asset('img/denmark.jpg') }}" class="rounded float-start" style="width: 250px; height: 150px;" alt="..."></a>
                </div>
            </div>
            <div class="col-md-3 mt-3">
                <div class="image" >
                    <div class="position-absolute px-3 py-1 text-white" style="background-color: rgba(0,0,0,0);">Goiânia</div>
                    <div class="position-absolute px-3 py-4 text-white" style="background-color: rgba(0,0,0,0);">100 items</div>
                    <a href=""><img src="{{ asset('img/goiânia.jpg') }}" class="rounded float-start" style="width: 250px; height: 150px;" alt="..."></a>
                </div>
            </div>
            <div class="col-md-3 mt-3">
                <div class="image" >
                    <div class="position-absolute px-3 py-1 text-white" style="background-color: rgba(0,0,0,0);">Le Havre</div>
                    <div class="position-absolute px-3 py-4 text-white" style="background-color: rgba(0,0,0,0);">100 items</div>
                    <a href=""><img src="{{ asset('img/lehavre.jpg') }}" class="rounded float-start" style="width: 250px; height: 150px;" alt="..."></a>
                </div>
            </div>
            <div class="col-md-3 mt-3">
                <div class="image" >
                    <div class="position-absolute px-3 py-1 text-white" style="background-color: rgba(0,0,0,0);">Toledo</div>
                    <div class="position-absolute px-3 py-4 text-white" style="background-color: rgba(0,0,0,0);">100 items</div>
                    <a href=""><img src="{{ asset('img/toledo.jpg') }}" class="rounded float-start" style="width: 250px; height: 150px;" alt="..."></a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main -->   
@endsection