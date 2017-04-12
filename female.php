<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>female motto</title>
	<link rel="stylesheet" type="text/css" href="female.css">
</head>
<body>
	<?php 
		
		// $age = $_GET['birthday'];
		// $gender = $_GET['gender'];
		$province = $_GET['province'];
		echo "คำขวัญจังหวัด: $province \n";
		// echo "age"."  gender"." province" ;

		$filename = "$province.txt";
			
			$handle = iconv("utf-8", "tis-620", $filename);
			echo readfile($handle)

			// $handle = iconv("utf-8", "tis-620", $handle);
			// $handle = fopen($filename, "r");
			// 	echo fgets($handle, 1024);
			// 	echo '<br />';
			// fclose($handle);
	?>

</body>
</html>