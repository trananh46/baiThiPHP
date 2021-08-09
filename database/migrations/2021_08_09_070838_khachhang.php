<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Khachhang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khachhang', function (Blueprint $khachhang) {
            $khachhang->increments('maKhachHang');
            $khachhang->text('anhDaiDien');
            $khachhang->string('hoTen', 50);
            $khachhang->boolean('gioiTinh');
            $khachhang->char('sđt', 10);
            $khachhang->text('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('khachhang');
    }
}
