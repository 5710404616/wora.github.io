<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title> child motto</title>
	<link rel="stylesheet" type="text/css" href="child.css">
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
	<script type="text/javascript">
		$('body').css("background","url(http://www.clipartkid.com/images/753/our-team-provides-a-wide-array-of-services-concerning-art-outsourcing-cM9vQT-clipart.jpg) no-repeat center center fixed");
		$('body').css("background-color", "	#FF8C00")
	</script>
</body>
</html>