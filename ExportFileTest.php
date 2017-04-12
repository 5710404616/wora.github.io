<?php  
 function fetch_data()  
 {  
      $output = '';
      $result = query();
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>    
                        <td>'.$row["clientno"].'</td> 
                        <td>'.$row["fname"].' '.$row["lname"].'</td>  
                        <td>'.$row["viewdate"].'</td>     
                  </tr>  
                ';
      }  
      return $output;  
 }  
 function query(){ 
        $connect = mysqli_connect("localhost", "root", "", "dreamhome");  
        $sql = "
          SELECT Client.clientno, Client.fname, Client.lname, Viewing.viewdate
          FROM Client 
          RIGHT JOIN Viewing ON Client.clientno=Viewing.clientno";  
        $result = mysqli_query($connect, $sql); 
        return $result;
 }

 if(isset($_POST["create_pdf"]))  
 {  
      require_once('tcpdf/tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("Export HTML Table data to PDF using TCPDF in PHP");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 12);  
      $obj_pdf->AddPage();  
      $content = '';  
      $content .= '  
      <h3 align="center">Export HTML Table data to PDF using TCPDF in PHP</h3><br /><br />  
      <table border="1" cellspacing="0" cellpadding="5">  
           <tr>   
                <th width="10%">ID</th> 
                <th width="30%">Customers</th>  
                <th width="10%">View Date</th>   
           </tr>  
      ';  
      $content .= fetch_data();  
      $content .= '</table>';  
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('sample.pdf', 'I');  
 }  

else if(isset($_POST["create_csv"])){
     
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w");  
      // fputcsv($output, array('ID', 'First Name', 'Last Name', 'Email', 'Joining Date'));  
     
      $result = query();  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
      exit;
 }  

 else if(isset($_POST["create_exc"])){
   
      $result = query();  
            while($row = mysqli_fetch_assoc($result))  
            {  
           fputcsv($output, $row);  
           }  
          fclose($output);  
          exit;
  
  
        header("Content-type: application/octet-stream");  
        header("Content-Disposition: attachment; filename=User_Detail_Reoprt.xls");  
        header("Pragma: no-cache");  
        header("Expires: 0");  

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
                <h3 align="center">Export HTML Table data to PDF, Excel using TCPDF in PHP</h3><br />  
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
                     <form method="post">  
                          <input type="submit" name="create_pdf" class="btn btn-danger" value="Create PDF" />  
                          <input type="submit" name="create_exc" class="btn btn-success" value="Create Excel" />
                          <input type="submit" name="create_csv" class="btn btn-default" value="Create CSV" />   
                          
                     </form>  
                </div>  
           </div>  

</body>
</html>