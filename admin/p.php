<html>
    <head>
    <meta charset="utf-8">
        <link rel="stylesheet" href="css/signup.css">
    </head>
    <body>
    <img src="g1.png" alt="">
  <div class="container">
    <div class="title"><strong>Course Details</strong> </div>
    <form  action="courses.php" method="post" >
      <?php
         if(isset($_GET['error']))
         {?>
            <p style=color:red;><?php echo $_GET['error'];?></p>
          <?php
         }
         if(isset($_GET['errorinstructor']))
         {?>
            <p style=color:red;><?php echo $_GET['errorinstructor'];?></p>
          <?php
         }
         if(isset($_GET['sucess']))
         {
          ?>
          <a href="a.php ">course was added go to home</a>
          <?php
         }
       ?>
      <div class="user-details">
        <div class="input-box">
          <span class="star" class="details">Course Name </span>
            <input type="text" name='cname' placeholder="" required>
        </div>
        <div class="input-box">
          <span class="star" class="details">Course Id </span>
            <input type="text"  name='cid',placeholder="" required>
        </div>
        <div class="input-box">
          <span  class="details">Level </span>
          <input type="" name='level' list="Values">
        <datalist id="Values">
          <option value="advanced">
            <option value="intermediate">
              <option value="begineer">

        </datalist>
        </div>
        <div class="input-box">
          <span  class="details">Type</span>
          <input type="" name='type' list="Value">
        <datalist id="Value">
          <option value="Paid">
            <option value=Free>


        </datalist>
        </div>
        <div class="input-box">
          <span  class="details">Price</span>
            <input type="text" name='price' placeholder="" >
        </div>

        <div  class="input-box">
          <span class="star" class="details">Instructor Id</span>
            <input type="text"  name='iid' placeholder="" required>
        </div>

                <div  class="input-box">
                  <span  class="details">Category</span>
                  <input name='category' type="" list="Valu">
            <datalist id="Valu">
              <option value="Computer Science">Computer Science</option>
                <option value="Electrical">
                  <option value="Data Science">
                    <option value="Web Development">
            </datalist>
                </div>

                        <div  class="input-box">
                          <span class="details">Duration</span>
                            <input type="text" name='duration' placeholder="" required>
                        </div>
      </div>
      <div class="button">
        <input type="submit" value="Add">
      </div>
    </form>
  </div>
  </body>
</html>
