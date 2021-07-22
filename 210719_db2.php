<?php

	$mysqli = new mysqli('localhost', 'root', '12341234', 'opentutorials');
	if($mysqli->connect_errno){
		echo '[MySQL 연결 오류]';
	}else{
		echo '[MySQL 연결 성공]'."<br />mode : ".$_POST['mode']."<br />Title : ".$_POST['title']."<br />Description : ".$_POST['description']."<br />";
	}

	$query = '';
	switch ($_POST['mode']) {

		case 'insert':
				$query = "insert into topic(title,description,created) values ('".$_POST['title']."', '".$_POST['description']."', now())";
			break;

		case 'delete':
			break;

		case 'select':
			$query = 'select * from topic';
			break;

		default:
			echo "not found mode";
			break;
	}
	echo "Query : ".$query."<br />";
	$result = mysqli_query($mysqli, $query);
	
	if($_POST['mode']==="select"){
		foreach($result as $list){
			echo $list['id'].". Title : ".$list['title']."\t"."Description : ".$list['description']."<br />";
		}
	}


	mysqli_close($mysqli);
?>