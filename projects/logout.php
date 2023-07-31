<?php
if(isset($_SESSION['email']))
{  session_start();
   session_unset();
   unset($_SESSION['email']);
   session_destory();
   header('location:signin.php');
}
else
{
  header('location:signin.php');
}
?>