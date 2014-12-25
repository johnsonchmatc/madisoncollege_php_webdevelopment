<?php
  if ($user == 'admin' && $password == 'guess') {
    $authorized = true;
  }
  if ($authorized) {
    include ('secret.php');
  }
  else {
    echo 'You are not authorized to view secret information!';
  }
?>
