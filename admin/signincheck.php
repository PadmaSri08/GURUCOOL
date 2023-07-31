<?php
session_start();
$_SESSION['email']='';
$conn = mysqli_connect('localhost', 'root', '',"gurukul");
if (!$conn) 
{
  die("Connection failed: " . mysqli_connect_error());
}
$loginas=$_POST['loginas'];
if($loginas == "instructor")
{
  $email= $_POST["email"];
  $password = $_POST["password"];
  $check_mail= "select * from instructor where email='$email' and password='$password' ";
  $mail_run=mysqli_query($conn,$check_mail);
  if(mysqli_num_rows($mail_run)>0)
  {
    $_SESSION['email']= $email;
     header("Location:inst.php?sucess=login sucessful");
     exit();
  }
  else
  {
    header("Location:signin.php?error=invalid mail or password");
    exit();
  }
}
else
{  
  $email= $_POST["email"];
  $password = $_POST["password"];
  if(($email=='gayathri@dbms') && ($password == 'dbmsproject'))
  {
    header("Location:a.php?sucessofadmin=login sucessful");
    exit();
  }
  else
  {
    header("Location:signin.php");
  }
}
?>