<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMiningContractTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mining_contract', function (Blueprint $table) {
            $table->id();
            $table->string('so_hop_dong');
            $table->string('ten_hop_dong');
            $table->string('nguoi_uy_quyen');
            $table->integer('hieu_luc_hop_dong');
            $table->string('file_dinh_kem')->nullable();
            $table->string('loai_hop_dong');
            $table->string('phap_nhan_uy_quyen');
            $table->string('ten_nguoi_uy_quyen');
            $table->string('gioi_tinh');
            $table->date('ngay_sinh');
            $table->string('quoc_tich');
            $table->string('so_dien_thoai');
            $table->string('cmnd');
            $table->date('ngay_cap');
            $table->string('noi_cap');
            $table->string('ma_so_thue');
            $table->string('noi_cu_tru');
            $table->string('email');
            $table->unsignedBigInteger('ten_dang_nhap');
            $table->foreign('ten_dang_nhap')->references('id')->on('users');
            $table->string('mat_khau');
            $table->string('stk_ngan_hang');
            $table->string('ngan_hang');
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
        Schema::dropIfExists('mining_contract');
    }
}
