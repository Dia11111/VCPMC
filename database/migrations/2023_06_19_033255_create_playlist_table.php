<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaylistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playlist', function (Blueprint $table) {
            $table->id();
            $table->string('anh_bia');
            $table->string('tieu_de');
            $table->unsignedInteger('tong_so')->default(0);
            $table->unsignedInteger('tong_thoi_luong')->default(0);
            $table->text('mo_ta')->nullable();
            $table->string('chu_de')->nullable();
            $table->string('che_do')->nullable();
            $table->unsignedBigInteger('ban_ghi_id');

            $table->foreign('ban_ghi_id')->references('id')->on('records')->onDelete('cascade');
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
        Schema::dropIfExists('playlist');
    }
}
