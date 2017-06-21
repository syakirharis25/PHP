<html>
	<head>
		<title>Arrays</title>
	</head>
	<body>
		<?php 
			$arr=array(15,10,85.78,"Jim","Peter");
			echo $arr[3]; echo "<br />";
			echo $arr[0]; echo "<br />";
			$arr[1]=25;
			echo $arr[1]; echo "<br />";
			print_r($arr); echo "<br />";
			$myarr=[8,10,15,[19,23,28,30]];
			echo $myarr[3][1]; echo "<br />";
			print_r($myarr);
		?>
	</body>
</html>