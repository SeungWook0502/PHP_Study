<?php
echo getcwd().'<br />'; // == pwd
chdir('../'); // == cd
echo getcwd().'<br />';

$dir    = './';
$files1 = scandir($dir); //search directory path
$files2 = scandir($dir, 1); //sort parameter
 
print_r($files1);
echo "<br />";
print_r($files2);
echo "<br />";
mkdir("1/2/3/4", 0700, true); //argument1 -> path, 2 -> permission, 3 -> sub directoey create(하위 디렉토리가 없을 경우 생성 여부 false- 해당 path에 디렉토리가 있을 경우에만)

?>