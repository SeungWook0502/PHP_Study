<?php
	session_save_path('./session');
	session_start();
	$id = 'aaaa';
	$pwd = 'bbbb';
	if(!empty($_POST['id']) && !empty($_POST['pwd'])){
	    if($_POST['id'] == $id && $_POST['pwd'] == $pwd){
	        $_SESSION['is_login'] = true;
	        $_SESSION['nickname'] = 'SeungWook';
	        header('Location: ./210721_sessWeb.html');
	        exit;
	    }
	}
	echo '로그인 하지 못했습니다.';
?>