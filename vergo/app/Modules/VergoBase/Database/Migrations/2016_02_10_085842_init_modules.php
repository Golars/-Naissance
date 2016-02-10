<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InitModules extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('modules', function (Blueprint $table) {
			$table->increments("id");
			$table->string("name")->unique();
			$table->string('info');
			$table->string('version')->default(0);
			$table->string('install_version')->default(0);
			$table->tinyInteger('isAdmin')->unsigned()->default(0);
			$table->tinyInteger('status')->unsigned()->default(0);
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
		Schema::dropIfExists('table_name');
	}
}
