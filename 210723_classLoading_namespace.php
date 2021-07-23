<?php
	//require_once == package
	require_once '210723_classLoading_namespace3.php';
	use \data\A as ko; //class를 찾아준다. as를 통한 alias declare
	use \data\B as en;
	//spl_aoutoload_register();
	//동일한 file import 방식
	new ko\Hi();
	new en\Hi();
?>