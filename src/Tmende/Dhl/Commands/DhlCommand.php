<?php namespace Tmende\Dhl\Commands;

use Illuminate\Console\Command;

class DhlCommand extends Command {

	/**
   * The console command name.
   *
   * @var string
   */
  protected $name = 'dhl';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'Get DHL-Laravel version notice.';

  /**
   * Execute the console command.
   *
   * @return void
   */
  public function fire() {
      $this->line('<info>DHL-Laravel</info>');
      $this->line('Laravel implementation of the DHL API.');
      $this->line('<comment>Copyright (c) 2015 Thorben MEnde</comment>');
  }

}