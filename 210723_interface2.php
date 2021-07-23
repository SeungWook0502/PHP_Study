<?php 
	require_once 'C:\Bitnami\wampstack-8.0.8-0\apache2\htdocs\library\vendor\autoload.php';

	use Monolog\Logger;
	use Monolog\Handler\StreamHandler;
	// use Monolog\Handler\NativeMailerHandler;

	$log = new Logger('name');
	$log ->pushHandler(new StreamHandler(__DIR__.'/app.log',Logger::WARNING));
	// $log->pushHandler(new StreamHandler(__DIR__ . '/app.log', Logger::ERROR));
	// $log->pushHandler(new NativeMailerHandler(
	//     'egoing@gmail.com',
	//     'Emergence!!!!',
	//     'out@system.com',
	//     Logger::EMERGENCY));
	 
	$log->warning('EGO');
	$log->error('ING');
	// $log->emergency('emergency');
 ?>