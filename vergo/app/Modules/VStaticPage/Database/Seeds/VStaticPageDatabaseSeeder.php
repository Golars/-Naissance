<?php
namespace App\Modules\VStaticPage\Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class VStaticPageDatabaseSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// $this->call('App\Modules\VStaticPage\Database\Seeds\FoobarTableSeeder');
	}

}
