<?php
   include_once("header.php");
   include_once("navbarAdmin.php");
?>
<html>
<head>
<style>

body {
    background-image: url();
    background-color: white;
}
th {
    text-align: center;
}
tr {
     height: 30px;
}
td {
    padding-top: 5px;
    padding-left: 20px; 
    padding-bottom: 5px;    
    height: 20px;
}


</body>
</style>
</head>
<body><br>
<div class="container">


<body>
    <?php
     echo "<tr>
            <td>";
               // your database connection
               $host = "sql109.byethost7.com";
$username = "b7_30185286";
$password ="lu250595";
$database = "b7_30185286_db";
               
               // select database
               $mysqli = mysqli_connect($host,$username,$password) or die(mysqli_error($mysqli)); 
               mysqli_select_db($mysqli,$database) or die(mysqli_error($mysqli)); 

                    $query = ("SELECT * FROM subject");
                    $result = mysqli_query($mysqli,$query) or die(mysqli_error($mysqli));
                    echo "<div class='container'><table width='' class='table table-bordered' border='1' >
                            <tr>
                                <th>Code</th>
                                <th>Subject</th>
                                <th>Action</th>
                            </tr>";
                        while($row = mysqli_fetch_array($result))
                        {
                        echo "<tr>";
                        echo "<td>" . $row['subject_code'] . "</td>";
                        echo "<td>" . $row['subject_description'] . "</td>";
                        echo "<td><form class='form-horizontal' method='post' action='sublist.php'>
                        <input name='subject_id' type='hidden' value='".$row['subject_id']."';>
                        <input type='submit' class='btn btn-danger' name='delete' value='Delete'>
                        </form></td>";
                        echo "</tr>";
                        }
                    echo "</table>";

            echo "</td>           
        </tr>";

       // delete record
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        echo '<script type="text/javascript">
                      alert("Schedule Successfuly Deleted");
                         location="list.php";
                           </script>';
    }
    if(isset($_POST['subject_id']))
    {
    $subject_id = mysqli_real_escape_string($mysqli,$_POST['subject_id']);
    $sql = mysqli_query($mysqli,"DELETE FROM subject WHERE subject_id='$subject_id'");
    if(!$sql)
    {
        echo ("Could not delete rows" .mysqli_error($mysqli));
    }
    
    }
    ?>
</fieldset>
</form>
</div>
</div>
</div>
</div>
    </body>
    </html>
    
<?php
   include_once("footer.php");

?>
