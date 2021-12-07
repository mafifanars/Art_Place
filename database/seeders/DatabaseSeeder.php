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
            'image' => 'denmark.jpg',
        ]);

        Place::create([
            'type_place_id' => '1',
            'name' => 'Goiânia',
            'desc' => 'Goiânia adalah ibu kota negara bagian Goiás, Brasil. Penduduknya berjumlah 1.170.000 jiwa.',
            'image' => 'lehavre.jpg',
        ]);

        Place::create([
            'type_place_id' => '1',
            'name' => 'Le Havre',
            'desc' => 'Le Havre merupakan kota yang terletak di sebelah utara Prancis. Penduduknya berjumlah 188.000 jiwa.',
            'image' => 'goiânia.jpg',
        ]);

        Place::create([
            'type_place_id' => '1',
            'name' => 'Toledo',
            'desc' => 'Toledo adalah sebuah kota dan munisipalitas yang terletak di tengah-tengah Spanyol, 70 km di sebelah selatan Madrid. Kota ini merupakan ibu kota provinsi Toledo dan komunitas otonom Castile-La Mancha. Kota ini ditetapkan menjadi Situs Warisan Dunia UNESCO pada tahun 1986 oleh karena warisan budaya dan monumentalnya sebagai bekas ibu kota Kekaisaran Spanyol dan tempat percampuran budaya Kristen, Yahudi, dan Moor pada masa Al-Andalus. Kota ini penting dari zaman Romawi hingga abad ke-18. Banyak tokoh-tokoh terkenal lahir di kota ini, termasuk El Greco dan Alfonso X. Pada tahun 2005, kota ini memiliki penduduk sebesar 75.578 dan wilayah seluas 232.1 km².',
            'image' => 'toledo.jpg',
        ]);

        Museum::create([
            'name' => 'SMK - Statens Museum for Kunst',
            'desc' => 'Koleksi di Galeri Nasional Denmark terdiri dari tiga koleksi utama: The Royal Collection of Painting and Sculpture, The Royal Collection of Graphic Art, dan The Royal Collection of Plaster Casts. Seperti namanya, koleksi ini berakar pada koleksi seni raja Denmark; mereka diyakini berasal dari Raja Christian II dan pertengahan abad ke-16. Koleksi Patung dan Lukisan terdiri dari sekitar 10.500 lukisan dan patung, sedangkan Koleksi Seni Grafis menampung lebih dari 245.000 karya seni di atas kertas. Selain itu, sekitar 2.500 gips ditempatkan di Royal Cast Collection. Karya-karya baru ditambahkan ke koleksi setiap tahun. Sumbangan dan akuisisi yang murah hati telah membentuk profil koleksi dalam beberapa tahun terakhir, tetapi titik awalnya tetap koleksi yang dibangun oleh raja Denmark.',
            'image' => 'poto.jpg'
        ]);

        Museum::create([
            'name' => 'Glyptoteket',
            'desc' => 'Museum yang indah ini, didirikan pada tahun 1888, mengundang Anda untuk menemukan koleksi seni Mediterania Kuno terbesar di Eropa Utara dan mengunjungi koleksi terkemuka lukisan Impresionis Prancis di Denmark. Bangunan indah dipenuhi dengan suasana dan setiap sudut menawarkan pengalaman baru. Jantung museum adalah taman musim dingin subtropis klasik tahun 1906 dengan pohon palem yang tinggi, air mancur, dan kolam ikan. Museum ini didirikan oleh tokoh pembuat bir terkenal Carl Jacobsen, yang membuat bir Carlsberg dikenal di seluruh dunia.',
            'image' => 'poto.jpg'
        ]);

        // TypeArt::create([
        //     'name' => 'Patung'
        // ]);

        // TypeArt::create([
        //     'name' => 'Lukisan'
        // ]);

        // TypeArt::create([
        //     'name' => 'Musik'
        // ]);

        // TypeArt::create([
        //     'name' => 'Pahat'
        // ]);

        // Art::create([
        //     'name' => 'Patung Berdiri',
        //     'desc' => 'Sebuah karya seni populer di dunia.',
        //     'image' => 'poto.jpg',
        //     'type_art_id' => '1'
        // ]);

        // Art::create([
        //     'name' => 'Lukisan Terbalik',
        //     'desc' => 'Sebuah karya seni populer di dunia.',
        //     'image' => 'poto.jpg',
        //     'type_art_id' => '2'
        // ]);

        // Art::create([
        //     'name' => 'Lagu Galau',
        //     'desc' => 'Sebuah karya seni populer di dunia.',
        //     'image' => 'poto.jpg',
        //     'type_art_id' => '3'
        // ]);

        // Art::create([
        //     'name' => 'Batu Pahat',
        //     'desc' => 'Sebuah karya seni populer di dunia.',
        //     'image' => 'poto.jpg',
        //     'type_art_id' => '4'
        // ]);

        // Artist::create([
        //     'name' => 'Patukan Ius',
        //     'desc' => 'Seorang seniman kelahiran dunia.',
        //     'image' => 'poto.jpg',
        // ]);

        // Artist::create([
        //     'name' => 'Kalimapa',
        //     'desc' => 'Seorang seniman kelahiran dunia.',
        //     'image' => 'poto.jpg',
        // ]);

        // Artist::create([
        //     'name' => 'Jaupalkay',
        //     'desc' => 'Seorang seniman kelahiran dunia.',
        //     'image' => 'poto.jpg',
        // ]);

        // Artist::create([
        //     'name' => 'Dapikaut',
        //     'desc' => 'Seorang seniman kelahiran dunia.',
        //     'image' => 'poto.jpg',
        // ]);

        CategoryMuseums::create([
            'museum_id' => '1',
            'place_id' => '1'
        ]);

        CategoryMuseums::create([
            'museum_id' => '2',
            'place_id' => '2'
        ]);

        CategoryMuseums::create([
            'museum_id' => '2',
            'place_id' => '3'
        ]);

        CategoryMuseums::create([
            'museum_id' => '1',
            'place_id' => '4'
        ]);

        Story::create([
            'title' => 'Cerita 1',
            'desc' => 'ini adalah deskripsi singkat cerita 1',
            'image' => 'poto.jpg'
        ]);

        Story::create([
            'title' => 'Cerita 2',
            'image' => 'poto.jpg',
            'desc' => 'ini adalah deskripsi singkat cerita 2'
        ]);

        CategoryStories::create([
            'story_id' => '1',
            'place_id' => '1'
        ]);

        CategoryStories::create([
            'story_id' => '2',
            'place_id' => '2'
        ]);

        User::create([
            'name' =>'Admin',
            'username'=>'admin',
            'email' =>'sm.afifanaly@gmail.com',
            'is_admin' => '1',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' =>'User',
            'username'=>'user',
            'email' =>'gebyfebryanhar@gmail.com',
            'is_admin' => '0',
            'password' => bcrypt('password'),
        ]);
    }
}
