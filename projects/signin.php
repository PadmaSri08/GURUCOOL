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
      <div class="form-container sign-up-container">
        <form>
          <h1>Sign Up</h1>
          
          <span>or use your email for registration</span>
          <input type="text" placeholder="" />
          <input type="email" placeholder="" />
          <input type="password" placeholder="" />
          <button >Sign Up</button>
        </form>
      </div>
      <div class="form-container sign-in-container">
        <form action="student_sign.php" method="post">
          <?php
             if(isset($_GET['error']))
             {?>
               <p style=color:red; style=font-family:Georgia;> <?php echo $_GET['error'];?></p>
              <?php
             }
             if(isset($_GET['sucess']))
             {   
               ?>
               <a href="index.php" style = color:red;>go to home page</a>
               <?php
                  
             }
          ?>
          <h1>Sign In</h1>
          <div class="social-container">
            <a href="#" class="social"><i class="fab fa-instagram"></i></a>
            <a href="#" class="social"><i class="fab fa-google"></i></a>
            <a href="#" class="social"><i class="fab fa-tiktok"></i></a>
          </div>
          <span>or use your account</span>
          <input type="email"  name="email" placeholder="email"  required>
          <input type="password" name="password"  placeholder="password" required>
          <a href="#">Forgot your password?</a>
          <button >Sign In</button>
        </form>
      </div>
      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
            <h1>Welcome Back!</h1>
            <p>Please login with your personal info</p>
            <button class="ghost" id="signIn">Sign In</button>
          </div>
          <div class="overlay-panel overlay-right">
            <h1>Hello, Friend!</h1>
            <p>Enter your personal details and start your journey with us</p>
            <button class="ghost" id="signUp"><a href="signup_html.php">Sign Up</a></button>
          </div>
        </div>
      </div>

    </div>
    <script src="script.js"></script>
  </body>
</html>
