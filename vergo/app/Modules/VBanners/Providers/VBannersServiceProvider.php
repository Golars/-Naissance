<?php
namespace App\Modules\VBanners\Providers;

use App;
use Config;
use Lang;
use View;
use Illuminate\Support\ServiceProvider;

class VBannersServiceProvider extends ServiceProvider
{
	/**
	 * Register the VBanners module service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		// This service provider is a convenient place to register your modules
		// services in the IoC container. If you wish, you may make additional
		// methods or service providers to keep the code more focused and granular.
		App::register('App\Modules\VBanners\Providers\RouteServiceProvider');

		$this->registerNamespaces();
	}

	/**
	 * Register the VBanners module resource namespaces.
	 *
	 * @return void
	 */
	protected function registerNamespaces()
	{
		Lang::addNamespace('v_banners', realpath(__DIR__.'/../Resources/Lang'));

		View::addNamespace('v_banners', base_path('resources/views/vendor/v_banners'));
		View::addNamespace('v_banners', realpath(__DIR__.'/../Resources/Views'));
	}
}
