<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Posts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('posts', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('judul');
        $table->integer('category_id');
        $table->text('content');
        $table->string('gambar');
        $table->integer('slug');
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
        //
    }
}
