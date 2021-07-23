<h2>Function Style</h2>
<?php
		$Adata = array('a','b','c');

		array_push($Adata,'d');

		foreach($Adata as $A){
			echo $A."<br>";
		}

		var_dump(count($Adata));
?>

<h2>Object Style</h2>
<?php
		$Bdata = new ArrayObject(array('a','b','c'));

		$Bdata->append('d');

		foreach($Bdata as $B){
			echo $B."<br>";
		}

		var_dump($Bdata->count());
?>