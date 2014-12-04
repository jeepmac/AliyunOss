<?php namespace Kisay\AliyunOss;

use Illuminate\Support\ServiceProvider;

class AliyunOssServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('kisay/aliyun-oss');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->booting(function()
		{
			$loader = \Illuminate\Foundation\AliasLoader::getInstance();
			$loader->alias('AliyunOss', 'Kisay\AliyunOss\Facades\AliyunOss');
		});

		$this->app['aliyunoss'] = $this->app->share(function($app)
		{
			return new AliyunOss;
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
