<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuucucs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buucucs', function (Blueprint $table) {
            $table->id();
            $table->text('code');
            $table->text('name');
            $table->text('slug');
            $table->text('address');
            $table->text('id_tinh');
            $table->text('phone');
            $table->text('location');
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
        Schema::dropIfExists('buucucs');
    }
}
