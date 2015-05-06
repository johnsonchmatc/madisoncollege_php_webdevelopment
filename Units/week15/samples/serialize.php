<?php
  $info = array('ellie','yellow', 22);
  setcookie('usr', serialize($info));
?>
<html>
 <head><title>Multiple Cookie Values</title></head>
 <body bgcolor="lavender">
  <font face="verdana" size='+1'>
  <h2>Serialize Cookie Values</h2>
  <?php
    if (! empty($_COOKIE['usr'])) {
      $cookie_data = $_COOKIE['usr'];
      $cookie_data = stripslashes($cookie_data);
      $cookie_data = unserialize($cookie_data);
      echo 'What\'s in the cookie array?<br /><pre>';
      print_r($_COOKIE);
      echo '</pre>Unserialized \'usr\' data:<br /><pre>';
      print_r($cookie_data);
      echo '</pre>';
    }
  ?>
  </font>
 </body>
</html>
