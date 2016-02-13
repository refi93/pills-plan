<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActiveSubstanceActiveSubstanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('active_substance_active_substance', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('active_substance_1_id')->unsigned();
			$table->integer('active_substance_2_id')->unsigned();
//http://stackoverflow.com/questions/33803031/laravel-5-1-multiple-many-to-many-relationship-on-the-same-model
			$table->foreign('active_substance_1_id')->references('id')->on('active_substances');
			$table->foreign('active_substance_2_id')->references('id')->on('active_substances');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::drop('active_substance_active_substance');
    }
}
