<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title></title>
</head>
<body>
	<?php
	//var_dump($_FILES);
	#exit; //system terminate
	ini_set("display_error","1"); //config -> runtime (실행되는 시점)
	$uploaddir = 'C:\Bitnami\wampstack-8.0.8-0\apache2\htdocs\PHP_Study\\'; //htdocs -> document root   
	$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
	//basename -> directory name expect / secure method
	var_dump($_FILES['userfile']);
	echo "<br />".$_FILES['userfile']['name'];
	echo '<pre>';

	if(move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)){ //argument (instance path, upload path)
		echo "파일 유효, 업로드 성공. \n";
	}else{
		print "파일 업로드 공격의 가능성 \n";
	}
	echo 'debugging data<br />';
	print_r($_FILES);
	print "</pre>";
	?>
	<img src="<?=$_FILES['userfile']['name']?>" /> <!-- 해당 path의 이미지 띄우기 -->
</body>
</html>