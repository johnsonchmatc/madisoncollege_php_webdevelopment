<?php
  // Turn on output buffering
  ob_start();
  // Don't accept cookies
  ini_set('session.use_cookies', 0);
?>
<html>
 <head>
  <title>Sessions and Links</title>
 </head>
 <body bgcolor="lavender">
  <font face="verdana" size='+1'>
  <h2>Sessions and Links</h2>
  <?php
    session_start();
    $_SESSION['user'] = 'Jane Doe';
    $_SESSION['color'] = 'yellow';
  ?>

  <?php
    if (! empty($_SESSION['color'])) {
      echo '<pre>';
      print_r($_SESSION);
      echo '</pre>';
      $sid = session_id();
      echo 'SessionID is: ', $sid,'<br />';
    }
  ?>
  <a href="usingSIDx2.php"> Click here</a>
  </font>
 </body>
</html>
