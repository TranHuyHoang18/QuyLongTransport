<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTuyendungPages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tuyendung_pages', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('desc');
            $table->text('slug');
            $table->integer('id_category');
            $table->text('image');
            $table->text('date');
            $table->integer('status');
            $table->integer('views');
            $table->integer('comments');
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
        Schema::dropIfExists('tuyendung_pages');
    }
}
