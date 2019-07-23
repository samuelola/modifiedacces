<?php
  session_start();
  include'database.php';

  if(isset($_GET['link'])){
     
     if($_SESSION['token'] && $_SESSION['email']){
        
          $token=$_SESSION['token'];
          $email = $_SESSION['email'];
          $url = "resetpassword.php?token=$token&email=$email";

          echo "Please click on the link   "."<a href='resetpassword.php?token=$token&email=$email'>".$url."</a>";
     }
  }
  else{

  	  header('Location:admin-login.php');
  }

  // Note this link would have been sent to the user email , but testing purpose
?>

