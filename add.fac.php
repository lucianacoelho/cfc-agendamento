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

 $Faculty_Name = $_POST['falname'];
 $Designation = $_POST['Designation'];
 
 $sql = "INSERT INTO faculty (Faculty_Name, Designation) VALUES ('$Faculty_Name', '$Designation')";

 if (!mysqli_query ($con, $sql))
 {
	 echo 'não inserido';
 }
 else 
 {
	 echo '<script type="text/javascript">
                      alert("New Faculty Added!");
                         location="homeAdmin.php";
                           </script>';
 }


?>
