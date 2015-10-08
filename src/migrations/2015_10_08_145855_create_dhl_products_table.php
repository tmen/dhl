<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDhlProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dhl_products', function(Blueprint $table) {

    		$table->increments('id');
    		$table->integer('parent_id')->nullable()->index();
    		$table->integer('lft')->nullable()->index();
    		$table->integer('rgt')->nullable()->index();
    		$table->integer('depth')->nullable();

    		$table->timestamps();
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dhl_products');
	}

}
