<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCashoutsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cashouts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->nullable();
			$table->integer('rent_id')->nullable()->default(0);
			$table->integer('mysaving_id')->nullable();
			$table->float('amount', 10, 0)->nullable();
			$table->integer('status')->nullable();
			$table->date('paydate')->nullable();
			$table->date('created_at')->nullable();
			$table->date('updated_at')->nullable();
			$table->date('deleted_at')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cashouts');
	}

}
