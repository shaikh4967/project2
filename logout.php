<?php
   session_start();
   if(isset($_SESSION['id'])){
       session_destroy();
      //  header('location: login.php');
      //  echo '<script>alert("you are logged out")</script>'; 
   }
   else{
       header('location: login.php');
       echo '<script>alert("you are logged out")</script>'; 
   }
?>
         