<?php

//database connection
$con =new mysqli('localhost', 'root','', 'student_cp');

//variable declaration
if(isset($_POST['login'])){

  //variable declaration
  $user= $_POST['user'];
  $pass=$_POST['pass'];

 
    
    $sql="SELECT * FROM login_reg WHERE username='$user' and password='$pass'";
    $query= mysqli_query($con, $sql);

    $row = mysqli_fetch_assoc($query);
    if($query){
      session_start();
      $_SESSION['id']=$row['id'];
      $_SESSION['fname']=$row['first_name'];
      $_SESSION['lname']=$row['last_name'];
      $_SESSION['pass']=$row['password'];
      $_SESSION['email']=$row['email'];
      $_SESSION['status']=$row['status'];
      $_SESSION['user']=$row['username'];
    
      header('location:../student.php');
    }
  
}
?>