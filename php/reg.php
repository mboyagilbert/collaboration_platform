<?php

//database connection
//database connection
$conn =new mysqli('localhost', 'root','', 'student_cp');

//connection to database
//$con = new mysqli('localhost', 'id18320704_kenyayetu12', 'a|zQG!Gs+A56>{zX', 'id18320704_kenyayetu');
//variable declaration
if(isset($_POST['signup'])){

  //variable declaration
  $fname= $_POST['fname'];
  $lname= $_POST['lname'];
  $email=$_POST['email'];
  $user= $_POST['user'];
  $pass1= $_POST['pass1'];
  $pass2= $_POST['pass2'];
  $status=$_POST['status'];


  if($pass1==='' || $pass2===''|| $user===''|| $lname===''||$fname===''|| $email===''
  || $status===''){
      header('location:../registration.php?error=empty');
    
  }
  
  else{
    //"INSERT INTO crud (name, location) VALUES ('$name','$location')";
    $sql="INSERT INTO login_reg(first_name, last_name,username, email,  password,  status) VALUES('$fname', '$lname,', '$user','$email', '$pass1','$status')";
    $query=mysqli_query($conn,$sql);

   
    if($query){
    
      header('location:../login.php');
    }else{
      echo 'failed';
    }
  }
}

?>