<?php
namespace App\Modules\VergoBase\Providers;

use Caffeinated\Modules\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Routing\Router;

class RouteServiceProvider extends ServiceProvider
{
	protected $moduleName = 'vergo_base';
	protected $assetsPath = 'assets/vergo/';
	/**
	 * This namespace is applied to the controller routes in your module's routes file.
	 *
	 * In addition, it is set as the URL generator's root namespace.
	 *
	 * @var string
	 */
	protected $namespace = 'App\Modules\VergoBase\Http\Controllers';

	/**
	 * Define your module's route model bindings, pattern filters, etc.
	 *
	 * @param  \Illuminate\Routing\Router $router
	 * @return void
	 */
	public function boot(Router $router)
	{
		$this->initAssets();
		$router->middleware('authenticate',  \App\Modules\VergoBase\Http\Middleware\Authenticate::class);
		$router->middleware('AdminAuth',  \App\Modules\VergoBase\Http\Middleware\AdminAuth::class);
		$router->middleware('AdminAuthenticate',  \App\Modules\VergoBase\Http\Middleware\AdminAuthenticate::class);
		$router->middlewareGroup('webAdmin', [
			\App\Http\Middleware\EncryptCookies::class,
			\Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
			\Illuminate\Session\Middleware\StartSession::class,
			\Illuminate\View\Middleware\ShareErrorsFromSession::class,
		]);
		parent::boot($router);
	}

	protected function initAssets(){
		$this->publishes([
			__DIR__.'/../Resources/Assets' => public_path($this->assetsPath),
		], $this->moduleName);

		$this->app->bind('vergo_base.assets', function() {
			return new Module($this->assetsPath);
		});

		$this->app->bind('logo', function() {
			return (new Module($this->assetsPath))->getPath('images/logo.png');
		});
	}

	/**
	 * Define the routes for the module.
	 *
	 * @param  \Illuminate\Routing\Router $router
	 * @return void
	 */
	public function map(Router $router)
	{
		$router->group(['namespace' => $this->namespace], function($router)
		{
			require (config('modules.path').'/VergoBase/Http/routes.php');
		});
	}
}
