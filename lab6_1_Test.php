<?php
	mysql_connect("localhost","root","") or die("Error Connect to Database"); // Conect to MySQL
	$objDB = mysql_select_db("Customers");
	$objCSV = fopen($_FILES["fileCSV"]["name"], "r");
	while (($objArr = fgetcsv($objCSV, 1000, ",")) !== FALSE) {
		$strSQL  ="INSERT INTO Customers";
			$strSQL .="(CustomerID, CitizenID, Firstname, Lastname) ";
			$strSQL .="VALUES ";
			$strSQL .="('".A00000001."','".1100100100100."','".Customer1."' ";
			$strSQL .=",'".Custlastname1."') ";
	fclose($objCSV);
?>