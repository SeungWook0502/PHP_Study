<?php
	ini_set("display_errors", "1");
	session_save_path('./session');
	session_start();
	echo $_SESSION['title'];
	echo "<br />".'./session/sess_'.session_id().".txt";
	// echo file_get_contents('C:/Bitnami/wampstack-8.0.8-0/apache2/htdocs/PHP_Study/session/sess_'.session_id().".txt"); //확장자 없는 파일은 읽지 못함.
	$target = include('./session/sess_'.session_id().".txt");
	echo $target;
	//http://localhost/PHP_Study/210721_session2.php?PHPSESSID=6g3hn2uqb39gg1o0339ioqjfle //PHPSESSIONID parameter로 넘기기
?>