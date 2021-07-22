<?php
ini_set("display_errors", "1");
session_start();
session_destroy(); //session에 저장된 session데이터가 삭제된다.
header('Location: ./210721_sessLogin.html'); //redirection : url fowarding
?>