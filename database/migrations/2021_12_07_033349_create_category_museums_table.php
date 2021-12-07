<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryMuseumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_museums', function (Blueprint $table) {
            $table->id();
            $table->unsignedbiginteger('museum_id');
            $table->foreign('museum_id')->references('id')->on('museums')->onDelete('restrict');
            $table->unsignedbiginteger('place_id');
            $table->foreign('place_id')->references('id')->on('places')->onDelete('restrict');
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
        Schema::dropIfExists('category_museums');
    }
}
