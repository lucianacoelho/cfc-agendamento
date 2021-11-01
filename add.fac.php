<?php 
 include_once("configDB.php");
 
 $con = mysqli_connect ($hostname, $user, $pass);
 
 if (!$con)
 {
	echo 'Não foi possível conectar ao servidor';
 }
 if (!mysqli_select_db($con, $database))
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