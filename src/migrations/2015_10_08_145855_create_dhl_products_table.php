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
    		$table->string('name', 40);
    		$table->string('product_group', 40);
    		$table->unsignedInteger('base_product')->nullable()->index();
    		$table->string('service', 50);
    		$table->string('send_country', 3);
    		$table->integer('max_depth')->nullable();
    		$table->integer('min_depth')->nullable();
    		$table->integer('max_diameter')->nullable();
    		$table->integer('min_diameter')->nullable();
    		$table->integer('max_gurtmass')->nullable();
    		$table->integer('min_gurtmass')->nullable();
    		$table->integer('max_weigth')->nullable();
    		$table->integer('min_weigth')->nullable();
    		$table->integer('max_width')->nullable();
    		$table->integer('min_width')->nullable();

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
