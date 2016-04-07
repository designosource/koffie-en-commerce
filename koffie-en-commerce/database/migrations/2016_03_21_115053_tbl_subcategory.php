<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblSubcategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_subcategory', function (Blueprint $table) {
            $table->increments('subcategory_id');
            $table->integer('fk_category_id')->foreign('fk_category_id')->references('category_id')->on('tbl_category');
            $table->string('subcategory_name');
            $table->string('subcategory_description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbl_subcategory');
    }
}
