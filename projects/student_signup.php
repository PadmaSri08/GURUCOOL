<?php
$conn = mysqli_connect('localhost', 'root', '',"gurukul");
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully".mysqli_get_host_info($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>studentprofile</title>
</head>
<body>
  <?php
  $firstname = $_POST['firstname'];
  $middlename = $_POST['middlename'];
  $lastname = $_POST['lastname'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $conform=$_POST['conform'];
  $mobileno = $_POST['mobileno'];
  $email = $_POST['email'];
  $fathername = $_POST['fathername'];
  $mothername = $_POST['mothername'];
  $dob= date('Y-m-d',strtotime($_POST['dateofbirth']));
  $age=$_POST['age'];
  $gender=$_POST['gender'];
  $address=$_POST['address'];
  $courseofintrest1=$_POST['courseofintrest1'];
  $courseofintrest2=$_POST['courseofintrest2'];
 $check_username = "select * from student where username = '$username'";
   $check_user=mysqli_query($conn,$check_username);
   if(mysqli_num_rows($check_user)>0)
   {
    header("Location:signup_html.php?error=usernameexists");
    exit();
   }
 else
 {
  $check_mail = "select * from student where email = '$email'";
   $check_mails=mysqli_query($conn,$check_mail);
   if(mysqli_num_rows($check_mails)>0)
   {
    header("Location:signup_html.php?errorinmail=mail already exist");
    exit();
   }
   if($password!=$conform)
   {
    header("Location:signup_html.php?password=password doesnt match");
    exit();
   }
  $query= "insert into student values('$firstname','$middlename','$lastname','$username','$password','$mobileno','$email','$fathername','$mothername','$dob','$age','$gender','$address','$courseofintrest1','$courseofintrest2');";
  $result= mysqli_query($conn,$query);
  if($result== true)
  {
    header("Location: signup_html.php?sucess=sucessfully registered");
    exit();
  }
  else
  {
    echo "enter proper details";
  }
  }
 
  ?>
</body>
</html>