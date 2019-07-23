<?php
 session_start();
 include 'database.php';
 include 'helpers.php';

 //$errors = array();
 $message = '';

  if(isset($_POST['parent'])){

      $username = test_input($_POST['username']);
      $email = test_input($_POST['email']);
      $password = test_input($_POST['password']);

      $sql = "SELECT * FROM parent_access WHERE admin_email = '$email'";
      $result = mysqli_query($conn,$sql);

      $check = mysqli_num_rows($result); 

      if($check == 0){

      $row = mysqli_fetch_assoc($result);

      

      if(empty($username)){
          
          $message .= '<p class="enable">Enter Your username!</p>';
      }
      else if(!preg_match('/^[a-zA-Z]*$/',$username)){

          $message .= '<p class="enable">Please enter a valid username!</p>';
      }
      else if(strlen($username) < 3){
         
        $message .= '<p class="enable">Username must be greater than 2!</p>';
        
      }


      else{

          if($username == $row['admin_name'] ){
              
                $message .= '<p class="enable">Username already taken!</p>';
          }
      }


      if(empty($email)){
         
         $message .= '<p class="enable">Enter Your email</p>';
      } 

    
      else{

         if(!filter_var($email,FILTER_VALIDATE_EMAIL)){

          $message .='<p class="enable">Your email is not valid!</p>';

         }
      }

     
     
       if(empty($password)){
          
          $message .= '<p class="enable">Enter Your password!</p>';
      }
      else if(strlen($password) < 6){

            $message .= '<p class="enable">Your password must not be less than 6 characters!</p>';
      }
      else{

         if($password != $_POST['confirm_password']){

           $message .= '<p class="enable">Your password does not match!</p>';

          }
      }

      


      if($message == ''){

         $pass = password_hash($password,PASSWORD_DEFAULT);
         
         $sql = "INSERT INTO parent_access (admin_name,admin_email,admin_password,admin_token) VALUES ('$username','$email','$pass','')";

         $result2 = mysqli_query($conn,$sql);

         if($result2){

            //$message .= '<p class="text-success">'.mysqli_error($conn).''.$sql.'</p>';
             
             $message .= '<p class="text-success">Your registration is successfull!</p>';
         }

         /*else{

            $message .= '<p class="text-success">'.mysqli_error($conn).''.$sql.'</p>';
         }
         */
      }


    }
    else{

        $message .= '<p class="enable">Email already is taken!</p>';
    }


       

      
  }
?>



<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="Access College in pursuit of its academic excellence has become an household name and has been rated as one of the best schools in Ogun state. The school had won several awards in inter-schools competition, debates, spelling Bees, quiz and lots more.">
  <title>Parent's Portal | Access College</title>

  <!-- Bootstrap -->

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="csss/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="csss/font-awesome.min.css">
  <link rel="stylesheet" href="csss/animate.css">
  <link href="csss/prettyPhoto.css" rel="stylesheet">
  <link rel="stylesheet" href="csss/responsive.css">
  <link href="csss/style.css" rel="stylesheet" />
  <link href="csss/use.css" rel="stylesheet" />
  <link rel="stylesheet" href="csss/staff.css">
  <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="csss/easy-responsive-tabs.css">
  <link rel="stylesheet" href="csss/themify-icons.css"/>
  <link rel="stylesheet" href="csss/magnific-popup.css"/>
  <link rel="stylesheet" href="csss/access.css"/>
  <link href="csss/wat.css" rel='stylesheet' type='text/css' />
  <link rel="stylesheet" href="csss/owl.carousel.css"/>
  <!-- =======================================================
    Theme Name: Company
    Theme URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>

  
<div class="portal">
    <div class="container">
      
      <p><br><br></p>
      <div class="col-xs-11 col-md-7 wow " data-wow-duration="1000ms" data-wow-delay="300ms" id="ad">
        
        <img src="imagess/IMG-20181128-WA0006.jpg" class="img-responsive" />
        <p>
        </p>
      </div>

      <div class="col-xs-11 col-md-5 wow " data-wow-duration="1000ms" data-wow-delay="600ms" id="ad1">
            <!--background-->
              
               <div  class="wow bounceIn" style="margin-top:0px;">
                    <div class="panel panel-info">
                        
                            
                        <div style="padding-top:30px" class="panel-body">

                           <a class="brandd" href="index.php"><img src="imagess/newaccess2.png" alt="image"></a>
                           <p class="aim">Aiming for the best</p>
                           <div class="panel-titllle">Welcome to Parent Portal Account</div>
                           <div class="panel-titlee">login to access your account</div>

                            <p class="text-danger"><?php echo $message ?></p>
                            <form id="loginform" class="form-horizontal" action="" method="post">
                               <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-user"></i>
                                    </span>
                                    <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username">
                                </div>

                                <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-book"></i>
                                    </span>
                                    <input id="login-email" type="text" class="form-control" name="email" value="" placeholder="email">
                                </div>

                                <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-lock"></i>
                                    </span>
                                    <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                                </div>

                                 <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-lock"></i>
                                    </span>
                                    <input id="login-password" type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" >
                                </div>

                              
                                 <br>
                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->
                                    <div class="col-sm-12 controls">
                                        <input type="submit" class="btn btn-info" id="btn-login" value="Parent Sign Up" name="parent">
                                        
                                        
                                    </div>
                                </div>


                                   <div style="margin-top:-38px"  id="fpassword" class="fpassword">
                                        <a class="btn btn-info" style="color: #fff!important" href="parent-login.php">Parent SignIn</a>
                                        
                                  </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
  
  
  <!-- //Calendar Js -->
      </div>


    </div>
  </div>


 
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-2.1.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <!-- dropdown nav -->
    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/functions.js"></script>

</body>

</html>