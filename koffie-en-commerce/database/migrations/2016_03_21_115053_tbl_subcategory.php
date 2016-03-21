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
            $table->integer('subcategory_category_id')->foreign('subcategory_category_id')->references('category_id')->on('tbl_scategory');
            $table->string('subcategory_name');
            $table->string('subcategory_description');
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
        Schema::drop('tbl_subcategory');
    }
}
