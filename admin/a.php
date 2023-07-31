<?php
$conn = mysqli_connect('localhost', 'root', '',"gurukul");
if (!$conn) 
{
  die("Connection failed: " . mysqli_connect_error());
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin</title>
        <link rel="stylesheet" href="css/a.css">
      </head>
      <body>
        <img style="height:40%; " class="lo" src="w23.png" alt="">
        <h2 id="b">Courses</h2>
      
  <div class="flip-card">
  <div class="flip-card-inner">
  <div class="flip-card-front">
  <img src="img/courses-1.jpg" alt="RAM" style="width:200px;height:200px;">

  </div>
  <div class="flip-card-back">
  <h4>Web design & development courses for beginners</h4>
  <p>Jhon Doe</p>
  <h4>599/-</h4>
  </div>
</div>
</div>
<div class="flip-card">
<div class="flip-card-inner">
<div class="flip-card-front">
<img src="img/courses-2.jpg" alt="RAM" style="width:200px;height:200px;">

</div>
<div class="flip-card-back">
<h4>Python for beginners</h4>
<p>Emma</p>
<h4>699/-</h4>
</div>
</div>
</div>
<div class="flip-card">
<div class="flip-card-inner">
<div class="flip-card-front">
<img src="img/courses-3.jpg" alt="RAM" style="width:200px;height:200px;">

</div>
<div class="flip-card-back">
<h4>Java for beginners</h4>
<p>John</p>
<h4>699/-</h4>
</div>
</div>
</div>
<div>
  <a href="p.php"> <img src="g6.jpg" alt="x" style="width:200px;height:200px;"></a>
</div>
</div>

</div>
        <hr>
        <h2 id="c">Instructors</h2>
        <div class="flip-card">
        <div class="flip-card-inner">
        <div class="flip-card-front">
        <img src="img/team-1.jpg" alt="RAM" style="width:200px;height:200px;">
        </div>
        <div class="flip-card-back">
        <h1>Emma</h1>
        <h4>Python for beginners</h4>
        </div>
      </div>
    </div>
    <div class="flip-card">
    <div class="flip-card-inner">
    <div class="flip-card-front">
    <img src="img/team-2.jpg" alt="RAM" style="width:200px;height:200px;">
    </div>
    <div class="flip-card-back">
    <h1>John</h1>
    <h4>Java for beginners</h4>
    </div>
  </div>
</div>
<div class="flip-card">
<div class="flip-card-inner">
<div class="flip-card-front">
<img src="img/team-3.jpg" alt="RAM" style="width:200px;height:200px;">
</div>
<div class="flip-card-back">
<h1>Olivia</h1>
<h4>GOOGLE Data analytics</h4>
</div>
</div>
</div>
<div class="flip-card">
<div class="flip-card-inner">
<div class="flip-card-front">
<img src="img/team-4.jpg" alt="RAM" style="width:200px;height:200px;">
</div>
<div class="flip-card-back">
<h1>Harry</h1>
<h4>Projects in java</h4>
</div>
</div>
</div>

<div>
  <a href="i.php"> <img src="g6.jpg" alt="x" style="width:200px;height:200px;"></a>
  <hr>
  <h2 id="c">Details</h2>
  <table style="width:100%;">
  <thead>
<tr>
  <td><strong> Course Id</strong></td>
  <td><strong>Course Name</strong> </td>
  <td><strong> Instructor Name</strong></td>
  <td><strong> No of users registered</strong></td>
  <td><strong> Category</strong></td>
</tr>
  </thead>
  <tbody>
    <?php
      $query = "select s.cid ,c.cname,i.iname,count(s.cid) as count,c.category from sid_cid s INNER join courses c  on s.cid=c.cid inner join instructor i on i.iid = c.iid GROUP by s.cid order by count DESC;";
      $result= mysqli_query($conn,$query);
      if(mysqli_num_rows($result)>0)
      {
         while($data=mysqli_fetch_assoc($result))
         {
          ?>
             <tr>
              <td> <?php echo $data['cid'];?></td>
              <td> <?php echo $data['cname'];?></td>
              <td> <?php echo $data['iname'];?></td>
              <td> <?php echo $data['count'];?></td>
              <td> <?php echo $data['category'];?></td>
             </tr> 
          <?php
         }
      }
      else echo "no students registered to any course till now ";
    ?>
  </tbody>
</table>
</div>
<script>
  function openPage(pageName,elmnt,color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(pageName).style.display = "block";
    elmnt.style.backgroundColor = color;
  }
  document.getElementById("defaultOpen").click();
  </script>
      </body>
</html>

