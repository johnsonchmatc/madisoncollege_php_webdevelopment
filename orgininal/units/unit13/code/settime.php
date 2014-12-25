<?php
  $date_str = 'l dS \of F Y h:i:s A';
  $last_visit = 'Your last visit was on '. date($date_str);
  $expire = 60*60*24*30 + time(); // Add one month
  setcookie('message', $last_visit, $expire);
  // Now check cookie set at last visit
  if (! empty($_COOKIE['message'])) { 
    $when = $_COOKIE['message'];
    echo $when .'<br />';
  }
?>
