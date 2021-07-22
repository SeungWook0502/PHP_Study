<?php
	session_save_path('./session'); //session store path
	session_start(); //seesion start method == header
	$_SESSION['title'] = '생활코딩2'; //
?>