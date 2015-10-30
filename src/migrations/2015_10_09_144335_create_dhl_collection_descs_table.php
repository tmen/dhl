<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDhlCollectionDescsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dhl_collection_descs', function(Blueprint $table) {

			$table->increments('id');
    		$table->string('pickup_free_hint', 100)->nullable();
    		$table->string('features', 100)->nullable();
    		$table->string('attributes', 100)->nullable();
    		$table->string('display_name', 255)->nullable();
    		$table->text('display_description')->nullable();
    		$table->string('name', 100);
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
		Schema::drop('dhl_product_descs');
	}

}
