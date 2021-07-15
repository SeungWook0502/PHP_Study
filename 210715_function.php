<html>
<body>
	<?php
		function funca($aa){ //argument형태지정X
			$aa+=3;
			return $aa;
		}
		function funcb($bb=100){ //parameter default
			$bb+=3;
			return $bb;
		}

		print funca(43);
		print funcb();
	?>
</body>
</html>