<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblVideo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_video', function (Blueprint $table) {
            $table->increments('video_id');
            $table->integer('video_speaker_id')->foreign('speaker_id')->references('speaker_id')->on('tbl_speaker');
            $table->integer('video_category_id')->foreign('video_category_id')->references('category_id')->on('tbl_category');
            $table->string('video_title');
            $table->string('video_description');
            $table->string('video_url');
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
        Schema::drop('tbl_video');
    }
}
