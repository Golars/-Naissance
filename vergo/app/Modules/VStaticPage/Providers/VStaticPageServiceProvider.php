<?php
namespace App\Modules\VStaticPage\Providers;

use App;
use Config;
use Lang;
use View;
use Illuminate\Support\ServiceProvider;

class VStaticPageServiceProvider extends ServiceProvider
{
	/**
	 * Register the VStaticPage module service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		// This service provider is a convenient place to register your modules
		// services in the IoC container. If you wish, you may make additional
		// methods or service providers to keep the code more focused and granular.
		App::register('App\Modules\VStaticPage\Providers\RouteServiceProvider');

		$this->registerNamespaces();
	}

	/**
	 * Register the VStaticPage module resource namespaces.
	 *
	 * @return void
	 */
	protected function registerNamespaces()
	{
		Lang::addNamespace('v_static_page', realpath(__DIR__.'/../Resources/Lang'));

		View::addNamespace('v_static_page', base_path('resources/views/vendor/v_static_page'));
		View::addNamespace('v_static_page', realpath(__DIR__.'/../Resources/Views'));
	}
}
