<?php
	//추상클래스
	abstract class ParentClass{ //abstract function이 있는 class
		public function a(){
			echo 'a'."<br>";
		}
		//추상메소드
		public abstract function b(); //상속시 구현을 강제하는function
	}

	class ChildClass extends ParentClass{
		public function b(){
			echo 'b'."<br>";
		}
	}

	$childClass = new ChildClass();
	$childClass->b();
	$childClass->a();

 ?>