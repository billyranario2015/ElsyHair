<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->string('image'); 
            $table->integer('stock');
            $table->integer('amount');
            $table->string('color');
            $table->string('dimension')->nullable();
            $table->integer('ordered')->default(0);
            $table->integer('sort')->default(0);
            $table->integer('popular')->nullable();
            $table->integer('active')->default(1);
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
		Schema::drop('products');
	}

}
