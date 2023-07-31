<html>
    <head>
    <meta charset="utf-8">
        <link rel="stylesheet" href="css/signup.css">
    </head>
    <body>

    <img src="g1.png" alt="">
  <div class="container">
    <div class="title"><strong>Instructor Details</strong> </div>
    <form class="" action="instructor.php" method="post">
      <?php
        if(isset($_GET['error']))
        {
          echo $_GET['error'];
        }
        if(isset($_GET['mail']))
        {
          echo $_GET['mail'];
        }
        if(isset($_GET['sucess']))
        {
        
          echo "details are entered";
    
        }
      ?>
      <div class="user-details">
        <div class="input-box">
          <span class="star" class="details">Full Name </span>
            <input type="text"  name="name" placeholder="" required>
        </div>
        <div class="input-box">
          <span class="star" class="details">Id </span>
            <input type="text" name="iid" placeholder="" required>
        </div>
        <div class="input-box">
          <span class="star" class="details">Mobile Number </span>
            <input type="tel" name="mobileno" placeholder="" required>
        </div>
        <div class="input-box">
          <span class="star" class="details">Email </span>
            <input type="email" name="email" placeholder="" required>
        </div>

        <div  class="input-box">
          <span class="star" class="details">Specialisation 1</span>
            <input type="text" name="s1" placeholder="" required>
        </div>

                <div  class="input-box">
                  <span  class="details">Specialisation 2</span>
                    <input type="text" name="s2" placeholder="">
                </div>

                        <div  class="input-box">
                          <span class="star" class="details">Qualification 1</span>
                            <input type="text" name="q1"  placeholder="" required>
                        </div>

                        <div  class="input-box">
                          <span  class="details">Qualification 2</span>
                            <input type="text" name="q2" placeholder="" >
                        </div>

                        <div  class="input-box">
                          <span  class="details">Qualification 3</span>
                            <input type="text" name="q3" placeholder="" >
                        </div>

                                <div  class="input-box">
                                  <span class="star" class="details">Experience</span>
                                    <input type="text" name="experience" placeholder="" required>
                                </div>

      </div>
      <div class="button">
        <input type="submit" value="Add">
      </div>
    </form>
  </div>
    </body>
</html>
