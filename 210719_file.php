<?php
$file = 'readme.txt';
echo file_get_contents($file); //Read return file content
echo '<br />';
echo file_put_contents($file, 'coding evertbody'); //write return string length
echo '<br />';
if(is_readable($file)){ //check read permission
	echo 'The file is readable',"<br />";
}else{
	echo 'The file is not readable',"<br />";
}
if(is_writable($file)){ //check write permission
	echo 'The file is writable',"<br />";
}else{
	echo 'The file is not writable',"<br />";
}
if (file_exists($file)) { //check file exists
    echo "The file $file exists","<br />";
} else {
    echo "The file $file is not exists";
}
?>