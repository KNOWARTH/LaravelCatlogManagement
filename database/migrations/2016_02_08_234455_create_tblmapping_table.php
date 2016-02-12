<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblmappingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('tblmapping', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('p_id')->unsigned();
            $table->integer('c_id')->unsigned();
            $table->foreign('p_id')->references('p_id')->on('product');
            $table->foreign('c_id')->references('c_id')->on('category');
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
        Schema::drop('tblmapping');
    }
}
