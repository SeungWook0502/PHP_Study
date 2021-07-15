<html>
<body>
<?php
	$a = 100;
	echo gettype($a); //type check return data type
	settype($a,'integer'); //castting
	echo '<br />';
	echo gettype($a);
	echo '<br />';
	settype($a,'float');
	print is_float($a); //type check return boolean
	echo '<br />';
	echo gettype($a);

	$a = "test"; //string
	print $a."<br />";

	$a = array(1,2,3); //array
	print $a[1]."<br />";

	//variavle variavles
	$a = "A";
	$$a = "B"; //$$a==$($a)==$A
	$$$a = "C"; //$$$a==$($$a)==$B
	print $a.$$a.$A.$$$a.$B; //A B B
?>
</body>
</html>