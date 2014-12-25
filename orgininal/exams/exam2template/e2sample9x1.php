<?php // Sample9 authentication
  session_start();
  if (isset($_POST['username']) &&
      ($_POST['username'] == 'user') &&
      isset($_POST['password']) &&
      ($_POST['password'] == 'pass')) {
    $_SESSION['Authenticated'] = 1;
  }
  else {
    $_SESSION['Authenticated'] = 0;
  }
  session_write_close();
  header('Location: e2sample9x2.php');
?>
