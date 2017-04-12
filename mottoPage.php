<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>motto</title>
</head>
<body>
	<?php 
		
		// $age = $_GET['birthday'];
		// $gender = $_GET['gender'];
		$province = $_GET['province'];
		echo "$province \n";
		// echo "age"."  gender"." province" ;

		$filename = "$province.txt";
		echo "$filename \n";

			// $handle = iconv("utf-8", "tis-620", $handle);
			$handle = fopen($filename, "r");
			
				echo fgets($handle, 1024);
				echo '<br />';
			

			fclose($handle);
	?>
</body>
</html>