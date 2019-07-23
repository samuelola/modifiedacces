<?php
  $conn = mysqli_connect('localhost','root','','access_college');

  if(!$conn){
    
    echo "Error:". mysqli_connect_error();
  }
?>