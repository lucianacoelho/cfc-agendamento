<?php 
 
 // This file adds Room (which I think is Date), Start Time and End Time for Presencial Classes
 

 $con = mysqli_connect ('sql109.byethost7.com', 'b7_30185286', 'lu250595');
 
 if (!$con)
 {
	 echo 'Não foi possível conectar ao servidor';
 }
 if (!mysqli_select_db($con, 'b7_30185286_db'))
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
                      alert("New Room Reserved!");
                           </script>';
 }
 
 $Start_Time = $_POST['starttime'];
 $End_Time = $_POST['endtime'];
 
 $sql1 = "INSERT INTO timer (Start_Time, End_Time) VALUES ('$Start_Time', '$End_Time')";

 if (!mysqli_query ($con, $sql1))
 {
	 echo 'Não inserido';
 }
 else
 {
	 echo '<script type="text/javascript">
                      alert("New Time Added!");
                         location="homeAdmin.php";
                           </script>';
 }
 

?>


