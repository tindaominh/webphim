<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmReviewssTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('film_reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_phim')->unsigned();
            $table->integer('so_luot_danh_gia');
            $table->timestamps();

            $table->foreign('id_phim')->references('id')->on('films')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('film_reviews');
    }
}
