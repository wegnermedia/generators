<?php namespace Wegnermedia\Generators;

use Illuminate\Support\ServiceProvider;

class GeneratorsServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->registerHelloWorld();
	}

	/**
	 * Register the make:seed generator.
	 */
	private function registerHelloWorld()
	{
		$this->app->singleton('command.wegnermedia.hello', function ($app) {
			return $app['Wegnermedia\Generators\Commands\HelloCommand'];
		});

		$this->commands('command.wegnermedia.hello');
	}

}
