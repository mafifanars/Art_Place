-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2021 at 09:33 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `art_place`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_museums`
--

CREATE TABLE `category_museums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `museum_id` bigint(20) UNSIGNED NOT NULL,
  `place_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_museums`
--

INSERT INTO `category_museums` (`id`, `museum_id`, `place_id`, `created_at`, `updated_at`) VALUES
(1, 1, 5, '2021-12-10 00:12:43', '2021-12-10 00:12:43'),
(2, 2, 5, '2021-12-10 00:14:07', '2021-12-10 00:14:07'),
(3, 3, 5, '2021-12-10 00:15:09', '2021-12-10 00:15:09'),
(4, 4, 1, '2021-12-10 01:15:33', '2021-12-10 01:15:33'),
(5, 5, 1, '2021-12-10 01:16:21', '2021-12-10 01:16:21'),
(6, 6, 1, '2021-12-10 01:17:29', '2021-12-10 01:17:29'),
(7, 7, 1, '2021-12-10 01:18:44', '2021-12-10 01:18:44'),
(8, 8, 3, '2021-12-10 01:23:34', '2021-12-10 01:23:34'),
(9, 9, 4, '2021-12-10 01:24:50', '2021-12-10 01:24:50'),
(10, 10, 4, '2021-12-10 01:25:42', '2021-12-10 01:25:42'),
(11, 11, 4, '2021-12-10 01:26:40', '2021-12-10 01:26:40');

-- --------------------------------------------------------

--
-- Table structure for table `category_stories`
--

CREATE TABLE `category_stories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `story_id` bigint(20) UNSIGNED NOT NULL,
  `place_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_stories`
--

INSERT INTO `category_stories` (`id`, `story_id`, `place_id`, `created_at`, `updated_at`) VALUES
(1, 1, 5, '2021-12-10 00:16:23', '2021-12-10 00:16:23'),
(3, 3, 5, '2021-12-10 00:17:43', '2021-12-10 00:17:43'),
(4, 4, 5, '2021-12-10 00:19:33', '2021-12-10 00:19:33'),
(6, 6, 1, '2021-12-10 01:21:02', '2021-12-10 01:21:02'),
(7, 7, 1, '2021-12-10 01:21:23', '2021-12-10 01:21:23'),
(8, 8, 1, '2021-12-10 01:21:49', '2021-12-10 01:21:49'),
(9, 9, 4, '2021-12-10 01:27:30', '2021-12-10 01:27:30');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_07_033040_create_type_places_table', 1),
(6, '2021_12_07_033131_create_places_table', 1),
(7, '2021_12_07_033306_create_museums_table', 1),
(8, '2021_12_07_033349_create_category_museums_table', 1),
(9, '2021_12_07_041526_create_stories_table', 1),
(10, '2021_12_07_041628_create_category_stories_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `museums`
--

CREATE TABLE `museums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `museums`
--

INSERT INTO `museums` (`id`, `name`, `desc`, `image`, `created_at`, `updated_at`) VALUES
(1, 'National Gallery Singapore', 'National Gallery Singapore mengawasi koleksi seni modern terkemuka di dunia dari Singapura dan Asia Tenggara. Ini terdiri lebih dari 8.000 karya dari abad ke-19 dan ke-20 di semua media, termasuk lukisan, patung, seni grafis, fotografi, dan video.\r\n\r\nBertujuan untuk menjadi pusat penelitian, diskusi, dan publikasi tentang seni modern di kawasan ini, Galeri ini menawarkan akses luas dan pemahaman baru tentang warisan seni visual kami yang unik.\r\n\r\nDengan koleksi yang lengkap, Galeri menampilkan perkembangan Singapura dan budaya daerah untuk menceritakan sejarah sosial, ekonomi dan politik mereka. Galeri melihat melampaui batas-batas seni nasional dan regional untuk memasukkan lingkup yang lebih luas dari budaya seni visual internasional, penelitian warisan Asia dan afiliasi budaya, dan terlibat dengan budaya dan wacana global.', 'img/eZx5dWaAvEF6CFjHjAdxkBu6SBG9yGWU5VVFCews.webp', '2021-12-10 00:12:43', '2021-12-10 00:12:43'),
(2, 'Singapore Art Museum', 'Singapore Art Museum adalah museum seni kontemporer yang berfokus pada pembuatan seni dan pemikiran seni di Singapura, Asia Tenggara, dan Asia, yang mencakup perspektif dunia tentang praktik seni kontemporer. SAM mengadvokasi dan membuat seni kontemporer interdisipliner dapat diakses melalui praktik kuratorial yang dipimpin oleh penelitian dan berkembang. Sejak dibuka pada Januari 1996, SAM telah membangun salah satu koleksi seni kontemporer terpenting dari wilayah tersebut. Ini berusaha untuk menyemai dan memelihara ruang yang merangsang dan kreatif di Singapura melalui pameran dan program publik, dan untuk memperdalam pengalaman setiap pengunjung. Ini termasuk penjangkauan dan pendidikan, penelitian dan publikasi, serta residensi lintas disiplin\r\ndan pertukaran.\r\n\r\nSAM menempati dua bangunan: St Joseph\'s Institution lama di Jalan Bras Basah, dibangun pada tahun 1855 dan sekarang menjadi Monumen Nasional; dan SAM at 8Q, sebuah gedung konservasi di seberang jalan di Queen Street yang merupakan Sekolah Menengah Katolik lama. Bangunan museum saat ini ditutup untuk perombakan bangunan besar, tetapi program museum berlanjut secara online dan di tempat mitra.\r\n\r\nSAM adalah penyelenggara Singapore Biennale pada tahun 2011, 2013, 2016 dan 2019. SAM didirikan sebagai Perseroan Terbatas dengan Jaminan pada 13 November 2013, beroperasi di bawah Kementerian Kebudayaan, Masyarakat dan Pemuda. Untuk mengetahui lebih lanjut, kunjungi\r\nwww.singaporeartmuseum.sg', 'img/W86UQKgzrPG5ALr9SYC96CcN7O7RLKBOPOooeXFu.webp', '2021-12-10 00:14:07', '2021-12-10 00:14:07'),
(3, 'Lee Kong Chian Natural History Museum', 'Lee Kong Chian Natural History Museum adalah pusat penelitian dan pendidikan keanekaragaman hayati terkemuka di Asia. Museum ini berakar pada Perpustakaan dan Museum Raffles yang dimulai pada tahun 1874 dan saat ini menampung lebih dari satu juta spesimen, sebagian besar dari Asia Tenggara. Berdasarkan posisi Singapura di Straits Settlements dan kemudian sebagai Koloni Mahkota Inggris, Museum ini telah menjadi pusat penelitian zoologi di kawasan ini selama lebih dari satu abad. Museum telah mempertahankan hubungan penelitian yang sangat erat dengan pusat penelitian keanekaragaman hayati lainnya di wilayah tersebut dan terus secara aktif mengeksplorasi, menggambarkan dan mendokumentasikan kehidupan tumbuhan dan hewan yang kaya di Asia Tenggara dan daerah sekitarnya. Untuk merayakan kemitraan ini, museum meluncurkan pameran virtual perdana berjudul \'ASEANA obscura\' yang menampilkan hewan-hewan yang kurang dikenal tetapi sama pentingnya di kawasan ASEAN (Perhimpunan Bangsa-Bangsa Asia Tenggara).', 'img/5caUq7J3A41xfmMb1DEZUJt309UanMvCLQDKZrGW.webp', '2021-12-10 00:15:09', '2021-12-10 00:15:09'),
(4, 'SMK - Statens Museum for Kunst', 'Koleksi di Galeri Nasional Denmark terdiri dari tiga koleksi utama: The Royal Collection of Painting and Sculpture, The Royal Collection of Graphic Art, dan The Royal Collection of Plaster Casts. Seperti namanya, koleksi ini berakar pada koleksi seni raja Denmark; mereka diyakini berasal dari Raja Christian II dan pertengahan abad ke-16.\r\n\r\nKoleksi Patung dan Lukisan terdiri dari sekitar 10.500 lukisan dan patung, sedangkan Koleksi Seni Grafis menampung lebih dari 245.000 karya seni di atas kertas. Selain itu, sekitar 2.500 gips ditempatkan di Royal Cast Collection.\r\n\r\nKarya-karya baru ditambahkan ke koleksi setiap tahun. Sumbangan dan akuisisi yang murah hati telah membentuk profil koleksi dalam beberapa tahun terakhir, tetapi titik awalnya tetap koleksi yang dibangun oleh raja Denmark.', 'img/YXAj55um5b9HWJgyWlMqI83zQgTTGGHuOEd0TpRL.webp', '2021-12-10 01:15:33', '2021-12-10 01:15:33'),
(5, 'Skagens Kunstmuseer', 'Skagens Kunstmuseer | Museum Seni Skagen\r\nMuseum Skagens didirikan pada tahun 1908 untuk mengumpulkan dan melestarikan karya-karya koloni seniman Skagen di lingkungan tempat mereka diciptakan.\r\n\r\nSejak tahun 1928 museum telah berada di sebuah bangunan yang dirancang oleh arsitek Ulrik Plesner. Garden House , di mana banyak seniman biasa menyewa penginapan, dan gudang pengeringan biji-bijian tua tempat PSKrøyer mendirikan studionya di Skagen, keduanya dapat ditemukan di taman museum yang atmosfir dan menggugah.\r\n\r\nPada tahun 2014 Skagens Museum digabungkan dengan dua museum rumah dan studio Anchers Hus – rumah bagi pasangan artis Anna Ancher dan Michael Ancher – dan Drachmanns Hus – rumah bagi penyair dan pelukis Holger Drachmann .\r\n\r\nKoloni Seniman Skagen\r\nDari akhir tahun 1870-an hingga pergantian abad, Skagen adalah tempat pertemuan internasional bagi seniman muda. Para seniman berbagi fakta bahwa mereka terinspirasi oleh naturalisme dan lukisan terbuka dan mencari tempat dan motif baru.\r\n\r\nSelama tahun 1880-an Skagen diubah menjadi koloni seniman di mana ada ruang untuk bekerja dan bersantai. Motif yang disukai para seniman adalah para nelayan yang bekerja di pantai, pondok-pondok kecil para nelayan dan kehidupan sosial di antara para seniman itu sendiri.', 'img/lj2ZGUNtt91lOBoOI6DmRUTQYLgM5iSz1AL1oP94.webp', '2021-12-10 01:16:21', '2021-12-10 01:16:21'),
(6, 'Thorvaldsens Museum', 'Bertel Thorvaldsen hidup dari tahun 1770 hingga 1844 dan Museum Thorvaldsens adalah bangunan museum tertua dan juga paling luar biasa di Denmark.\r\n\r\nMuseum dibuka pada tanggal 18 September 1848. Ini menampung hampir semua model asli pematung Bertel Thorvaldsen untuk patung yang ia buat untuk banyak negara Eropa. Dengan warna yang kuat baik di luar maupun di dalam dan arsitektur yang sangat asli, bangunan museum tepat di tengah Kopenhagen adalah tempat yang fantastis untuk karya dan koleksi Thorvaldsen.', 'img/TjAzsNDbqx3keFAJg9iMhFHkAOXAgwvGeg4pFK4T.webp', '2021-12-10 01:17:29', '2021-12-10 01:17:29'),
(7, 'Bornholms Kunstmuseum', 'Museum Seni Bornholm terletak sekitar enam kilometer barat laut Gudhjem di salah satu pemandangan paling spektakuler di Denmark. Luas lantai museum seluas 4.000 m² tersebar di tiga tingkat, mengikuti kemiringan alami medan hingga ke pantai berbatu. Di masa lalu, orang-orang berduyun-duyun ke daerah itu karena dugaan kekuatan kuratif dari mata air suci (Helligdomskilden) yang ditemukan di sini. Hari ini, mata air melambangkan kegiatan, pengalaman, rekreasi dan pengembangan spiritual. Mata air sekarang menggelembung keluar dari air mancur dan mengalir melalui selokan di sepanjang bangunan, sebelum dilepaskan ke Laut Baltik melalui sumur harapan kecil. Hal ini membuat bangunan itu sendiri, yang dianggap sebagai arsitektur Skandinavia yang tidak ada bandingannya, menjadi pengalaman artistik tersendiri dengan kamar-kamarnya yang cerah dan indah. Koleksi permanen terdiri dari seni visual dan seni kerajinan yang berkaitan dengan Bornholm. Koleksi seni visual berkisar secara kronologis dari awal abad ke-19 hingga saat ini, dan berkisar pada pelukis \"Bornholm School\", yang bekerja di pulau itu pada awal 1900-an. Karya-karya museum oleh sekolah Bornholm memberikan catatan yang kaya tentang terobosan modernisme dalam seni. Tetapi bagian tertua dan terbaru dari koleksi lukisan dan patung memberikan gambaran seni yang beragam dan berlimpah di Bornholm. Setiap tahun, Museum Seni Bornholm menyelenggarakan enam hingga delapan pameran seni dan/atau seni kerajinan khusus yang berkaitan dengan Bornholm dalam berbagai cara. Sejumlah pameran dikembangkan bekerja sama dengan museum seni lainnya, baik di Denmark maupun di luar negeri. Upaya kolaboratif dengan Sekolah Kaca dan Keramik di Nexø diwujudkan dalam pameran kelulusan tahunan pada bulan Juni, dengan karya para lulusan tahun ini – seniman kaca pemula dan ahli keramik.', 'img/8o9DOBkgoIffty6Vw1dbVShqkNZZTpMPkcNWQm1q.webp', '2021-12-10 01:18:44', '2021-12-10 01:18:44'),
(8, 'MuMa - Musée d\'art moderne André Malraux', 'Koleksi impresionis pertama Prancis setelah Paris.\r\nBoudin, Monet, Renoir, Degas, Sisley, Pissarro, Dufy... dengan cara mereka sendiri.\r\n\r\nMuseum Le Havre pertama kali didirikan pada tahun 1845. Koleksi aslinya dibuat dengan\r\npembelian, kiriman Negara dan sumbangan oleh pecinta seni dari Le Havre.\r\n\r\nKoleksi bersejarah tersebut terdiri dari karya seni abad ke-16 hingga awal abad ke-19. Sebagian besar aliran utama seni lukis diwakili melalui karya-karya Simon Vouet, Ribera,\r\nTer Brugghen, Janssens, Dughet, Hubert Robert, dll. Itu semakin diperkaya oleh karya-karya seni abad ke-19 (Courbet, Pissarro , Monet…) dan abad ke-20 (Villon, Léger, Dubuffet…). Karya-karya ini dipamerkan secara bergantian.\r\n\r\nArsitektur modern\r\n\r\nPada tahun 1961, di bawah bimbingan Jean Prouvé, siswa Auguste Perret; Guy Lagneau, Michel Weil, Jean Dimitrijevic dan Raymond Audigier membangun Museum Malraux. Itu segera dilihat sebagai bangunan modern dan inovatif. Profil kaca dan bajanya menjulang seperti kepala patung di atas laut di dekatnya. Seine\r\nMuara dan cahaya yang begitu berharga bagi para pelukis bertemu untuk membuat latar belakang yang indah untuk koleksi impresionis yang luar biasa dari Museum. Karena fasad kacanya yang besar, perhatian pengunjung secara alami dan halus ditarik bolak-balik dari karya seni ke lanskap dan dari lanskap ke karya seni.', 'img/aV3VDlgdzLiEzXvAyl2Nbth7Di6oOjacLGBEXkqd.webp', '2021-12-10 01:23:34', '2021-12-10 01:23:34'),
(9, 'Museo del Greco', 'Sejarah Museum terkait erat dengan sosok Don Benigno de la Vega-Inclán y Flaquer, marquis Vega-Inclán (1858-1942), salah satu pelindung seni terpenting di paruh pertama abad ke-20. abad dan orang yang memulai tren di Spanyol untuk merekonstruksi lokasi bersejarah di mana karya seni yang dipamerkan awalnya dibuat. Museo del Greco saat ini adalah satu-satunya di Spanyol yang didedikasikan untuk pelukis dan tujuan dasarnya adalah untuk menyampaikan dan membantu mendapatkan pemahaman tentang sosok El Greco serta pengaruh pekerjaan dan kepribadiannya pada awal abad ke-17 Toledo. Ini juga mencakup kebangkitan masa lalu museum melalui sosok marquis Vega-Inclán, promotor asli institusi dan pemimpin tak terbantahkan dalam pemulihan dan promosi lukisan El Greco.', 'img/fmzMGkEoKZAohIVgFyLokl40sCvNtgSXE2UQYlZ9.webp', '2021-12-10 01:24:50', '2021-12-10 01:24:50'),
(10, 'Museo Santa Cruz', 'Museum Santa Cruz mendapatkan namanya dari bangunan yang ditempatinya, rumah sakit tua Santa Cruz yang dibangun oleh Kardinal Mendoza pada awal abad ke-16. Dianggap sebagai salah satu permata arsitektur paling awal dari Renaisans Spanyol, itu dirancang oleh tokoh-tokoh seperti Anton dan Enrique Egas dan Alonso de Covarrubias, antara lain. Ini adalah yang terakhir yang membangun tangga monumental menuju galeri atas biara. Awal museum ini tanggal kembali ke pertengahan abad ke-19 ketika Negara mengambil langkah pertama dalam konservasi Warisan Budaya. Museum saat ini dibuat pada tahun 1961 dan sejak tahun 1985 Museum Santa Cruz telah dikelola oleh Junta de Comunidades de Castilla-La Mancha.\r\n\r\nKunjungan dimulai di lantai bawah. Biara Mulia menampung serangkaian karya dari Neolitik hingga Renaisans yang semuanya terkait dengan pemakaman. Di sini Anda juga dapat melihat mosaik Romawi yang sangat bagus dengan gaya bahari yang diambil dari vila Romawi. Lantai atas menampung benda-benda seni utama koleksi permanen Museum. Rencana perjalanan mencakup empat sayap denah salib Yunani. Potongan-potongan disajikan dalam urutan kronologis dari Prasejarah hingga abad ke-20: instrumen litik, keramik zaman Perunggu, persembahan Iberia, patung Romawi, teks Islam, furnitur abad pertengahan, dan karya hebat lainnya dari Renaisans Spanyol dan Eropa, termasuk karya agung Domenikos Theotocopuli, El Greco, menggambarkan kota Toledo di latar belakang. Pameran ditutup dengan seniman barok seperti Luca Giordano dan Jose de Ribera serta tokoh kontemporer seperti Vicente Cutanda dan Alberto Sanchez, pematung terkemuka dari avant-garde abad ke-20. diakhiri dengan kunjungan, museum menawarkan kepada pengunjung koleksi keramik Vicente Carranzas, salah satu koleksi terbaik karya keramik Spanyol.', 'img/xW7aqk7RJBZvyY3U3nDoJ6FW4Sf9yVL78xZrPDt5.webp', '2021-12-10 01:25:42', '2021-12-10 01:25:42'),
(11, 'Museo Sefardí', 'Museo Sefardí dibuat dengan Keputusan Kerajaan pada tahun 1964 dan bertempat di Sinagoga\r\ndel Tránsito. Museum ini dibuka untuk umum pada tahun 1971. Sejak itu, museografi\r\nSpanyol telah berkembang secara signifikan melalui reformasi nasional dari tahun 1986 hingga\r\n1994 dan dari tahun 2001 hingga 2003.\r\n\r\nSinagoga itu\r\ndibangun pada pertengahan abad ke-14 oleh Samuel Leví, seorang diplomat\r\ndan bendahara Raja Pedro I. Karena berbagai perubahan sejarah, gedung ini\r\nmenjadi gereja, arsip untuk dua ordo militer , tempat\r\nibadah sederhana, barak militer dan yang tak kalah pentingnya, Museo Sefardí kami.', 'img/fihW2WPE1roZjcJlqdGXtyfJAiNUMmyn460s4lXc.webp', '2021-12-10 01:26:40', '2021-12-10 01:26:40');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_place_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id`, `name`, `desc`, `image`, `type_place_id`, `created_at`, `updated_at`) VALUES
(1, 'Denmark', 'Denmark adalah negara Skandinavia di Eropa. Yang paling selatan dan terkecil dari negara-negara Nordik, itu adalah barat daya Swedia dan selatan Norwegia, dan berbatasan di selatan dengan Jerman. Kerajaan Denmark adalah negara berdaulat yang terdiri dari Denmark sendiri dan dua negara konstituen otonom di Samudra Atlantik Utara: Kepulauan Faroe dan Greenland. Denmark memiliki luas total 42.924 kilometer persegi, dan populasi 5,7 juta. Negara ini terdiri dari semenanjung, Jutlandia, dan kepulauan dari 443 pulau bernama, dengan yang terbesar adalah Zealand dan Funen. Pulau-pulau dicirikan oleh tanah datar, subur dan pantai berpasir, ketinggian rendah dan iklim sedang. Kerajaan Denmark yang bersatu muncul pada abad ke-10 sebagai negara pelaut yang mahir dalam perjuangan untuk menguasai Laut Baltik. Denmark, Swedia dan Norwegia diperintah bersama di bawah Persatuan Kalmar, didirikan pada 1397 dan berakhir dengan pemisahan diri Swedia pada 1523. Denmark dan Norwegia tetap berada di bawah raja yang sama sampai kekuatan luar membubarkan serikat tersebut pada 1814. Penyatuan dengan Norwegia memungkinkan Denmark untuk mewarisi Kepulauan Faroe, Islandia, dan Greenland.', 'img/RKRWXY16sth6nPp1FzWsgtpJSDdApGjuhYPXZf2r.webp', 1, '2021-12-10 00:07:52', '2021-12-10 01:14:29'),
(2, 'Goiânia', 'Goiânia adalah ibu kota negara bagian Goiás, Brasil. Penduduknya berjumlah 1.170.000 jiwa.', 'img/fbMcSsYSWafHNXYXApeG4nwboA3eGYgQxeQyEfSh.jpg', 1, '2021-12-10 00:07:52', '2021-12-10 00:08:59'),
(3, 'Le Havre', 'Le Havre merupakan kota yang terletak di sebelah utara Prancis. Penduduknya berjumlah 188.000 jiwa.', 'img/u807o0X5REw9AKfoUWpQnfZuuizLnbbSrToyJz9e.jpg', 1, '2021-12-10 00:07:52', '2021-12-10 00:09:11'),
(4, 'Toledo', 'Toledo adalah sebuah kota dan munisipalitas yang terletak di tengah-tengah Spanyol, 70 km di sebelah selatan Madrid. Kota ini merupakan ibu kota provinsi Toledo dan komunitas otonom Castile-La Mancha. Kota ini ditetapkan menjadi Situs Warisan Dunia UNESCO pada tahun 1986 oleh karena warisan budaya dan monumentalnya sebagai bekas ibu kota Kekaisaran Spanyol dan tempat percampuran budaya Kristen, Yahudi, dan Moor pada masa Al-Andalus. Kota ini penting dari zaman Romawi hingga abad ke-18. Banyak tokoh-tokoh terkenal lahir di kota ini, termasuk El Greco dan Alfonso X. Pada tahun 2005, kota ini memiliki penduduk sebesar 75.578 dan wilayah seluas 232.1 km².', 'img/am7HDrTUBQxbpX7nOe2Vv5nT2xMGO88iv5bk92Dj.jpg', 1, '2021-12-10 00:07:52', '2021-12-10 00:09:50'),
(5, 'Singapura', 'Singapura adalah sebuah negara pulau di lepas ujung selatan Semenanjung Malaya, 137 kilometer di utara khatulistiwa di Asia Tenggara. Negara ini terpisah dari Malaysia oleh Selat Johor di utara, dan dari Kepulauan Riau, Indonesia oleh Selat Singapura di selatan. Singapura adalah pusat keuangan terdepan ketiga di dunia dan sebuah kota dunia kosmopolitan yang memainkan peran penting dalam perdagangan dan keuangan internasional. Pelabuhan Singapura adalah satu dari lima pelabuhan tersibuk di dunia.\r\nSingapura memiliki sejarah imigrasi yang panjang. Penduduknya yang beragam berjumlah kira-kira 6 juta jiwa, terdiri dari Orang Tionghoa, Melayu, India, Arab, berbagai keturunan Asia, dan Kaukasoid. 42% penduduk Singapura adalah orang asing yang bekerja dan menuntut ilmu di sana. Pekerja asing membentuk 50% dari sektor jasa. Negara ini adalah yang terpadat kedua di dunia setelah Monako. A.T. Kearney menyebut Singapura sebagai negara paling terglobalisasi di dunia dalam Indeks Globalisasi tahun 2006.\r\nSebelum merdeka tahun 1965, Singapura adalah pelabuhan dagang yang beragam dengan PDB per kapita $511, tertinggi ketiga di Asia Timur pada saat itu.', 'img/PY8qrToIkarNayJZWYJ5mNdjtdHtt2Ya5zFmPI0L.webp', 1, '2021-12-10 00:10:51', '2021-12-10 00:10:51');

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE `stories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stories`
--

INSERT INTO `stories` (`id`, `title`, `desc`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Singapura', 'Pada 1970-an, reklamasi lahan dilakukan di Marina Bay, membentuk teluk air tawar. Dalam proses reklamasi, beberapa jalan dihilangkan dari peta dengan melakukan reklamasi tanah dan muara Singapore River diarahkan ke teluk bukan langsung ke laut.', 'img/gtX5SXxTRzNrCbBhRmETz3wtjKaqCoMoWMrcp4ho.webp', '2021-12-10 00:16:23', '2021-12-10 00:16:23'),
(3, 'Sydenham Street Art Festival', 'Street Art Festival curated by Global Street Art', NULL, '2021-12-10 00:17:43', '2021-12-10 00:17:43'),
(4, 'Architectural Heritage Awards - 20 Years of Restoration Excellence', 'By Urban Redevelopment Authority\r\nOver two decades ago, after the successful gazette of Singapore\'s Historic Districts, it was felt that best-practices adopted in Government restoration projects would not be sufficient to bring about a positive change in the wider heritage environment. The community also needed to come on board the journey to carry out best-practices in private sector restoration projects. To recognise those who had taken this step to contribute to the well-being of Singapore\'s built heritage,the Urban Redevelopment Authority (URA) presented the very first \"Good Effort\" Award for well restored buildings in 1994.  Inspired by the response, the next year saw an even stronger participation in the first URA\'s Architectural Heritage Awards.', NULL, '2021-12-10 00:19:33', '2021-12-10 00:19:33'),
(6, 'Always in Style: Dresses from 1775 - 1969', 'Highlights from the collection at National Museum of Denmark', NULL, '2021-12-10 01:21:02', '2021-12-10 01:21:02'),
(7, 'Marie Gudme Leth - Pioneer of print', 'Designmuseum Danmark is displaying a number of Marie Gudme Leth’s textile prints and invites all visitors into a colourful universe with a selection of the beautiful patterns.', NULL, '2021-12-10 01:21:23', '2021-12-10 01:21:23'),
(8, 'Hellebæk', 'Kota pantai yang sepi tidak jauh dari Kopenhagen adalah latar sederhana untuk desain Sydney Opera House.', NULL, '2021-12-10 01:21:49', '2021-12-10 01:21:49'),
(9, 'EScultura', 'Discover the works selected in this contest dedicated to contemporary sculpture.', NULL, '2021-12-10 01:27:30', '2021-12-10 01:27:30');

-- --------------------------------------------------------

--
-- Table structure for table `type_places`
--

CREATE TABLE `type_places` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_places`
--

INSERT INTO `type_places` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Country', '2021-12-10 00:07:52', '2021-12-10 00:07:52'),
(2, 'City', '2021-12-10 00:07:52', '2021-12-10 00:07:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'admin@gmail.com', NULL, 1, '$2y$10$93VsmeTDHRIs6nAfl8AT/e4ZlCaUgVGgsgdGOYN/wakBtGcIcNrNe', NULL, '2021-12-10 00:07:53', '2021-12-10 00:07:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_museums`
--
ALTER TABLE `category_museums`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_museums_museum_id_foreign` (`museum_id`),
  ADD KEY `category_museums_place_id_foreign` (`place_id`);

--
-- Indexes for table `category_stories`
--
ALTER TABLE `category_stories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_stories_story_id_foreign` (`story_id`),
  ADD KEY `category_stories_place_id_foreign` (`place_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `museums`
--
ALTER TABLE `museums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`),
  ADD KEY `places_type_place_id_foreign` (`type_place_id`);

--
-- Indexes for table `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_places`
--
ALTER TABLE `type_places`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_museums`
--
ALTER TABLE `category_museums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `category_stories`
--
ALTER TABLE `category_stories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `museums`
--
ALTER TABLE `museums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `type_places`
--
ALTER TABLE `type_places`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_museums`
--
ALTER TABLE `category_museums`
  ADD CONSTRAINT `category_museums_museum_id_foreign` FOREIGN KEY (`museum_id`) REFERENCES `museums` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `category_museums_place_id_foreign` FOREIGN KEY (`place_id`) REFERENCES `places` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `category_stories`
--
ALTER TABLE `category_stories`
  ADD CONSTRAINT `category_stories_place_id_foreign` FOREIGN KEY (`place_id`) REFERENCES `places` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `category_stories_story_id_foreign` FOREIGN KEY (`story_id`) REFERENCES `stories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `places`
--
ALTER TABLE `places`
  ADD CONSTRAINT `places_type_place_id_foreign` FOREIGN KEY (`type_place_id`) REFERENCES `type_places` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
