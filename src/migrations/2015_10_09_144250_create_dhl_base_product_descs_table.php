<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDhlBaseProductDescsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dhl_base_product_descs', function(Blueprint $table) {

			$table->increments('id');
    		$table->boolean('hidden');
    		$table->string('symbols', 100)->nullable();
    		$table->string('order_key', 100)->nullable();
    		$table->double('cp71limit')->nullable();
    		$table->double('cp2223limit')->nullable();
    		$table->string('send_country', 3)->nullable();
    		$table->integer('max_length')->nullable();
    		$table->integer('min_length')->nullable();
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
		Schema::drop('dhl_base_product_descs');
	}

}
