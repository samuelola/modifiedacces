<?php
session_start();
include'database.php';

if(isset($_GET['token']) && isset($_GET['email'])){

       $token = $_GET['token'];
       $email = $_GET['email'];

       $sql = "SELECT * FROM admin_access WHERE admin_token = '$token' AND admin_email = '$email'";
       $query = mysqli_query($conn,$sql);
       $count= mysqli_num_rows($query);
       if($count > 0){
         
           $str = '0123456789qwsdrefgtyhjuiklpovbnzsd';
           $str = str_shuffle($str);
           $str = substr($str,0,10);
           $password = $str;
           $pass = password_hash($password,PASSWORD_DEFAULT);

          // $update = "UPDATE admin_access SET admin_password = '$pass' WHERE admin_email = '$email'";

           $update="UPDATE `admin_access` SET `admin_password` = '$pass' WHERE `admin_access`.`admin_email` = '$email'";
     
           $query = mysqli_query($conn,$update);

           echo "Your new password is ". $str ."<br>";
           echo "<a href='admin-login.php'>Login Here</a>";
       }
       else{

       	    echo "Check Your link!";
       }
}
else{

	 header('Location:admin_login.php');
}

?>


