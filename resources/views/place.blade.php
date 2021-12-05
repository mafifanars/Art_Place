@foreach ($places as $place)
    1. Nama tempat : {{ $place["place_name"] }} <br>
    2. Deskripsi tempat : {{ $place["desc"] }} <br>
    3. Photo tempat : {{ $place["image"] }} <br> <br>
@endforeach