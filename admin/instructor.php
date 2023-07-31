<?php
$conn = mysqli_connect('localhost', 'root', '',"gurukul");
if (!$conn) 
{
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
    <title>Document</title>
</head>
<body>
    <?php
    $iid=$_POST['iid'];
    $iname=$_POST['name'];
    $mobileno=$_POST['mobileno'];
    $email=$_POST['email'];
    $s1=$_POST['s1'];
    $s2=$_POST['s2'];
    $q1=$_POST['q1'];
    $q2=$_POST['q2'];
    $q3=$_POST['q3'];
    $experience=$_POST['experience'];
    $query1="select * from instructor where iid='$iid' ";
    $check_q1=mysqli_query($conn,$query1);
    if(mysqli_num_rows($check_q1)>0)
    {
        header("Location:i.php?error=iid is already exists");
      exit();
    }
    else
    {
        $query2="select * from instructor where email='$email' ";
        $check_q2=mysqli_query($conn,$query2);
       if(mysqli_num_rows($check_q1)>0)
       {
              header("Location:i.php?mail=email is already exists");
              exit();
        }
       $query3 ="insert into instructor values('$iid','$iname','$mobileno','$email','$experience')"; 
       $check_q3=mysqli_query($conn,$query3);
       if(!empty($q1))
       {
       $query4 ="insert into qualifications values('$iid','$q1')"; 
       $check_q4=mysqli_query($conn,$query4);
       }
       if(!empty($q2))
       {
       $query5 ="insert into qualifications values('$iid','$q2')"; 
       $check_q5=mysqli_query($conn,$query5);
       }
       if(!empty($q3))
       {
       $query6 ="insert into qualifications values('$iid','$q3')"; 
       $check_q6=mysqli_query($conn,$query6);
       }
       if(!empty($s1))
       {
       $query7 ="insert into specialization values('$iid','$s1')"; 
       $check_q7=mysqli_query($conn,$query7);
       }
       if(!empty($s2))
       {
       $query8 ="insert into specialization values('$iid','$s2')"; 
       $check_q8=mysqli_query($conn,$query8);
       }
       if($check_q3 == true and $check_q4 == true and  $check_q7 == true  )
       {
        header("Location:i.php?sucess=data entry sucessful ");
        exit();
       }
       else
       {
        echo mysqli_error($conn);
       }
      }
    ?>
</body>
</html>