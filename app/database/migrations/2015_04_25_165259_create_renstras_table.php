<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRenstrasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('renstra', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('sasaran');
			$table->text('tujuan');
			$table->text('indikator');
			$table->text('kegiatan');
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
		Schema::drop('renstra');
	}

}