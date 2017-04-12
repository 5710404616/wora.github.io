<?php 
	function fetch_data(){
		$output = '';
		$connect = mysqli_connect("localhost", "root", "", "dreamhome");  
		// join No.21
    	$sql = "
	   		SELECT Client.clientno, Client.fname, Client.lname, Viewing.viewdate
	        FROM Client 
	        RIGHT JOIN Viewing ON Client.clientno=Viewing.clientno";  

	   	$result = mysqli_query($connect, $sql); 
	     	while($row = mysqli_fetch_array($result)){

	      		$output .= '<tr>    
	                        <td>'.$row["clientno"].'</td> 
	                        <td>'.$row["fname"].' '.$row["lname"].'</td>  
	                        <td>'.$row["viewdate"].'</td>     
	                  </tr>  
	                ';
	      	}  
	      	return $output;  
	}
	
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<title>show table</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
  <script type="text/javascript" src="tableExport.js"></script>
  <script type="text/javascript" src="jquery.base64.js"></script>
  <script type="text/javascript" src="html2canvas.js"></script>
  <script type="text/javascript" src="jspdf/libs/sprintf.js"></script>
  <script type="text/javascript" src="jspdf/jspdf.js"></script>
  <script type="text/javascript" src="jspdf/libs/base64.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>
<body>
<br /><br />  
           <div class="container" style="width:700px;">  
                <h3 align="center">JOIN NO.21</h3><br />  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                              <th width="10%">ID</th> 
                              <th width="30%">Customers</th>  
                              <th width="10%">View Date</th>  
                          </tr>  
                     <?php  
                     echo fetch_data();  
                     ?>  
                     </table>  
                     <br />    
                </div>  
           </div>  
</body>
</html>