<?php

namespace Database\Seeders;

use App\Models\Art;
use App\Models\Place;
use App\Models\Story;
use App\Models\Artist;
use App\Models\Museum;
use App\Models\TypePlaces;
use App\Models\CategoryMuseums;
use App\Models\CategoryStories;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        TypePlaces::create([
            'name' => 'Country'
        ]);

        TypePlaces::create([
            'name' => 'City'
        ]);

        Place::create([
            'type_place_id' => '2',
            'name' => 'Denmark',
            'desc' => 'Denmark adalah negara Skandinavia di Eropa. Yang paling selatan dan terkecil dari negara-negara Nordik, itu adalah barat daya Swedia dan selatan Norwegia, dan berbatasan di selatan dengan Jerman. Kerajaan Denmark adalah negara berdaulat yang terdiri dari Denmark sendiri dan dua negara konstituen otonom di Samudra Atlantik Utara: Kepulauan Faroe dan Greenland. Denmark memiliki luas total 42.924 kilometer persegi, dan populasi 5,7 juta. Negara ini terdiri dari semenanjung, Jutlandia, dan kepulauan dari 443 pulau bernama, dengan yang terbesar adalah Zealand dan Funen. Pulau-pulau dicirikan oleh tanah datar, subur dan pantai berpasir, ketinggian rendah dan iklim sedang. Kerajaan Denmark yang bersatu muncul pada abad ke-10 sebagai negara pelaut yang mahir dalam perjuangan untuk menguasai Laut Baltik. Denmark, Swedia dan Norwegia diperintah bersama di bawah Persatuan Kalmar, didirikan pada 1397 dan berakhir dengan pemisahan diri Swedia pada 1523. Denmark dan Norwegia tetap berada di bawah raja yang sama sampai kekuatan luar membubarkan serikat tersebut pada 1814. Penyatuan dengan Norwegia memungkinkan Denmark untuk mewarisi Kepulauan Faroe, Islandia, dan Greenland.',
            'image' => '',
        ]);

        Place::create([
            'type_place_id' => '1',
            'name' => 'Goiânia',
            'desc' => 'Goiânia adalah ibu kota negara bagian Goiás, Brasil. Penduduknya berjumlah 1.170.000 jiwa.',
            'image' => '',
        ]);

        Place::create([
            'type_place_id' => '1',
            'name' => 'Le Havre',
            'desc' => 'Le Havre merupakan kota yang terletak di sebelah utara Prancis. Penduduknya berjumlah 188.000 jiwa.',
            'image' => '',
        ]);

        Place::create([
            'type_place_id' => '1',
            'name' => 'Toledo',
            'desc' => 'Toledo adalah sebuah kota dan munisipalitas yang terletak di tengah-tengah Spanyol, 70 km di sebelah selatan Madrid. Kota ini merupakan ibu kota provinsi Toledo dan komunitas otonom Castile-La Mancha. Kota ini ditetapkan menjadi Situs Warisan Dunia UNESCO pada tahun 1986 oleh karena warisan budaya dan monumentalnya sebagai bekas ibu kota Kekaisaran Spanyol dan tempat percampuran budaya Kristen, Yahudi, dan Moor pada masa Al-Andalus. Kota ini penting dari zaman Romawi hingga abad ke-18. Banyak tokoh-tokoh terkenal lahir di kota ini, termasuk El Greco dan Alfonso X. Pada tahun 2005, kota ini memiliki penduduk sebesar 75.578 dan wilayah seluas 232.1 km².',
            'image' => '',
        ]);

        

        User::create([
            'name' =>'Admin',
            'username'=>'admin',
            'email' =>'admin@gmail.com',
            'is_admin' => '1',
            'password' => bcrypt('adminpass'),
        ]);
    }
}
