<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>male motto</title>
	<link rel="stylesheet" type="text/css" href="male.css">
</head>
<body>
	<?php 
		$province = $_GET['province'];
		echo "คำขวัญจังหวัด: $province \n";
		// echo "age"."  gender"." province" ;

		$filename = "$province.txt";
			
			$handle = iconv("utf-8", "tis-620", $filename );
			echo readfile($handle)
	?>
</body>
</html>