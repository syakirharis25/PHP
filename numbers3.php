<html>
	<head>
		<title>Numeric Functions (Part-3)</title>
	</head>
	<body>
		<?php 
			$mynum=15.6589;
			echo round($mynum, 2); echo "<br />";
			echo ceil($mynum); echo "<br />";
			echo floor($mynum); echo "<br />";
			echo is_int($mynum); echo "<br />";
			echo is_float($mynum); echo "<br />";
			echo is_numeric($mynum);
		?>
	</body>
</html>