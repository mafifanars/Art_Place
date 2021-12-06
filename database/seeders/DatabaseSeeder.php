<?php

namespace Database\Seeders;

use App\Models\Art;
use App\Models\Item;
use App\Models\Type;
use App\Models\User;
use App\Models\Place;
use App\Models\Story;
use App\Models\Artist;
use App\Models\Museum;
use App\Models\Category;
use Illuminate\Database\Seeder;

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

        Category::create([
            'name' => 'City'
        ]);

        Category::create([
            'name' => 'Country'
        ]);

        Type::create([
            'name' => 'Statue'
        ]);

        Type::create([
            'name' => 'Painting'
        ]);

        Artist::create([
            'name' => 'Pertama',
            'desc' => 'Ini adalah seniman pertama di Google Art kami',
            'birth_date' => '2021-12-02',
            'death_date' => '2021-12-02'
        ]);

        Artist::create([
            'name' => 'Kedua',
            'desc' => 'Ini adalah seniman kedua di Google Art kami',
            'birth_date' => '2021-12-02',
            'death_date' => '2021-12-02'
        ]);

        Art::create([
            'type_id' => 1,
            'artist_id' => 2,
            'title' => 'A SCIENTIFIC CONTROVERSY',
            'image' => 'poto.jpg',
            'date_created' => '2021-12-02'

        ]);

        Art::create([
            'type_id' => 2,
            'artist_id' => 1,
            'title' => 'Art in the Making ',
            'image' => 'poto.jpg',
            'date_created' => '2021-12-02'
        ]);

        Museum::create([
            'art_id' => 2,
            'name' => 'SMK - Statens Museum for Kunst',
            'desc' => 'Koleksi di Galeri Nasional Denmark terdiri dari tiga koleksi utama: The Royal Collection of Painting and Sculpture, The Royal Collection of Graphic Art, dan The Royal Collection of Plaster Casts. Seperti namanya, koleksi ini berakar pada koleksi seni raja Denmark; mereka diyakini berasal dari Raja Christian II dan pertengahan abad ke-16. Koleksi Patung dan Lukisan terdiri dari sekitar 10.500 lukisan dan patung, sedangkan Koleksi Seni Grafis menampung lebih dari 245.000 karya seni di atas kertas. Selain itu, sekitar 2.500 gips ditempatkan di Royal Cast Collection. Karya-karya baru ditambahkan ke koleksi setiap tahun. Sumbangan dan akuisisi yang murah hati telah membentuk profil koleksi dalam beberapa tahun terakhir, tetapi titik awalnya tetap koleksi yang dibangun oleh raja Denmark.',
            'image' => 'poto.jpg'
        ]);

        Museum::create([
            'art_id' => 1,
            'name' => 'Glyptoteket',
            'desc' => 'Museum yang indah ini, didirikan pada tahun 1888, mengundang Anda untuk menemukan koleksi seni Mediterania Kuno terbesar di Eropa Utara dan mengunjungi koleksi terkemuka lukisan Impresionis Prancis di Denmark. Bangunan indah dipenuhi dengan suasana dan setiap sudut menawarkan pengalaman baru. Jantung museum adalah taman musim dingin subtropis klasik tahun 1906 dengan pohon palem yang tinggi, air mancur, dan kolam ikan. Museum ini didirikan oleh tokoh pembuat bir terkenal Carl Jacobsen, yang membuat bir Carlsberg dikenal di seluruh dunia.',
            'image' => 'poto.jpg'
        ]);

        Story::create([
            'title' => 'Ini adalah nama pertama museum',
            'desc' => 'ini adalah deskripsi singkat kami',
            'image' => 'poto.jpg'
        ]);

        Story::create([
            'title' => 'Ini adalah nama kedua museum',
            'image' => 'poto.jpg',
            'desc' => 'ini adalah deskripsi singkat kami',
        ]);

        Place::create([
            'category_id' => '2',
            'name' => 'Denmark',
            'desc' => 'Denmark adalah negara Skandinavia di Eropa. Yang paling selatan dan terkecil dari negara-negara Nordik, itu adalah barat daya Swedia dan selatan Norwegia, dan berbatasan di selatan dengan Jerman. Kerajaan Denmark adalah negara berdaulat yang terdiri dari Denmark sendiri dan dua negara konstituen otonom di Samudra Atlantik Utara: Kepulauan Faroe dan Greenland. Denmark memiliki luas total 42.924 kilometer persegi, dan populasi 5,7 juta. Negara ini terdiri dari semenanjung, Jutlandia, dan kepulauan dari 443 pulau bernama, dengan yang terbesar adalah Zealand dan Funen. Pulau-pulau dicirikan oleh tanah datar, subur dan pantai berpasir, ketinggian rendah dan iklim sedang. Kerajaan Denmark yang bersatu muncul pada abad ke-10 sebagai negara pelaut yang mahir dalam perjuangan untuk menguasai Laut Baltik. Denmark, Swedia dan Norwegia diperintah bersama di bawah Persatuan Kalmar, didirikan pada 1397 dan berakhir dengan pemisahan diri Swedia pada 1523. Denmark dan Norwegia tetap berada di bawah raja yang sama sampai kekuatan luar membubarkan serikat tersebut pada 1814. Penyatuan dengan Norwegia memungkinkan Denmark untuk mewarisi Kepulauan Faroe, Islandia, dan Greenland.',
            'image' => 'poto.jpg',
        ]);

        Place::create([
            'category_id' => '1',
            'name' => 'Goiânia',
            'desc' => 'Goiânia adalah ibu kota negara bagian Goiás, Brasil. Penduduknya berjumlah 1.170.000 jiwa.',
            'image' => 'poto.jpg',
        ]);

        Place::create([
            'category_id' => '1',
            'name' => 'Le Havre',
            'desc' => 'Le Havre merupakan kota yang terletak di sebelah utara Prancis. Penduduknya berjumlah 188.000 jiwa.',
            'image' => 'poto.jpg',
        ]);

        Place::create([
            'category_id' => '1',
            'name' => 'Toledo',
            'desc' => 'Toledo adalah sebuah kota dan munisipalitas yang terletak di tengah-tengah Spanyol, 70 km di sebelah selatan Madrid. Kota ini merupakan ibu kota provinsi Toledo dan komunitas otonom Castile-La Mancha. Kota ini ditetapkan menjadi Situs Warisan Dunia UNESCO pada tahun 1986 oleh karena warisan budaya dan monumentalnya sebagai bekas ibu kota Kekaisaran Spanyol dan tempat percampuran budaya Kristen, Yahudi, dan Moor pada masa Al-Andalus. Kota ini penting dari zaman Romawi hingga abad ke-18. Banyak tokoh-tokoh terkenal lahir di kota ini, termasuk El Greco dan Alfonso X. Pada tahun 2005, kota ini memiliki penduduk sebesar 75.578 dan wilayah seluas 232.1 km².',
            'image' => 'poto.jpg',
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

        Item::create([
            'place_id' =>'1',
            'museum_id'=>'1',
            'story_id' =>'1',
            'art_id' => '2',
            'artist_id' => '1'
        ]);

        Item::create([
            'place_id' =>'2',
            'museum_id'=>'1',
            'story_id' =>'1',
            'art_id' => '2',
            'artist_id' => '1'
        ]);
        Item::create([
            'place_id' =>'3',
            'museum_id'=>'1',
            'story_id' =>'1',
            'art_id' => '2',
            'artist_id' => '1'
        ]);
        Item::create([
            'place_id' =>'4',
            'museum_id'=>'1',
            'story_id' =>'1',
            'art_id' => '2',
            'artist_id' => '1'
        ]);

    }
}
