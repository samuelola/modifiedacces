<?php
session_start();
include'database.php';

$message = '';

if(isset($_GET['token']) && isset($_GET['email']) && isset($_POST['reset'])){

       $token = $_GET['token'];
       $email = $_GET['email'];
       $password = $_POST['password'];
       $confirm = $_POST['confirm_pass'];
       $pass = password_hash($password,PASSWORD_DEFAULT);

       $sql = "SELECT * FROM student_access WHERE admin_token = '$token' AND admin_email = '$email'";
       $query = mysqli_query($conn,$sql);
       $count= mysqli_num_rows($query);
       if($count > 0){
         
           if($password == $confirm){
              
              $student_update = "UPDATE student_access SET admin_password ='$pass' WHERE admin_email='$email'";
     
              $query = mysqli_query($conn, $student_update);  

             if($query){
                 
                 header('Location:student-login.php');    
             } 
           }
           else{

               $message .= 'Your passwords does not match!';
           }
           
             
       }
       else{

       	    echo "Check Your link!";
            
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
  <link href="csss/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="csss/font-awesome.min.css">
  <link rel="stylesheet" href="csss/animate.css">
  <link href="csss/prettyPhoto.css" rel="stylesheet">
  <link rel="stylesheet" href="css/responsive.css">
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
                            
                            <div class="panel-titlle">Welcome to Student Portal Account</div>
                           <div class="panel-titlee">login to access your account</div>

                          <p class="enable"><?php echo $message;?></p>  
                             <form id="loginform" class="form-horizontal" action="" method="post">
                                <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-lock"></i>
                                        
                                    </span>
                                    <input id="login-username" type="password" class="form-control" name="password"  placeholder="Enter Your new password" >
                                </div>



                                <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-lock"></i>
                                        
                                    </span>
                                    <input id="login-username" type="password" class="form-control" name="confirm_pass"  placeholder="Re-Enter New password" >
                                </div>
                       

                                
                       
                                 <br>
                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->
                                    <div class="col-sm-12 controls">
                                        <input type="submit" class="btn btn-default" id="btn-login" value="Submit" name="reset">
                                        
                                        
                                    </div>

                                   <div style="margin-top:-25px;margin-bottom:50px"  id="fpassword" class="fpassword">
                                        <a class="btn btn-default" style="color: #fff!important" href="student-login.php">Student SignIp</a>
                                        
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
  <script src="jss/bootstrap.min.js"></script>
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