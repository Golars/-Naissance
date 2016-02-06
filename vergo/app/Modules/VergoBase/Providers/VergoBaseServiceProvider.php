<?php
namespace App\Modules\VergoBase\Providers;

use App;
use Config;
use Lang;
use View;
use Illuminate\Support\ServiceProvider;

class VergoBaseServiceProvider extends ServiceProvider
{
	/**
	 * Register the VergoBase module service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		// This service provider is a convenient place to register your modules
		// services in the IoC container. If you wish, you may make additional
		// methods or service providers to keep the code more focused and granular.
		App::register('App\Modules\VergoBase\Providers\RouteServiceProvider');

		$this->registerNamespaces();
	}

	/**
	 * Register the VergoBase module resource namespaces.
	 *
	 * @return void
	 */
	protected function registerNamespaces()
	{
		Lang::addNamespace('vergo_base', realpath(__DIR__.'/../Resources/Lang'));

		View::addNamespace('vergo_base', base_path('resources/views/vendor/vergo_base'));
		View::addNamespace('vergo_base', realpath(__DIR__.'/../Resources/Views'));
	}
}
