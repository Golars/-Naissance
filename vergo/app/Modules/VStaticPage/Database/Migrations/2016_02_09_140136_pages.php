<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pages extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('pages');
		Schema::create('pages', function (Blueprint $table) {
			$table->increments("id");
			$table->string("url");
			$table->string("name");
			$table->longText("text");
			$table->timestamps();
			$table->tinyInteger("status")->default(0);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('pages');
	}
}
