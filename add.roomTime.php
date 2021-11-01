<?php 
 include_once("configDB.php");
 // This file adds Room (which I think is Date), Start Time and End Time for Presencial Classes
 

 $con = mysqli_connect ($hostname, $user, $pass);
 
 if (!$con)
 {
	echo 'Não foi possível conectar ao servidor';
 }
 if (!mysqli_select_db($con, $database))
 {
	echo 'Banco de dados não selecionado';
 }

 $Room = $_POST['room'];

 $sql = "INSERT INTO rooms (Room) VALUES ('$Room')";

 if (!mysqli_query ($con, $sql))
 {
	echo 'Não inserido';
 }
 else
 {
	 echo '<script type="text/javascript">
                      alert("Nova aula inserida!");
                           </script>';
 }
 
 $Start_Time = $_POST['starttime'];
 $End_Time = $_POST['endtime'];
 
 $sql1 = "INSERT INTO timer (Start_Time, End_Time) VALUES ('$Start_Time', '$End_Time')";

 if (!mysqli_query ($con, $sql1))
 {
	 echo 'Não inserido.';
 }
 else
 {
	 echo '<script type="text/javascript">
	 alert("Nova aula inserida!");
                         location="homeAdmin.php";
                           </script>';
 }
 

?>


