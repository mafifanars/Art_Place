<?php

namespace Database\Seeders;

use App\Models\Art;
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
            'category_name' => 'City'
        ]);

        Category::create([
            'category_name' => 'Country'
        ]);

        Type::create([
            'type_name' => 'Statue'
        ]);

        Type::create([
            'type_name' => 'Painting'
        ]);

        Artist::create([
            'artist_name' => 'Pertama',
            'desc' => 'Ini adalah seniman pertama di Google Art kami',
            'date_dead' => '2021-12-02',
            'birthdate' => '2021-12-02'
        ]);

        Artist::create([
            'artist_name' => 'Kedua',
            'desc' => 'Ini adalah seniman kedua di Google Art kami',
            'date_dead' => '2021-12-02',
            'birthdate' => '2021-12-02'
        ]);

        Art::create([
            'type_id' => 1,
            'artist_id' => 2,
            'art_title' => 'Ini adalah judul pertama art',
            'image' => 'poto.jpg',
            'date_created' => '2021-12-02'

        ]);

        Art::create([
            'type_id' => 2,
            'artist_id' => 1,
            'art_title' => 'Ini adalah judul kedua art',
            'image' => 'poto.jpg',
            'date_created' => '2021-12-02'
        ]);

        Museum::create([
            'art_id' => 2,
            'place_name' => 'Ini adalah nama pertama museum',
            'image' => 'poto.jpg'
        ]);

        Museum::create([
            'art_id' => 1,
            'place_name' => 'Ini adalah nama kedua museum',
            'image' => 'poto.jpg'
        ]);

        Story::create([
            'story_title' => 1,
            'story_title' => 'Ini adalah nama pertama museum',
            'image' => 'poto.jpg',
            'desc' => 'ini adalah deskripsi singakt kami',
        ]);

        Story::create([
            'story_title' => 'Ini adalah nama kedua museum',
            'image' => 'poto.jpg',
            'desc' => 'ini adalah deskripsi singakt kami',
        ]);

        Place::create([
            'category_id' => 1,
            'museum_id' => 2,
            'story_id' => 1,
            'place_name' => 'ini adalah nama tempat',
            'desc' => 'ini adalah deskripsi singakt kami ttg tempat',
            'image' => 'poto.jpg',
        ]);

        Place::create([
            'category_id' => 2,
            'museum_id' => 1,
            'story_id' => 1,
            'place_name' => 'ini adalah nama tempat',
            'desc' => 'ini adalah deskripsi singakt kami ttg tempat',
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

    }
}
