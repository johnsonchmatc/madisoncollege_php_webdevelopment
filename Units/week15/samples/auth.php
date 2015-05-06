<?php
  session_start();
  // User is logging in
  if (isset($_POST['login'])) {
    if (isset($_POST['username'])
        && ($_POST['username'] == 'phpbee')
        && isset($_POST['password'])
        && ($_POST['password'] == 'phpbee')) {
       $_SESSION['Authenticated'] = 1;
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
