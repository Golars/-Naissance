<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Modules\VergoBase\Database\Models\Module;

class InitModules extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('modules');
		Schema::create('modules', function (Blueprint $table) {
			$table->increments("id");
			$table->string("name")->unique();
			$table->string('info');
			$table->string('version')->default(0);
			$table->string('install_version')->default(0);
			$table->tinyInteger('status')->unsigned()->default(0);
			$table->timestamps();
		});

		Module::create([
			'name'				=> 'VergoBase',
			'info' 				=> 'Is a base Vergo Model with User Roles and Modules skillet',
			'version' 			=> 1,
			'install_version' 	=> 1,
			'status' 			=> 1
		]);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('modules');
	}
}
