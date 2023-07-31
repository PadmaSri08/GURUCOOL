<?php
$conn = mysqli_connect('localhost', 'root', '',"gurukul");
if (!$conn) 
{
  die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['submit']))
{
  $email=$_SESSION['email'];
  $query2="select * from instructor where email = '$email' ";
   $result2=mysqli_query($conn,$query2);
   $data=mysqli_fetch_assoc($result2);
   $iid=$data['iid'];
  $cid=$_POST['cid'];
  $name=$_FILES['files'];
  $file_name=$_FILES['files']['name'];
  $temp_name=$_FILES['files']['tmp_name'];
  $query1="select * from courses where (cid = '$cid') and (iid= '$iid' ) ";
  $result=mysqli_query($conn,$query1);
 if(mysqli_num_rows($result)>0)
 {
  $data=mysqli_fetch_assoc($result);

 $file_destination='C:/xampp/htdocs/finalproject/project/vidoes/'.$file_name;
 if(move_uploaded_file($temp_name,$file_destination))
 { 
  $query=" insert into videos values('$cid','$file_name')";

  if(mysqli_query($conn,$query))
  {
    header("Location:inst.php?sucessinadd='sucessfully added the course' ");
  exit();
  }
  else
  {
    echo "something went wrong";
  }
}
else
{
  header("Location:inst.php?errormismatch='cid and iid are not match'");
  exit();
}
 }
 else
 {
  header("Location:inst.php?errorincid='invalid course id ' ");
  exit();
 }
}
?>
