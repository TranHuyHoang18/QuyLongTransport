<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHanghoas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hanghoas', function (Blueprint $table) {
            $table->id();
            $table->text('ten');
            $table->text('donvi');
            $table->text('trongluong');
            $table->integer('id_diemgui');
            $table->integer('id_diemnhan');
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
        Schema::dropIfExists('hanghoas');
    }
}
