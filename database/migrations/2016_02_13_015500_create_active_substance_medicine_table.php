<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActiveSubstanceMedicineTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('active_substance_medicine', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('medicine_id')->unsigned();
			$table->integer('active_substance_id')->unsigned();

			$table->foreign('medicine_id')->references('id')->on('medicines');
			$table->foreign('active_substance_id')->references('id')->on('active_substances');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('active_substance_medicine');
	}
}
