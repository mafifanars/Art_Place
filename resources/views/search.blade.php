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
        <form method="post" action="/place/sortbytime">
            @csrf
            <button class="badge rounded-pill bg-info border-0 py-2">Urutkan berdasar <span class="bi bi-clock"></span></button>
        </form>
        <span class=""> || </span>
        <form method="post" action="/place/sortbyalpha">
            @csrf
            <button class="badge rounded-pill bg-info border-0 py-2">Urutkan abjad <span class="bi bi-sort-alpha-down"></span></button>
        </form>
    </nav>
      <!-- tab content -->

    <!-- Start Main -->
    <div class="container mb-4">
        <div class="row mt-4">
            @if ($places->count() > 0)
                <p class="mt-3">Menampilkan {{ $places->count() }} Tempat</p>
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
                    </div>
                </div>
                @endforeach
            @elseif ($stories->count() > 0)
                <p class="mt-3">Menampilkan {{ $stories->count() }} Cerita</p>
                @foreach($stories as $story)
                    <div class="col-md-3 mt-3">
                        <div class="image" >
                            @if ($story->image)
                                <a href="{{ url('/story/'.$story->id.'/'.$story->place_id) }}"><img src="{{ $story->image }}" class="rounded" style="width: 180px; height: 200px;" alt="{{ $story->story->title }}"></a>
                            @else
                                <a href="{{ url('/story/'.$story->id.'/'.$story->place_id) }}"><img src="https://source.unsplash.com/1200x400?{{ $story->title }}" class="rounded" style="width: 180px; height: 200px;" alt="{{ $story->title }}"></a>
                            @endif
                            <p class="px-0 mt-1 col-md-8" style="font-size: 12px">{{ $story->title }}</p>
                        </div>
                    </div>
                @endforeach
            @else
                <p class="text-center mt-4" style="font-size: 14px">Tidak ada data ditemukan</p>
            @endif
        </div>
    </div>
    <!-- End Main -->   
@endsection