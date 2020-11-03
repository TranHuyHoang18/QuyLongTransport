<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDichvupages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dichvupages', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('tag');
            $table->text('image');
            $table->text('slug');
            $table->text('desc');
            $table->text('category');
            $table->integer('views');
            $table->integer('comments');
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
        Schema::dropIfExists('dichvupages');
    }
}
