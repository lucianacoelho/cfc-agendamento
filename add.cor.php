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

 $Course_Code = $_POST['corcode'];
 $Course_name = $_POST['corname'];
 
 $sql = "INSERT INTO course (Course_Code, Course_name) VALUES ('$Course_Code', '$Course_name')";

 if (!mysqli_query ($con, $sql))
 {
	 echo 'not inserted';
 }
 else 
 {
	 echo '<script type="text/javascript">
                      alert("New Course Added!");
                         location="homeAdmin.php";
                           </script>';
 }


?>