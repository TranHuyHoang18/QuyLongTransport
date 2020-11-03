<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYeucaus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yeucaus', function (Blueprint $table) {
            $table->id();
            $table->integer('id_hanghoa');
            $table->integer('id_khachhang');
            $table->text('dichvu');
            $table->text('yeucaulayhang');
            $table->text('yeucaugiaohanghang');
            $table->integer('id_nguoitiepnhan');
            $table->text('ghichu');
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
        Schema::dropIfExists('yeucaus');
    }
}
