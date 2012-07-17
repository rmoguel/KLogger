<?php
// lets us execute the tests from any directory
define('ROOT_DIR',realpath(dirname(__FILE__)."/../"));

include_once(ROOT_DIR.'/src/TLogger.php');
include_once(ROOT_DIR.'/lib/EnhanceTestFramework.php');

class TLoggerTests extends \Enhance\TestFixture
{
	private $log = null;

	public function setUp()
	{
		$this->log = new TLogger('tlogger-tests.log');
	}

	public function tearDown()
	{
		unlink($this->log->getLogFilePath());
	}

	public function smokeTest()
	{
		$this->log->debug("I'm a debug statement");
		$this->log->info("I'm a info statement");
		$this->log->warn("I'm a war statement");
		$this->log->error("I'm a error statement");
		$this->log->fatal("I'm a fatal statement");
	}

	public function smokeTestWithParams()
	{
		$debug = array("Luke"=>"Skywalker");
		$this->log->debug("I'm a debug statement", $debug);
		$this->log->info("I'm a info statement", $debug);
		$this->log->warn("I'm a war statement", $debug);
		$this->log->error("I'm a error statement", $debug);
		$this->log->fatal("I'm a fatal statement", $debug);
	}
}

// Run the tests
\Enhance\Core::runTests();

?>
