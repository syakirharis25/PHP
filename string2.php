<html>
	<head>
		<title>String Functions (Part-2)</title>
	</head>
	<body>
		<?php
		$msg="Have a nice day! ";
		echo $msg;
		echo "<br />";
		echo strlen($msg);
		echo "<br />";
		echo str_replace("nice", "great", $msg);
		echo "<br />";
		echo str_repeat($msg,3);
		echo "<br />";
		echo substr($msg, 5, 11);
		?>
	</body>
</html>