<?php
  session_start();
  extract($_SESSION);
  printf('%s<br />', SID); // Print the session ID
  echo 'The session id is: ', session_id(),'<br />';
?>
<html>
 <body bgcolor="<?= $color ?>">
  <h2>
  Hi again <?= $user ?>, You still like <b><?= $color ?></b>!
  <?php
    // Individually remove session variables
    unset($_SESSION["user"]);
    unset($_SESSION["color"]);
    // $_SESSION = array(); // Remove all session variables
    session_destroy();
    exit();
  ?>
  </h2>
 </body>
</html>
