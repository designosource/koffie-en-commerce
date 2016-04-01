<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblSpeaker extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_speaker', function (Blueprint $table) {
            $table->increments('speaker_id');
            $table->integer('speaker_video_id')->foreign('speaker_video_id')->references('video_id')->on('tbl_video');
            $table->string('speaker_name');
            $table->string('speaker_title');
            $table->string('speaker_email');
            $table->string('speaker_image');
            $table->string('speaker_description');
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
        Schema::drop('tbl_speaker');
    }
}
