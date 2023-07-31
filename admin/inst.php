<?php
session_start();
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>

    <!-- Custom Css -->
    <link rel="stylesheet" href="css/inst.css">

    <!-- FontAwesome 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>
<body>

    <!-- Sidenav -->
    <div class="main">
        <h2>Instructor Profile:</h2>
        <?php
     $email=$_SESSION['email'];
     $query2="select * from instructor where email = '$email' ";
      $result2=mysqli_query($conn,$query2);
      $data=mysqli_fetch_assoc($result2);
      $iid=$data['iid'];
   ?>

        <div class="card">
            <div class="card-body">
                <i class="fa fa-pen fa-xs edit"></i>
                <table style="width:60%;">
                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td><?php echo $data['iname']?></td>
                        </tr>
                        <tr>
                            <td>Id</td>
                            <td>:</td>
                            <td><?php echo $data['iid']?></td>
                        </tr>
                        <tr>
                            <td>Number</td>
                            <td>:</td>
                            <td><?php echo $data['mobileno']?></td>
                        </tr>
                        <tr>
                            <td>Specialization</td>
                            <td>:</td>
                            <?php 
                            $query3="select * from specialization where iid ='$iid'";
                            $result3=mysqli_query($conn,$query3);   
                           while($d=mysqli_fetch_assoc($result3))
                           {
                           ?>             
                            <td><?php echo $d['specialization']?></td>
                            <?php
                           }
                            ?>
                        </tr>
                        <tr>
                            <td>Qualification</td>
                            <td>:</td>
                            <?php 
                            $query3="select * from qualifications where iid ='$iid'";
                            $result3=mysqli_query($conn,$query3);   
                           while($d=mysqli_fetch_assoc($result3))
                           {
                           ?>             
                            <td><?php echo $d['qualifications']?></td>
                            <?php
                           }
                            ?>
                        </tr>
                        <tr>
                            <td>No.of Courses</td>
                            <td>:</td>
                            <?php
                            $query3="select count(*) as count from courses where iid ='$iid'";
                            $result3=mysqli_query($conn,$query3);
                           $data3=mysqli_fetch_assoc($result3);
                            ?>
                            <td><?php echo $data3['count'] ?></td>
                        </tr>
                        <tr>
                            <td>Experience</td>
                            <td>:</td>
                            <td><?php echo $data['experience']?></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

        <h2>Add Lectures:</h2>
        <div class="card">
            <div class="card-body">
                <div class="social-media">
                <span class="sel">Course:</span>
                      <form action="video.php" method="POST" enctype="multipart/form-data">
                        <?php
                        if(isset($_GET['errorincid']))
                        {
                            echo $_GET['errorincid'];
                        }
                        if(isset($_GET['errormismatch']))
                        {
                            echo $_GET['errormismatch'];
                        }
                        if(isset($_GET['sucessinadd']))
                        {
                            echo $_GET['sucessinadd'];
                        }
                        ?>
                      <div>
                      <input  type='text' placeholder="enter course id " name='cid' required>
                    
                          <input type="file" name="files" value="">
                      </div>
                      <input type="submit" value="submit" name="submit">
                     </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End -->
</body>
</html>
