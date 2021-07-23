<h2>Function</h2>
<?php
	//function
	echo var_dump(is_file('data.txt')); //check file / return bool
	echo var_dump(is_dir('data')); //check directory / return bool
	var_dump(file_get_contents('data.txt')); //get file content
	file_put_contents('data.txt',rand(1,100)); //1~100 사이의 값// output file
?>
<h2>Object</h2>
<?php
	//object
	//instance->method; 해당 인스턴스의 클래스메소드 사용.
	$file = new SplFileObject('data.txt','rw+'); //standard php library
	var_dump($file->isFile());
	var_dump($file->isDir());
	var_dump($file->fread($file->getSize()));
	$file->fwrite(rand(1,100));
	echo $file->getCTime()."<br />";
	echo $file->getExtension();

	$file2 = new SplFileObject('data.txt','rw+'); //standard php library
	var_dump($file2->isFile());
	var_dump($file2->isDir());
	var_dump($file2->fread($file2->getSize()));
	$file2->fwrite(rand(1,100));
	echo $file2->getCTime()."<br />";
	echo $file2->getExtension();
?>