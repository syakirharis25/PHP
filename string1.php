<html>
	<head>
		<title>String Functions (Part-1)</title>
	</head>
	<body>
		<?php
		$first="Good Morning!";
		$second=" Have a nice day!";
		$third=$first;
		echo $third;
		echo "<br />";
		$third .= $second;
		echo "{$third}<br />";
		echo strtoupper($third);
		echo "<br />";
		echo strtolower($third);
		echo "<br />";
		echo ucwords($third);
		echo "<br />";
		echo $third;
		?>
	</body>
</html>