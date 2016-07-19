<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaymentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('payments', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('user_id');
			$table->integer('rent_id')->nullable()->default(0);
			$table->integer('mysaving_id')->default(0);
			$table->float('amount', 10, 0);
			$table->string('reference');
			$table->date('paydate');
			$table->boolean('status');
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
		Schema::drop('payments');
	}

}
