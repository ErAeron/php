<?php
$servername="localhost";
$username="root";
$password="";
$database="day1";
$conn=mysqli_connect($servername,$username,$password,$database);
$sql="SELECT * FROM `database1`";
$result=mysqli_query($conn,$sql);
// echo mysqli_num_rows($result);//tells the number of rows present in the database

// display the result 
$num=mysqli_num_rows($result);
for($i=0;$i<$num;$i++)
{
   $row=mysqli_fetch_assoc($result);
   echo "hello".$row['Name'].$row['Email'];// helps to get the only value we have stored.
//    echo var_dump($row); 
}

?>