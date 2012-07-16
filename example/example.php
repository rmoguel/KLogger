<?php

# Should log to the same directory as this file
require dirname(__FILE__) . '/../src/TLogger.php';

$log   = TLogger::instance(dirname(__FILE__), TLogger::DEBUG);
$args1 = array('a' => array('b' => 'c'), 'd');
$args2 = NULL;

$log->info('Info Test');
$log->warn('Warn Test');
$log->error('Error Test');
$log->fatal('Fatal Test');

$log->info('Testing passing an array or object', $args1);
$log->warn('Testing passing a NULL value', $args2);
