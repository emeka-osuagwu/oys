<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rents', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('user_id');
			$table->integer('property_id');
			$table->string('description');
			$table->date('expiry');
			$table->float('rent_paid', 10, 0);
			$table->float('actual_rent', 10, 0);
			$table->boolean('status');
			$table->integer('tenor')->nullable()->default(3);
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
		Schema::drop('rents');
	}

}
