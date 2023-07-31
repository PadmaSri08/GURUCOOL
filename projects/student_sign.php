<?php
session_start();
$_SESSION['email']='';
$conn = mysqli_connect('localhost', 'root', '',"gurukul");
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully".mysqli_get_host_info($conn);
  $email= $_POST["email"];
  $password = $_POST["password"];
  $check_mail= "select * from student where email='$email' and password='$password' ";
  $mail_run=mysqli_query($conn,$check_mail);
  if(mysqli_num_rows($mail_run)>0)
  {
    $_SESSION['email']=$email;
     header("Location:index.php?sucess=login sucessful");
     exit();
  }
  else
  {
    header("Location:signin.php?error=invalid mail or password");
    exit();
  }

 ?>