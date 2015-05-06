<?php
  session_start();
  // User is logging in
  if (isset($_POST['login'])) {
    if (isset($_POST['username']) && isset($_POST['password'])) {
      //Local vars are easier to workwith in queries 
      $username = $_POST['username'];
      $password = $_POST['password'];
      
      //Put your code to authenticate the user from the database here

      //End of your code to authenticate the user
     }
     else {
       $_SESSION['Authenticated'] = 0;
     }
     session_write_close();
     header('Location: protected.php');
   }
   // User is logging out
   if (isset($_GET['logout'])) {
     session_destroy();
     header('Location: login.html');
   }
?>
