<?php 
	require_once './vendor/autoload.php';

	use Monolog\Logger;
	use Monolog\Handler\StreamHandler;
	use Monolog\Handler\NativeMailerHandler;

	$log = new Logger('name');
	$log ->pushHandler(new StreamHandler(__DIR__.'/app.log',Logger::ERROR));
	$log ->pushHandler(new NativeMailerHandler('wjstmdnr@gmail.com', 'Hello', 'wjstmdnr@naver.com', Logger::EMERGENCY));

	$log->warning('WARNING');
	$log->error('ERROR');
	$log->emergency('EMERGENCY');

	//WARNING < ERROR
 ?>