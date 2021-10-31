<?php 

 $link = mysqli_connect("localhost", "root", "", "b7_30185286_db");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "DELETE FROM faculty";
$result = mysqli_query($link, $sql)
if(isset($_GET['delete'])){
   
   if ($result) {
   	    echo 'Excluído!'
   } else {
   	echo "Não excluído!";
   }
} echo ".";



?>
