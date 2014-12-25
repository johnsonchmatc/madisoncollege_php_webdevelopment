<?php
  // Turn cookies off
  ini_set('session.use_cookies', 0);
  session_start();  // Start a session
?>
<html>
 <body bgcolor="<?php echo ${_SESSION}[color]; ?>">
  <h3>
  <?php
    echo '<pre>';
    print_r($_GET);
    echo '</pre>';
    echo '<br />The session id is: ', session_id(),'<br />';
    echo 'The session name is: ', session_name(),'<br />';
    echo 'SID is: ', SID;
  ?>
  </h3>
  <h2>
  Hi <?php echo $_SESSION['user']; ?>, you like
  <b><?php echo $_SESSION['color']; ?></b>!
  <a href="usingSID3.php">
  Click here</a>
  </h2>
 </body>
</html>
