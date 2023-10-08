<?php
 $servername="localhost";
 $username="root";
 $password="";
 $database="day1";
 $conn=mysqli_connect($servername,$username,$password,$database);
 if($conn)
 {
    echo"conected sucessfully";
 }
 else{
    echo"there was an error connecting ";
 }




?>
