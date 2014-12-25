<?php
  // Filename: "tracking.php"
  $date_str = 'l dS \of F Y h:i:s A';
  $last_visit = 'Your last visit was on '. date($date_str);
  setcookie('message', $last_visit);
?>
<html>
 <head><title>Products</title></head>
 <body bgcolor="lavender">
  <font face="verdana" size='+1'>
  <h2>Products Page</h2>
  <!-- Rest of page goes here -->
  <?php
    // Has the cookie been set?
    if (! empty($_COOKIE['message'])) { 
      $when = $_COOKIE['message'];
      echo $when .'<br />';
    }
  ?>
  </font>
 </body>
</html>
