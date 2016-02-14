<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Http\Modules\User\Models\User;
use App\Modules\VergoBase\Database\Models\Role;

class InitTables extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('users');
		Schema::dropIfExists('password_resets');
		Schema::dropIfExists('roles');

		Schema::create('users', function (Blueprint $table) {
			$table->increments('id');
			$table->string('first_name');
			$table->string('last_name');
			$table->integer('file_cover_id');
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->string('login')->unique();
			$table->tinyInteger('role_id')->unsigned()->default(0);
			$table->rememberToken();
			$table->timestamps();
		});
		Schema::create('password_resets', function (Blueprint $table) {
			$table->string('email')->index();
			$table->string('token')->index();
			$table->timestamp('created_at');
		});
		Schema::create("roles", function (Blueprint $table) {
			$table->increments('id');
			$table->string('name')->unique();
			$table->tinyInteger('is_admin')->default(0)->unsigned();
			$table->tinyInteger('status')->default(1)->unsigned();
		});

		Role::create(['id' => 1,  'name'=> "User"]);
		Role::create(['id' => 2,  'name'=>"Moderator", 'is_admin'=> 1]);
		Role::create(['id' => 3,  'name'=>"Admin", 'is_admin' => 1]);
		User::create([
			'email' 		=> 'titorens@gmail.com',
			'login' 		=> 'Vergo',
			'first_name'	=> 'God',
			"last_name"		=> 'Admin',
			"password" 		=> '1q2w3e4r',
			"role"			=> 3
		]);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('users');
		Schema::dropIfExists('password_resets');
		Schema::dropIfExists('roles');
	}
}
