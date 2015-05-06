<?php
  // Accessing the cookie value
  $count = $_COOKIE['visits']; 
  if ($count == '') {
    // Initialize the counter
    $count = 1; 
  }
  else {
    $count++;
  }
  // "visits" is the cookie name
  setcookie('visits', $count); 
?>
<html>
 <head>
  <title>Setting a Counter in a Cookie</title>
 </head>
 <body bgcolor="lavender">
  <font size=+1 face="arial">
  <h2>Visitor Count with Cookies</h2>
  You are visitor number <?php echo $count; ?>.<br />
  </font>
 </body>
</html>
