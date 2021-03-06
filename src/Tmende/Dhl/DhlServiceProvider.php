<?php namespace Tmende\Dhl;

use Illuminate\Support\ServiceProvider;
use Tmende\Dhl\Shipping\BusinessCustomShipping;
use Tmende\Dhl\Shipping\PrivateCustomShipping;
use Tmende\Dhl\ShipmentTracking\ShipmentTracking;
use Tmende\Dhl\LocationSearch\LocationSearch;
use Tmende\Dhl\Validators\DhlValidator;
use Tmende\Dhl\Commands\DhlCommand;
use Tmende\Dhl\Commands\InstallCommand;

class DhlServiceProvider extends ServiceProvider {

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
		$this->package('tmende/dhl');

		$this->app->validator->extend('trackingcode', 'DhlValidator@validateTrackingcode');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->registerBusinessCustomShipping();
		$this->registerPrivateCustomShipping();
		$this->registerShipmentTracking();
		$this->registerLocationSearch();
		$this->registerDhl();
		$this->registerCommands();
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('dhl', 'shipmenttracking');
	}

	/**
    * Register the commands.
    *
    * @return void
    */
  	public function registerCommands() {
	    $this->registerDhlCommand();
	    $this->registerInstallCommand();

	    // Resolve the commands with Artisan by attaching the event listener to Artisan's
	    // startup. This allows us to use the commands from our terminal.
	    $this->commands('command.dhl', 'command.dhl.install');
	}

	/**
	* Register the 'dhl' command.
  	*
	* @return void
	*/
	protected function registerDhlCommand() {
   		$this->app['command.dhl'] = $this->app->share(function($app) {
    		return new DhlCommand();
    	});
  	}

  	/**
	* Register the 'dhl.install' command.
  	*
	* @return void
	*/
	protected function registerInstallCommand() {
   		$this->app['command.dhl.install'] = $this->app->share(function($app) {
    		return new InstallCommand();
    	});
  	}

	/**
	 * Register the Business Custom Shipping
	 *
	 * @return void
	 */
	protected function registerBusinessCustomShipping()
	{
		$this->app['businesscustomshipping'] = $this->app->share(function($app)
		{
			return new BusinessCustomShipping;
		});

		$this->app->booting(function()
	    {
	      $loader = \Illuminate\Foundation\AliasLoader::getInstance();
	      $loader->alias('businesscustomshipping', 'Tmende\Dhl\Facades\BusinessCustomShipping');
	    });
	}

	/**
	 * Register the Private Custom Shipping
	 *
	 * @return void
	 */
	protected function registerPrivateCustomShipping()
	{
		$this->app['privatecustomshipping'] = $this->app->share(function($app)
		{
			return new PrivateCustomShipping;
		});

		$this->app->booting(function()
	    {
	      $loader = \Illuminate\Foundation\AliasLoader::getInstance();
	      $loader->alias('privatecustomshipping', 'Tmende\Dhl\Facades\PrivateCustomShipping');
	    });
	}

	/**
	 * Register the Shipment Tracking
	 *
	 * @return void
	 */
	protected function registerShipmentTracking()
	{
		$this->app['shipmenttracking'] = $this->app->share(function($app)
		{
			return new ShipmentTracking;
		});

		$this->app->booting(function()
	    {
	      $loader = \Illuminate\Foundation\AliasLoader::getInstance();
	      $loader->alias('shipmenttracking', 'Tmende\Dhl\Facades\ShipmentTracking');
	    });
	}

	/**
	 * Register the Location Search
	 *
	 * @return void
	 */
	protected function registerLocationSearch()
	{
		$this->app['locationsearch'] = $this->app->share(function($app)
		{
			return new LocationSearch;
		});

		$this->app->booting(function()
	    {
	      $loader = \Illuminate\Foundation\AliasLoader::getInstance();
	      $loader->alias('locationsearch', 'Tmende\Dhl\Facades\LocationSearch');
	    });
	}

	/**
	 * Takes all the components of DHL and glues them
	 * together to create DHL.
	 *
	 * @return void
	 */
	protected function registerDhl()
	{
		$this->app['dhl'] = $this->app->share(function($app)
		{
			return new Dhl();
		});

		$this->app->alias('dhl', 'Tmende\Dhl\Dhl');
	}

}
