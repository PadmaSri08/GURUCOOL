<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign up page</title>
    <link rel="stylesheet" href="css/signup.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
  </head>
  <body>
<div class="container">
  <div class="title"><strong>Sign Up Now</strong> </div>
  <form action="student_signup.php" method="post">
    <?php
       if(isset($_GET['error']))
       {
         ?>
           <p style= color:red;><?php echo $_GET['error']; ?></p>
            <?php
       }
  ?>
     <?php
       if(isset($_GET['errorinmail']))
       {
         ?>
           <p style= color:red;> <?php echo $_GET['errorinmail']; ?></p>
          <?php 
       }
    ?>
    <?php
       if(isset($_GET['password']))
       {
         ?>
           <p style = color:red > <?php echo $_GET['password']; ?></p>
            <?php 
       }
    ?>
    <?php
       if(isset($_GET['sucess']))
       {
        ?>
          <a href="signin.php">siginnow</a>
          <?php
       }
    ?>
    <div class="user-details">
      <div class="input-box">
        <span class="star" class="details">First Name </span>
          <input type="text"  name="firstname" placeholder="" required>
      </div>
      <div class="input-box">
        <span class="details">Middle Name </span>
          <input type="text" name="middlename" placeholder="">
      </div>
      <div class="input-box">
        <span class="star" class="details">Last Name </span>
          <input type="text" name="lastname" placeholder="" required>
      </div>
      <div class="input-box">
        <span class="star" class="details"> User Name</span>
          <input type="text" name="username" placeholder="" required>
      </div>
      <div class="input-box">
        <span class="star" class="details">Password </span>
          <input type="password" name="password"placeholder="" required>
      </div>
      <div class="input-box">
        <span class="star" class="details">Confirm Password </span>
          <input type="password" name="conform" placeholder="" required>
      </div>
      <div class="input-box">
        <span class="star" class="details">Mobile Number </span>
          <input type="tel" name="mobileno" placeholder="" required>
      </div>
      <div class="input-box">
        <span class="star" class="details">Email </span>
          <input type="email" name="email" placeholder="" required>
      </div>
      <div class="input-box">
        <span class="star" class="details">Father Name </span>
          <input type="text" name="fathername"  placeholder="" required>
      </div>

      <div class="input-box">
        <span class="details">Mother Name </span>
          <input type="text" name="mothername" placeholder="" >
      </div>

      <div class="input-box">
        <span class="star" class="details">Date of birth </span>
          <input type="date" name="dateofbirth" placeholder="" required>
      </div>

      <div class="input-box">
        <span class="star" class="details">Age </span>
          <input type="number" name="age" placeholder="" min="5" max="100" required>
      </div>
      <div class="input-box">
        <span class="star" class="details">Gender </span>
          <input  list="val" name="gender" required>
          <datalist id="val" >
            <option value="Male" >Male</option>
            <option value="Female" >Female</option>
            <option value="Others">Others</option>
            </datalist>
      </div>
      <div  class="input-box">
        <span class="star" class="details">Address </span>
          <input type="text" name="address" placeholder="" required>
      </div>

      <div class="input-box">
        <span class="star" class="details">Course of Interest 1 </span>
          <input type=""  name="courseofintrest1" list="Val" required>
          <datalist id="Val">
            <option value="Computer Science">
              <option value="Electrical">
                <option value="Data Science">
                  <option value="Web DevMelopment">
          </datalist>
      </div>
      <div class="input-box">
        <span class="details">Course of Interest 2</span>
          <input type="" name="courseofintrest2" list="Values">
          <datalist id="Values">
            <option value="Computer Science">
              <option value="Electrical">
                <option value="Data Science">
                  <option value="Web Development">
          </datalist>
      </div>
        <p><span><input type="checkbox" required </span> I agree to the terms of service</p>
    </div>
    <div class="button">
      <input type="submit" value="Sign Up">
    </div>
    <p class="p">Do you have an account ? <a href="signin.php">Sign in</a></p>
  </form>
</div>
  </body>
</html>
