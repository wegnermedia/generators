<?php namespace Wegnermedia\Generators\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;

class HelloCommand extends Command
{
	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'generate:hello';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Say Hello';

	public function handle()
	{
		$this->comment('Hello World');
	}
}
