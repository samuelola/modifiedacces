<?php
 session_start();
 include 'database.php';


 $message = '';

  if(isset($_POST['student_login'])){
     
     $email = mysqli_real_escape_string($conn,$_POST['email']);
     $pass = mysqli_real_escape_string($conn,$_POST['password']);
     
     $sql = " SELECT * FROM student_access WHERE admin_email = '$email'";
     $result = mysqli_query($conn,$sql);
     $check = mysqli_num_rows($result);
     $row = mysqli_fetch_assoc($result);

     

        if(empty($email)){

            $message .= '<p class="enable">Enter Your email!</p>';
         }

         else if($email != $row['admin_email']){

            $message .= '<p class="enable">Wrong email!</p>';
         }

         else{

             if(!filter_var($email,FILTER_VALIDATE_EMAIL)){

               $message .= '<p class="enable">Invalid email!</p>'; 
             }
         }


         if(empty($pass)){
            
            $message .= '<p class="enable">Enter your password!</p>';
         }

         else if(strlen($pass) < 6){

             $message .= '<p class="enable">Your password must not be less than 6 characters!</p>';
         }


         else{

            if($pass != $row['admin_password']){
              
                $message .= '<p class="enable">Wrong password!</p>';
            }
         }

         if(!empty($_POST['remember_me'])){
               
               setcookie("email",$email,time()+(10*365*24*60*60));
               setcookie("password",$pass,time()+(10*365*24*60*60));
            }
            else{

               if(isset($_COOKIE['email'])){

                   setcookie("email","");
               }
               if(isset($_COOKIE['password'])){

                  setcookie("password","");
               }
            } 

        if(password_verify($pass, $row['admin_password'])){
             
              $sam=$row['admin_password'];
              $sql = "SELECT * FROM student_access WHERE admin_password ='$sam'";
              $result = mysqli_query($conn,$sql);
              $rowme = mysqli_fetch_assoc($result);
              $_SESSION['name'] = $rowme['admin_name'];
               
              header('Location:index.php');
              
        }
        
     }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin's Portal | Access College</title>

  <!-- Bootstrap -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
        
        <img src="imagess/academics/IMG-20181128-WA0006.jpg" class="img-responsive" />
        <p>
        </p>
      </div>

      <div class="col-xs-11 col-md-5 wow " data-wow-duration="1000ms" data-wow-delay="600ms" id="ad1">
            <!--background-->
              
               <div class="wow bounceIn" style="margin-top:0px;">
                    <div class="panel panel-info">
                        
                            
                        <div style="padding-top:30px" class="panel-body">

                           <a class="brandd" href="index.php"><img src="imagess/newaccess2.png" alt="image"></a>
                            <p class="aim">Aiming for the best</p>
                            
                            <div class="panel-title">Welcome to Admin Portal Account</div>
                           <div class="panel-titlee">login to access your account</div>

                            <?php echo $message; ?>
                            <form id="loginform" class="form-horizontal" action="" method="post">
                                <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-user"></i>
                                    </span>
                                    <input id="login-username" type="text" class="form-control" name="email" value="<?php if(isset($_COOKIE['email'])) echo $_COOKIE['email'] ?>" placeholder="Email" >
                                </div>

                                <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-lock"></i>
                                    </span>
                                    <input id="login-password" type="password" class="form-control" name="password" value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password'] ?>" placeholder="password">
                                </div>
                                <div class="input-group">
                                    <div class="checkbox">
                                        <p style="margin-left: 22px;font-size: 0.85em;padding-left: -10px;" id="remberme">
                                          <input style="position: relative;top: 2px;" id="login-remember"  type="checkbox" name="remember_me" <?php if(isset($_COOKIE['email'])) {?>checked <?php }   ?> >&nbsp; Remember me
                                        </p>
                                            
                                      <div id="fpassword" class="fpassword">
                                          <a href="student_fpassword.php">Forgot password?</a>
                                      </div>
                                    </div>
                                </div>
                                 <br>
                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->
                                    <div class="col-sm-12 controls">
                                        <input type="submit" class="btn btn-default" id="btn-login" value="Student Sign In" name="student_login">
                                        
                                        
                                    </div>

                                   <div style="margin-top:-25px"  id="fpassword" class="fpassword">
                                        <a class="btn btn-default" style="color: #fff!important" href="student-register.php">Student SignUp</a>
                                        
                                  </div>

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
  <script src="jss/jquery-2.1.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
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
  <script src="jss/jquery.prettyPhoto.js"></script>
  <script src="jss/jquery.isotope.min.js"></script>
  <script src="jss/wow.min.js"></script>
  <script src="jss/functions.js"></script>

</body>

</html>
