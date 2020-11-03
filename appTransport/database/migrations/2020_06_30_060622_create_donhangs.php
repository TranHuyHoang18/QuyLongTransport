<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonhangs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donhangs', function (Blueprint $table) {
            $table->id();
            $table->text('madonhang');
            $table->text('info_nguoinhan');
            $table->text('id_nguoigui');
            $table->text('info_hanghoa');
            $table->text('dichvu');
            $table->text('thuhoibienban');
            $table->text('thuho');
            $table->text('ghichu');
            $table->text('time_giao');
            $table->text('status');
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
        Schema::dropIfExists('donhangs');
    }
}
