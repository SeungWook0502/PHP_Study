<?php
	class MyFileObject{

		function isFile(){
			return is_file($this -> filename); //$this는 해당 class/instance 를 의미한다 (자기자신)
		}
	}
	$myFileObject1 = new MyFileObject();
	$myFileObject1 -> filename = 'data.txt'; //field 설정4
	var_dump($myFileObject1 -> isFile());

	$myFileObject2 = new MyFileObject();
	$myFileObject2 -> filename = 'data2.txt'; //field 설정4
	var_dump($myFileObject2 -> isFile());

	class MyFileObject2{
		function __construct($fname){ //생성자 예약어 함수명(지정되어있음)
			$this -> filename = $fname;
		}
		function isFile(){
			return is_file($this -> filename); //$this는 해당 class/instance 를 의미한다 (자기자신)
		}
	}

	$myFileObject3 = new MyFileObject2('data.txt');
	var_dump($myFileObject3 -> isFile());
?>