<html>
<body>
	<?php
		$a = ['aaa','bbb','ccc']; //array [] 대괄호 //php 5.4 이하버전에서는 호환성 낮음
		var_dump($a);echo "<br />";

		$a = array('aaa','bbb','ccc');
		var_dump($a);echo "<br />";

		function a(){
			return ['aaa','bbb','ccc'];
		}

		var_dump(a());echo "<br />";

		print count($a); //array lenght
		echo "<br />";

		array_push($a,'ddd'); //array add-back
		var_dump($a);echo "<br />";

		$a = array_merge($a,['eee','fff']); //array merge return merge array
		var_dump($a);echo "<br />";

		array_splice($a,2,2,"AAA"); //(대상 array,바꿀 index위치,바꾼 element 놓을 index위치,변경할 값)
		var_dump($a);echo "<br />";

		array_unshift($a,'z'); //array add-front
		var_dump($a);echo "<br />";

		array_shift($a); //array remove-front
		var_dump($a);echo "<br />";

		array_pop($a); //array remove-back
		var_dump($a);echo "<br />";

		sort($a); //descending
		var_dump($a);echo "<br />";

		rsort($a); //ascending
		var_dump($a);echo "<br />";

		$a = ["a"=>10, "b"=>"test", "c"=>false]; //key-value
		var_dump($a);echo "<br />";

		$a["c"] = true; //값 변경
		print $a["a"].$a["b"].$a["c"]."<br />";

		foreach($a as $k => $v){ //for-in 문과 같은 array데이터 기준 반복문
			print "key: {$k} value: {$v}<br />";
		}

		foreach(['aaa','bbb','ccc'] as $f){ // as뒤의 변수에 array에서 1개씩 값을 할당
			print $f."<br />";
		}
	?>
</body>
</html>