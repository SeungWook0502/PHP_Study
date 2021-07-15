<html>
<body>
<?php
	$a = 1;
	echo $a+1;	#annotation //annotation
	echo "<br />"; //\n line feed
	$a = 2;
	print $a+1;
	echo "<br />";

	$first = "coding";
	echo $first." everybody"; //append variable.[data]
	echo "<br />";
	echo (100+10).'<br />';
	echo "<br />";
	echo (100+10)/10;
	echo "<br />";
	echo ((((100+10)/10)-10)*10)."<br />";
	//동일한 내용
	$a = "coding";
	print $a." everybody";
	print "<br />";
	print (100+10).'<br />';
	print "<br />";
	print (100+10)/10;
	print "<br />";
	print ((((100+10)/10)-10)*10).$a."<br />";

?>
</body>
</html>