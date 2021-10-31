<?php 
 
 $con = mysqli_connect ('sql109.byethost7.com', 'b7_30185286', 'lu250595');
 
 if (!$con)
 {
	 echo 'not connected to server';
 }
 if (!mysqli_select_db($con, 'b7_30185286_db'))
 {
	 echo 'database not selected';
 }

 $Start_Time = $_POST['starttime'];
 $End_Time = $_POST['endtime'];
 
 $sql = "INSERT INTO timer (Start_Time, End_Time) VALUES ('$Start_Time', '$End_Time')";

 if (!mysqli_query ($con, $sql))
 {
	 echo 'not inserted';
 }
 else
 {
	 echo '<script type="text/javascript">
                      alert("New Time Added!");
                         location="homeAdmin.php";
                           </script>';
 }
 

?>