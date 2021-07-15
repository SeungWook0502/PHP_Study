<html>
<body>
<?php
	print 1==2; //false는 출력되지 않는다.
	print 1!=2; //true는 1로 출력된다.
	print 1==1;
	print "<br />";

	var_dump(1==2);
	print "<br />";
	var_dump(1!=2);
	print "<br />";
	var_dump(1==1);
	print "<br />";
	print "<br />";
	var_dump(1=='1');
	print "<br />";
	var_dump(1==='1');
?>
</body>
</html>