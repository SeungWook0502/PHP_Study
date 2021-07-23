<?php
	$file = new SplFileObject('data.txt');
	// var_dump($file->fread($file->getSize()));
	// $file->rewind();
	// var_dump($file->fread($file->getSize()));
	class MyFileObject extends SplFileObject{
	  function getContents(){
	    $content = $this->fread($this->getSize());
	    $this->rewind();
	    return $content;
	  }
	}
	$file = new MyFileObject('data.txt');
	// var_dump($file->fread($file->getSize()));
	// $file->rewind();
	// var_dump($file->fread($file->getSize()));
	var_dump($file->getContents());
	var_dump($file->getContents());

	
	class ParentClass{
		function callMethod($para){
			echo "<h1>Parent {$para}</h1>";
		}
	}
	class ChildClass extends ParentClass{
		//override
		function callMethod($para){ //부모 function과 동일한이름
			parent::callMethod($para); //부모의 function call usage
			//parent 예약어
			echo "<h1>Child {$para}</h1>";
		}
	}

	$testObject = new ChildClass();
	$testObject->callMethod("Hi");
?>