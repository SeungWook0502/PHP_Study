<!-- mysql_connect() //접속
mysql_select_db() //DB선택
mysql_query() //SQL 테이블제어 -->
<?php

$conn = mysqli_connect('localhost', 'root', '12341234', 'opentutorials');
$list_result = mysqli_query($conn, 'SELECT * FROM topic');

if(!empty($_GET['id'])) {
$topic_result = mysqli_query($conn, 'SELECT * FROM topic WHERE id = '.mysqli_real_escape_string($conn, $_GET['id']));
$topic = mysqli_fetch_array($topic_result);
}
  	
?>