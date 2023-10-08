<html>
    <body>
        <?php


$servername="localhost";
$username="root";
$password="";
$database="day1";
$conn=mysqli_connect($servername,$username,$password,$database);

        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $Name=$_POST['name'];
            $Email=$_POST['password'];
            $servername="localhost";
            $username="root";
            $password="";
            $database="day1";
            $conn=mysqli_connect($servername,$username,$password,$database);
            $sql="INSERT INTO `database1`(`Name`, `Email`) VALUES ('$Name','$Email')";
       $result=mysqli_query($conn,$sql);
       if($result)
       {
        
        echo"connection sucess";
       }
       else
       echo"connection problem";
             
        }





?>
    <form  action="/phpbeg/formconnection.php"   method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NAME</label>
    <input type="NAME" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" name= "password" class="form-control" id="exampleInputPassword1">


  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>