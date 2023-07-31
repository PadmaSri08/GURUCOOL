<?php
$conn = mysqli_connect('localhost', 'root', '',"gurukul");
if (!$conn) 
{
  die("Connection failed: " . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $cname=$_POST['cname'];
    $cid=$_POST['cid'];
    $level=$_POST['level'];
    $type=$_POST['type'];
    $price=$_POST['price'];
    $iid=$_POST['iid'];
    $category=$_POST['category'];
    $duration=$_POST['duration'];
    $check="select * from courses where cid='$cid' ";
    $check_q=mysqli_query($conn,$check);
    if(mysqli_num_rows($check_q)>0)
    {
      header("Location:p.php?error=cid is already exists");
      exit();
    }
    else
    {  
      $check1="select * from instructor where iid='$iid' ";
    $check_q1=mysqli_query($conn,$check1);
    if(mysqli_num_rows($check_q1)== 0)
    {
      header("Location:p.php?errorinstructor=invalid iid ");
      exit();
    }
    else
    {
      $query="insert into courses values ('$cname','$cid','$level','$type','$price','$iid','$category','$duration');";
      $query_check=mysqli_query($conn,$query);
      if($query_check== true)
      {  
        header("Location:p.php?sucess=course was added");
        exit();
      }
      else
      {
        echo mysqli_error($conn);
      }
    }
    }
    ?>
</body>
</html>