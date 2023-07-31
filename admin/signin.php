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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
      integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/signin.css" />
    <title>Sliding Sign In & Sign Up Form</title>
  </head>
  <body>
    <div class="container" id="container">
      <div class="form-container sign-in-container">
        <form action="signincheck.php" method='POST'>
        <?php
                        if(isset($_GET['error']))
                        {
                            echo $_GET['error'];
                        }
                        if(isset($_GET['sucess']))
                        {?>
                            <a href="inst.php" style = color:red;>go to home page </a>
                            <?php
                        }
                        ?>
          <h1>Sign In</h1>
            <label for="cars">LOG IN AS:</label>
            <select name="loginas" id="cars">
              <option value="admin">Admin</option>
              <option value="instructor">Instructor</option>
            </select>
            <br><br>
          <span>or use your account</span>
          <input type="email" name="email" placeholder="Email" />
          <input type="password" name="password" placeholder="Password" />
          <button name='signin'>Sign In</button>
        </form>
      </div>
      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
            <h1>Welcome Back!</h1>
            <p>Please login with your personal info</p>
            <button class="ghost" id="signIn">Sign In</button>
          </div>
         
        </div>
      </div>
    </div>
    <script src="script.js"></script>
  </body>
</html>
