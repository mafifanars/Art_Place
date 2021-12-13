@extends('layouts.main')

@section('title')
    Tempat
@endsection

@section('container')
    <!-- Header Section -->
    <header>
        <div class="d-flex justify-content-center header-title mt-5">
            <h1>Favourites</h1>
        </div>
    </header>
    <!-- End Header Section -->

    <!-- Start Main -->
    <div class="container mb-4">
        <div class="row mt-4">
            @if ($places->count() > 0 || $museums->count() > 0 || $stories->count() > 0 )
                <p class="mt-3">{{ $places->count() }} Tempat Favorit</p>
                @foreach ($places as $place)
                <div class="col-md-3 mt-3">
                    <div class="image" >
                        <div class="position-absolute px-3 py-1 text-white fs-4" style="background-color: rgba(0,0,0,0);">{{ $place->place->name }}</div>
                        <div class="position-absolute px-3 py-4 text-white mt-3" style="background-color: rgba(0,0,0,0);">{{ $place->place->category_museums()->count() }} Museum</div>
                        @if ($place->place->image)
                            <div style="max-height: 350px; overflow: hidden;">
                                <a href="/place/{{ $place->place->id }}"><img src="{{ asset('storage/'.$place->place->image) }}" class="rounded float-start" style="width: 250px; height: 150px;" alt="..."></a>
                            </div>
                        @else
                            <a href="/place/{{ $place->place->id }}"><img src="https://source.unsplash.com/1200x400?{{ $place->place->name }}"  class="rounded float-start" style="width: 250px; height: 150px;" alt="{{ $place->place->name }}" class="img-fluid mt-3"></a>
                        @endif
                    </div>
                </div>
                @endforeach

                        {{-- <p class="mt-3">Menampilkan {{ $museums->count() }} Museum</p>
                        @foreach($museums as $museum)
                        <div class="col-md-3 mt-3">
                            <div class="image" >
                                <div class="position-absolute px-2 py-1 text-white" style="background-color: rgba(0,0,0,0);">{{ $museum->name }}</div>
                                @if ($museum->image)
                                    <a href="{{ url('/museum/'.$museum->id.'/'.$museum->museum->category_museums()->first()->place_id) }}"><img src="{{ asset('storage/'.$museum->museum->image) }}" class="rounded float-start" style="width: 250px; height: 150px;" alt="{{ $museum->museum->name }}"></a>
                                @else
                                    <a href="{{ url('/museum/'.$museum->id.'/'.$museum->museum->category_museums()->first()->place_id) }}"><img src="https://source.unsplash.com/1200x400?{{ $museum->name }}" class="rounded float-start" style="width: 250px; height: 150px;" alt="{{ $museum->name }}"></a>
                                @endif
                            </div>
                        </div>
                        @endforeach --}}
                        
                <p class="mt-3">{{ $stories->count() }} Cerita Favorit</p>
                @foreach($stories as $story)
                    <div class="col-md-3 mt-3">
                        <div class="image" >
                            @if ($story->story->image)
                                <a href="{{ url('/story/'.$story->story->id.'/'.$story->story->category_stories()->first()->place_id) }}"><img src="{{ asset('storage/'.$story->story->image) }}" class="rounded" style="width: 180px; height: 200px;" alt="{{ $story->story->title }}"></a>
                            @else
                                <a href="{{ url('/story/'.$story->story->id.'/'.$story->story->category_stories()->first()->place_id) }}"><img src="https://source.unsplash.com/1200x400?{{ $story->story->title }}" class="rounded" style="width: 180px; height: 200px;" alt="{{ $story->story->title }}"></a>
                            @endif
                            <p class="px-0 mt-1 col-md-8" style="font-size: 12px">{{ $story->story->title }}</p>
                        </div>
                    </div>
                @endforeach
            @else
                <p class="text-center mt-4" style="font-size: 14px">Anda tidak mempunyai favorit</p>
            @endif
        </div>
    </div>
    <!-- End Main -->   
@endsection