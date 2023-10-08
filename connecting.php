<!-- connecting mysql with the databasse -->
<?php
$sername="localhost";
$username="root";
$password="";
$conn=mysqli_connect($sername,$username,$password);

if($conn)
{
    echo"connected sucessfully";
}
else
echo"the code is deasd";
?>