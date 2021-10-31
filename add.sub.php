<?php 
 
 $con = mysqli_connect ('sql109.byethost7.com', 'b7_30185286', 'lu250595');
 
 if (!$con)
 {
	 echo 'Não foi possível conectar ao servidor';
 }
 if (!mysqli_select_db($con, 'b7_30185286_db'))
 {
	 echo 'Banco de dados não selecionado';
 }

 $Subject_Code = $_POST['subcode'];
 $Subject_Description = $_POST['subdescription'];
 
 $sql = "INSERT INTO subject (Subject_Code, Subject_Description) VALUES ('$Subject_Code', '$Subject_Description')";

 if (!mysqli_query ($con, $sql))
 {
	 echo 'Não inserido';
 }
 else
 {
	 echo '<script type="text/javascript">
                      alert("New Subject Added!");
                         location="homeAdmin.php";
                           </script>';
 }
 

?>
