<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_phim');
            $table->string('dao_dien');
            $table->json('dien_vien');
            $table->string('the_loai');
            $table->string('quoc_gia');
            $table->string('thoi_luong');
            $table->date('name_phat_hanh');
            $table->json('nguoi_san_xuat');
            $table->string('hang_phim');
            $table->string('status');
            $table->text('gioi_thieu_phim');
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
        Schema::dropIfExists('films');
    }
}
