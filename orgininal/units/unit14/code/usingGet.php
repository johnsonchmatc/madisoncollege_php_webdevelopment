<?php
  if ($_GET['user'] == 'admin' &&
      $_GET['password'] == 'guess') {
    $authorized = true;
  }
  else {
    $authorized=false;
  }
  if ($authorized) {
    include('secret.php');
  }
?>
