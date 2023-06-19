<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->string('ten_ban_ghi');
            $table->string('ma_isrc');
            $table->string('tac_gia');
            $table->string('ca_si');
            $table->string('the_loai');
            $table->string('nha_san_xuat');
            $table->string('file_dinh_kem_ban_ghi')->nullable();
            $table->string('file_dinh_kem_loi_bai_hat')->nullable();
            $table->unsignedBigInteger('hop_dong_id');
            $table->unsignedBigInteger('phe_duyet_id');
            $table->timestamps();

            $table->foreign('hop_dong_id')->references('id')->on('contracts')->onDelete('cascade');
            $table->foreign('phe_duyet_id')->references('id')->on('approvals')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('records');
    }
}
