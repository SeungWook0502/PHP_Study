<?php
	if(true){
		print "a";
	}
	if(false){
		print "b";
	}else{
		echo "c";
	}
	if(false){
		echo "d";
	}else if(true){
		echo "e";
	}else{
		echo "f";
	}
	if($_GET['id']=="aa" and $_GET['pw']=="bb"){ // &&도 가능
		print "<br />"."AA";
	}
	if($_GET['id']=="aa" or $_GET['pw']=="aa"){ // ||도 가능
		print "<br />"."BB";
	}
	if(!($_GET['id']=="bb")){
		print "<br />"."CC";
	}
	if(0){ //false는 0 true는 0아닌 숫자로 대체가능
		print "<br />"."DD";
	}else if(243){
		print "<br />"."EE";
	}

?>