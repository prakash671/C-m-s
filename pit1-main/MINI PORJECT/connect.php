<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration Details</title>
</head>
<body>
<?php 
    $first_name=$_POST['first_name'];
     $last_name=$_POST['last_name'];
     $rollno=$_POST['rollno'];
     $email=$_POST['email'];
     $year=$_POST['year'];
     $date1=$_POST['date1'];
     $event_name=$_POST['event_name'];

     $conn = new mysqli('localhost','root','','database123');
     if ($conn->connect_error) {
      die('connection failed:' .$conn->connect_error);}
      else
      {
        $stmt=$conn->prepare("insert into registration_form(first_name,last_name,rollno,email,year,date1,event_name) values(?,?,?,?,?,?,?)");
        $stmt->bind_param("sssssss",$first_name,$last_name,$rollno,$email,$year,$date1,$event_name);
        $stmt->execute();
        echo "registration successfull.....";
        $stmt->close();
        $conn->close();
      }
?>
<a href="http://localhost/pit1-main/dashboard1/index.html">   <h2>GO BACK TO STUDENT LOGIN</h2></a>

</body>
</html>


