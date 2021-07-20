<?php
	if (preg_match("/php/i", "PHP is the web scripting language of choice.")){ //regualr expression match in php //,##,++,%%  return bool
		echo "A match was found."."<br />";
	}else{
		echo "A match was not found.";
	}
	if (preg_match("/\bweb\b/i", "PHP is the web scripting language of choice.")) { //\b는 경계 즉 edge를 의미한다.
	    echo "A match was found."."<br />";
	} else {
	    echo "A match was not found.";
	}
	 
	if (preg_match("/\bweb\b/i", "PHP is the website scripting language of choice.")) { //따라서 web뒤에 site가 붙으므로 false (0)이 return 된다.
	    echo "A match was found.";
	} else {
	    echo "A match was not found."."<br />";
	}

	$subject = 'coding everybody http://opentutorials.org egoing@egoing.com 010-0000-0000';
	preg_match('~(http://\w+\.\w+)\s(\w+@\w+\.\w+)~', $subject, $match); // argument3 -> subject text 내의 정규표현식(argument1) 검색결과
	//array 3 -> 전체, 검색1, 검색2[, 검색n]
	var_dump($match);
	echo "<br />";
	echo "homepage:".$match[1];
	echo "<br />";
	echo "email:".$match[2];
	echo "<br />";

	preg_match('@^(?:http://)?([^/]+)@i', // ^ - 문자열의 맨처음을 의미, ?: - 같이있는 괄호안의 내용은 검색결과에서 구분된다, 대괄호 안의 ^는 not을 의미한다
    	"http://www.php.net/index.html", $matches);
		//http:// 부터 /전까지 , http://제외
	$host = $matches[1];
	var_dump($matches);
	// get last two segments of host name
	preg_match('/[^.]+\.[^.]+$/', $host, $matches); // $ - 문자열의 맨끝을 의미
	echo "domain name is: {$matches[0]}\n"."<br />";


	/* This also works in PHP 5.2.2 (PCRE 7.0) and later, however 
	 * the above form is recommended for backwards compatibility */
	// preg_match('/(?<name>\w+): (?<digit>\d+)/', $str, $matches);
	$str = 'foobar: 2008';
	preg_match('/(?P<name>\w+): (?P<digit>\d+)/', $str, $matches); //<> - key value로 구분된 데이터 저장
	print_r($matches);
	echo $matches["name"]; //back reference / key 값으로 사용할 수 있다.
?>