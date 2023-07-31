<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '',"gurukul");
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());

}
if(!isset($_SESSION['email']))
{
 header('location:signin.php');
exit();
}
if(isset($_SESSION['email']))
{      
?>
<style>
  body{
    margin-top:40px;
    background-color:#eee;
  }
  a{
    color:blue;
    font-weight:bold;
    font-family:Georgia;
  }
  span{
    margin-left:580px;
    font-size:400%;
  }
  td{ border: 3px solid black;
padding-left: 2%; 
background-color:#eee;
font-family:Georgia;
} 
table{
  margin-top:100px;
  margin-left:100px;
  height:30%;

}
thead td{
  padding-left:10%;
  padding-top:10px;
  padding-bottom:10px;
  font-style:fantasy;
  font-family:Georgia;
}
</style>
<span> My Courses</span> 
  <table style="width:70%;">
  <thead>
<tr>
  <td><strong> Cname</strong></td>
  <td><strong>Video lectures</strong> </td>
  </tr> 
  </thead>
  <tbody>
  
  <?php
    $data=$_SESSION['email'];
    $query="select * from sid_cid where username in (select username from student where email = '$data' )";
    $check_q=mysqli_query($conn,$query);
    if(mysqli_num_rows($check_q)>0)
    {
        while($data1=mysqli_fetch_assoc($check_q))
        {
          $query2="select * from courses where cid= ".$data1['cid']."";
          $check_q1=mysqli_query($conn,$query2); 
          $data2=mysqli_fetch_assoc($check_q1);
          ?>
          <tr>
              <td style="font-family: 'Times New Roman', serif;"> <?php echo $data2['cname'];?></td>
            <?php
            $cid=$data1['cid'];
            $videos="select * from videos where cid = '$cid' ";
            $check_q4=mysqli_query($conn,$videos); 
          $data4=mysqli_fetch_assoc($check_q4);
          $data4=$data4['videos'];
            ?>
            <td style="font-family: 'Times New Roman', serif;"> <a href="videos/<?php echo $data4 ?>">clickhere</a></td>
             </tr> 
             <?php
        }
    }
    else
    {
        echo "no courses registered";
    }
    ?>
    </tbody>
</table>
<?php
}
?>