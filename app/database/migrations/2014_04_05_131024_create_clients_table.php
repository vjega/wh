<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clients', function(Blueprint $table)
		{
			$table->increments('id'); //Client Code
			$table->string('name', 50);
			$table->string('country_code',3);
			$table->string('city',50);
			$table->string('address',300);
			$table->string('fax_no',20);
			$table->string('tel_no',20);
			$table->string('postal_code',20);
			$table->string('contact_name',50);
 			$table->decimal('credit_limit',10,2);
 			$table->string('payment_terms',20);
 			$table->string('biz_hours',20);
 			$table->string('party_service_level',30);
			$table->string('service_provided',30);
			$table->dateTime('created_at');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('clients');
	}

}
