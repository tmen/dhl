<?php namespace Tmende\Dhl\Commands;

use Illuminate\Console\Command;

class InstallCommand extends Command {

	/**
	* The console command name.
	*
	* @var string
	*/
	protected $name = 'dhl:install';

	/**
	* Execute the console command.
	*
	* dump-autoload for the entire
	* framework to make sure that the new classes are registered by the class
	* loaders.
 	*
 	* @return void
	*/
	public function fire() {
		$this->call('migrate', ['--package' => 'tmende/dhl']);
		$this->line("<fg=green;options=bold>created dhl_products table</fg=green;options=bold>");
    	$this->call('dump-autoload');
  	}
}