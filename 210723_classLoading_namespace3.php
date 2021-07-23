<?php 
	spl_autoload_register(function($path){
		echo $path."<br>";
		$path=$path.'.php';
		echo "path : ".$path;
		require_once $path;
	});
 ?>