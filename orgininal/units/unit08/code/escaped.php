<?php
  foreach ($_REQUEST as $key => $value) {
      echo "<p>User input = $key: <b>$value</b><br />";
      echo 'w/o slashes = <b>'. stripslashes($value) .'</b></p>';
  }
?>
