<?php
	$file = 'readme.txt';
	$newFile = 'exameplt.txt.bak';

	if(!copy($file, $newFile)){ #return bool -> if true/false
		echo "failed to copy $file///\n";
	}
?>