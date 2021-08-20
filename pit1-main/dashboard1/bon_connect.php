<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bonafide Registration Details</title>
</head>
<body>
<?php 
    $name=$_POST['name'];
     $rollno=$_POST['rollno'];
     $email=$_POST['email'];
     $quota=$_POST['quota'];
     $purpose=$_POST['purpose'];

     $conn = new mysqli('localhost','root','','database123');
     if ($conn->connect_error) {
      die('connection failed:' .$conn->connect_error);}
      else
      {
        $stmt=$conn->prepare("insert into bonafide_registration(name,rollno,email,quota,purpose) values(?,?,?,?,?)");
        $stmt->bind_param("sssss",$name,$rollno,$email,$quota,$purpose);
        $stmt->execute();
        echo "registration successfull.....";
        $stmt->close();
        $conn->close();
      }
?>
<a href="http://localhost/pit1-main/dashboard1/index.html">   <h2>GO BACK TO STUDENT LOGIN</h2></a>

</body>
</html>


