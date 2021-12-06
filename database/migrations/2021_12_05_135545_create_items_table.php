<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->unsignedbiginteger('place_id');
            $table->foreign('place_id')->references('id')->on('places')->onDelete('restrict');
            $table->unsignedbiginteger('museum_id');
            $table->foreign('museum_id')->references('id')->on('museums')->onDelete('restrict');
            $table->unsignedbiginteger('story_id');
            $table->foreign('story_id')->references('id')->on('stories')->onDelete('restrict');
            $table->unsignedbiginteger('art_id');
            $table->foreign('art_id')->references('id')->on('art')->onDelete('restrict');
            $table->unsignedbiginteger('artist_id');
            $table->foreign('artist_id')->references('id')->on('artists')->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
