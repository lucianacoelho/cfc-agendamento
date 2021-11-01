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
                      alert("Nova modalidade inserida");
                         location="homeAdmin.php";
                           </script>';
 }
 

?>
