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
            'image' => 'https://files.guidedanmark.org/files/382/269459_199393_2018_Maj_SMK_1_VG.jpg'
        ]);

        Museum::create([
            'name' => 'Glyptoteket',
            'desc' => 'Museum yang indah ini, didirikan pada tahun 1888, mengundang Anda untuk menemukan koleksi seni Mediterania Kuno terbesar di Eropa Utara dan mengunjungi koleksi terkemuka lukisan Impresionis Prancis di Denmark. Bangunan indah dipenuhi dengan suasana dan setiap sudut menawarkan pengalaman baru. Jantung museum adalah taman musim dingin subtropis klasik tahun 1906 dengan pohon palem yang tinggi, air mancur, dan kolam ikan. Museum ini didirikan oleh tokoh pembuat bir terkenal Carl Jacobsen, yang membuat bir Carlsberg dikenal di seluruh dunia.',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/00/Kopenhagen_%28DK%29%2C_Ny-Carlsberg-Glyptotek_--_2017_--_1466.jpg/330px-Kopenhagen_%28DK%29%2C_Ny-Carlsberg-Glyptotek_--_2017_--_1466.jpg'
        ]);

        Museum::create([
            'name' => 'National Museum - New Delhi',
            'desc' => 'Museum Nasional, New Delhi seperti yang kita lihat hari ini di gedung megah di sudut Janpath dan Jalan Maulana Azad adalah museum utama di negara ini.
                        Cetak biru untuk mendirikan Museum Nasional di Delhi telah disiapkan oleh Komite Gwyer yang dibentuk oleh Pemerintah India pada tahun 1946. Ketika Pameran Seni India yang terdiri dari artefak pilihan dari berbagai museum India, disponsori oleh Royal Academy ( London) dengan kerjasama Pemerintah India dan Inggris, dipajang di galeri Burlington House, London selama bulan-bulan musim dingin 1947-48, diputuskan untuk memajang koleksi yang sama di bawah satu atap di Delhi sebelum pengembalian barang pameran ke museum masing-masing.
                        Oleh karena itu, pameran tersebut diadakan di ruang negara bagian Rashtrapati Bhawan, New Delhi pada tahun 1949, dan ternyata sukses besar. Pada gilirannya, acara tersebut terbukti bertanggung jawab atas terciptanya Museum Nasional. Pada hari keberuntungan 15 Agustus 1949, Museum Nasional secara resmi diresmikan oleh Gubernur Jenderal India, Shri R.C. Rajagopalachari, dan diumumkan bahwa sampai bangunan permanen untuk perumahan Museum Nasional dibangun, Museum akan terus berfungsi di Rashtrapati Bhawan. Pemerintah juga merasa perlu mempertahankan pameran-pameran yang dipamerkan untuk dijadikan milik Museum Nasional dan rencananya dikirim ke seluruh peserta pameran London. Itu terus dirawat dengan baik oleh Direktur Jenderal Arkeologi hingga Kementerian Pendidikan, Pemerintah India menyatakannya sebagai lembaga terpisah untuk tumbuh dalam koleksinya yang dicari dengan susah payah. Itu menerima beberapa hadiah tetapi artefak dikumpulkan terutama melalui Komite Pembelian Seni.',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/a/ad/India_national_museum_01.jpg'
        ]);

        Museum::create([
            'name' => 'National Gallery of Canada',
            'desc' => 'Galeri Nasional Kanada terletak di Ottawa, Ontario, di wilayah yang tak tergoyahkan dari Bangsa Algonquin Anishinaabe. Terletak di jantung wilayah ibu kota Kanada, Galeri ini adalah rumah bagi hampir 100.000 karya seni. Sepanjang tahun, Galeri menawarkan pameran dan program dinamis, yang dirancang untuk membuka pikiran dan mengeksplorasi cara baru untuk melihat diri kita sendiri dan orang lain, sambil juga merayakan sejarah kita yang beragam.
                        Didirikan pada tahun 1880, Galeri ini bertempat di sebuah bangunan yang dipenuhi cahaya yang menjulang tinggi yang dirancang oleh arsitek terkenal internasional Moshe Safdie, dengan lahan yang menampilkan patung-patung monumental dan taman umum. Menampilkan karya-karya dari zaman kuno hingga hari ini, lembaga ini memiliki salah satu koleksi seni Pribumi dan Kanada terbaik di dunia, serta karya agung dari berbagai tradisi seni lainnya, termasuk seni Eropa, Amerika dan Asia, seni kontemporer, cetakan dan gambar. , dan fotografi. Ini juga merupakan rumah bagi perpustakaan penelitian yang luas, dan bahan arsip yang mencakup banyak kesukaan dan koleksi ephemera yang berhubungan dengan seni.',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/1/10/Ottawa_-_ON_-_National_Gallery_of_Canada.jpg'
        ]);

        Museum::create([
            'name' => 'Art Gallery of Ontario',
            'desc' => 'Didirikan pada tahun 1900 oleh sekelompok warga negara sebagai Museum Seni Toronto, Galeri Seni Ontario adalah salah satu museum seni terbesar di Amerika Utara, dengan fasilitas fisik seluas 583.000 kaki persegi. Kejaksaan Agung memperluas fasilitasnya pada tahun 2008 dengan desain arsitektur yang inovatif oleh arsitek terkenal dunia Frank Gehry. Kejaksaan memiliki lebih dari 80.000 karya dalam koleksinya, yang terbentang dari 100 M hingga saat ini.',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/17/AGO_at_dusk.jpg/1200px-AGO_at_dusk.jpg'
        ]);

        CategoryMuseums::create([
            'museum_id' => '1',
            'place_id' => '1'
        ]);

        CategoryMuseums::create([
            'museum_id' => '5',
            'place_id' => '1'
        ]);

        CategoryMuseums::create([
            'museum_id' => '2',
            'place_id' => '2'
        ]);

        CategoryMuseums::create([
            'museum_id' => '3',
            'place_id' => '3'
        ]);

        CategoryMuseums::create([
            'museum_id' => '4',
            'place_id' => '4'
        ]);

        Story::create([
            'title' => 'Explore the Rugged Beauty of the French Pyrenees',
            'desc' => 'Take a street-view tour of Frances mountainous National Park',
            'image' => 'https://www.tripsavvy.com/thmb/u0NKvuHbmajHuZb2k6y0WbcR7RY=/1887x1415/smart/filters:no_upscale()/MontBlancGettyIWestend61-59329c745f9b589eb44e83cf-07d76a7883454947b4e37ff3d1dbcefc.jpg'
        ]);

        Story::create([
            'title' => 'Pomp and Pleasure: palaces & gardens of French nobility',
            'desc' => 'Moats, drawbridges and towering keeps: discover the castles and pleasure gardens of the French nobility from the Middle Ages to the Court of King Louis XIV.',
            'image' => 'https://lh3.ggpht.com/lgkcymE7r-NXkmlAoZEVGrSmVTvzhItklBpfYs-rHgY_8cIn1m0Z8x8t_w'
        ]);

        Story::create([
            'title' => 'Meet Canadas Group of 7',
            'desc' => 'Discover the Algonquin school, the most important art movement youve never heard of!.',
            'image' => 'https://athina.design/ads/wp-content/uploads/2021/08/group7.jpg'
        ]);

        Story::create([
            'title' => 'Canada',
            'desc' => 'Canada is often known for its frigid temperatures and snowy environments, but beneath that icy surface, it’s a country rich in history and steeped in culture.',
            'image' => 'https://www.commonwealthfund.org/sites/default/files/styles/countries_hero_desktop/public/country_image_Canada.jpg?h=f2fcf546&itok=HpXJ6X1n'
        ]);

        CategoryStories::create([
            'story_id' => '1',
            'place_id' => '1'
        ]);

        CategoryStories::create([
            'story_id' => '2',
            'place_id' => '2'
        ]);

        CategoryStories::create([
            'story_id' => '3',
            'place_id' => '3'
        ]);

        CategoryStories::create([
            'story_id' => '4',
            'place_id' => '4'
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
