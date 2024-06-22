<?php 
$conn = mysqli_connect("localhost","root","","course") or die(mysqli_error($conn));

if(isset($_POST["submit"])){

    $fullname = $_POST["fullname"] ;
  
    $email = $_POST["email"];
  
    $gpa = $_POST["gpa"];
  
  
     $request = "insert into Course (fullname, email, gpa ) 
    values('$name', '$email', '$gpa' )";
  
    mysqli_query( $conn, $request);
    echo "<script>alert('Data has been sent!')</script>";
  }else{
   echo"<script>alert ('something wrong tyr again!!')</script>";
  
  }   
?>
