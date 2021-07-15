<html>
<body>
	<?php
	$a=5;
	//while
	while($a<7){
		print $a."<br />";
		$a+=1; //증감연산자 가능
	}

	//for
	for($i=0; $i<5; $i++){

		if($i===4){
			break; //loop 종료
		}else if($i===2){
			continue; //해당 loop skip
		}
		//문장내의 변수 사용법
		print "aaaaa{$i}<br />";
		print "bbbbb".$i."<br />";
		print "ccccc".($i*2)."<br />";

	}
	?>
</body>
</html>