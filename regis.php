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
 
 $username = $_POST['username'];
 $password = $_POST['password'];
 
 
 $sql = "INSERT INTO admin (username, password) VALUES ('$username', '$password')";

 if (!mysqli_query ($con, $sql))
 {
	 echo 'not registered';
 }
 else 
 {
	 echo '<script type="text/javascript">
                      alert("Bem-vindo! Sua conta foi criada com sucesso! \r\nFaça login para continuar.");
                         location="index.php";
                           </script>';
 }


?>