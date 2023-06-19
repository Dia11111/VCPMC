<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitsUsedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('units_used', function (Blueprint $table) {
            $table->id();
            $table->string('trang_thai');
            $table->unsignedBigInteger('hop_dong_id');
            $table->unsignedBigInteger('thiet_bi_id');
            $table->unsignedBigInteger('nguoi_dung_id');

            $table->foreign('hop_dong_id')->references('id')->on('hop_dong')->onDelete('cascade');
            $table->foreign('thiet_bi_id')->references('id')->on('thiet_bi')->onDelete('cascade');
            $table->foreign('nguoi_dung_id')->references('id')->on('user')->onDelete('cascade');
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
        Schema::dropIfExists('units_used');
    }
}
