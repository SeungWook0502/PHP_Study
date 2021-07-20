<?php
	$string = 'April 15, 2003';
	$pattern = '/(\w+) (\d+), (\d+)/i'; //w - word, d - number
	$replacement = '${1}1,$3'; // $P{숫자} - 순서에 해당되는 표현식 -> 첫번째 구분자(April) 따라서 April1로 변경된다.
	// = 1번째구분자 + 1 + , + 3번째구분자 == April1,2003
	echo preg_replace($pattern, $replacement, $string)."<br />";

	$string = 'The quick brown fox jumped over the lazy dog.';
	$patterns = array();
	$patterns[0] = '/quick/';
	$patterns[1] = '/brown/';
	$patterns[2] = '/fox/';

	//replacements에 들어가는 단어의 순서대로 patterns에 대응되는 단어가 들어가기 때문에
	//array의 index에 상관없이 assignment 순서대로 대응된다.
	$replacements = array();
	$replacements[2] = 'bear';
	$replacements[0] = 'slow';
	$replacements[1] = 'black';
	echo preg_replace($patterns, $replacements, $string)."<br />";

	$patterns = array ('/(19|20)(\d{2})-(\d{1,2})-(\d{1,2})/',
                   '/^\s*{(\w+)}\s*=/'); //^ - 맨처음, \s - space, * - 있을 수 있고 없을 수 있음, 
	// 19또는20 + 숫자2 + - + 숫자1또는숫자2 + - + 숫자1또는숫자2
	// 맨처음 공간 + { + 단어 + } + 공간 + =
	$replace = array ('\3/\4/\1\2', '$\1 =');
	//순서의 변경 3 + / + 4 + / + 1 + 2
	// \1 == ${1}
	// $startDate = 5/27/1999
	echo preg_replace($patterns, $replace, '{startDate} = 1999-5-27');
?>