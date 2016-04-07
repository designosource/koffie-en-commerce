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
            $table->string('speaker_name');
            $table->string('speaker_title');
            $table->string('speaker_email');
            $table->string('speaker_image');
            $table->string('speaker_description');
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
