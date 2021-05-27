<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableSinhvien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sinhvien', function (Blueprint $table) {
            $table->id();
            $table->string('masv',5);
            $table->string('hoten',40);
            $table->string('ngaysinh',10);
            $table->string('gioitinh',3);
            $table->unsignedBigInteger('id_nganh');
            $table->foreign('id_nganh')->references('id')->on('nganh');
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
        Schema::dropIfExists('sinhvien');
    }
}
