<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDhlProductDescsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dhl_product_descs', function(Blueprint $table) {

			$table->increments('id');
    		$table->boolean('hidden');
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
    		$table->boolean('no_packstation');
    		$table->string('license_plate_type', 100)->nullable();
    		$table->enum('routing_code_type', array('RC', 'LC'))->nullable();
    		$table->string('product_key', 100)->nullable();
    		$table->string('leitcode_product_code', 100)->nullable();
    		$table->string('number_range_name', 100)->nullable();
    		$table->string('svgt_label', 100)->nullable();
    		$table->string('amsel_product_key', 100)->nullable();
    		$table->string('send_country', 100)->nullable();
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
