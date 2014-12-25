<?php
  session_start();
?>
<html>
 <head>
  <title>Protected page</title>
 </head>
 <body>
  <?php
    if (isset($_SESSION['Authenticated'])
        && ($_SESSION['Authenticated'] == 1)) {
  ?>
  <h2>Protected content</h2>
  <p>Hello. Since you are logged in, you can view protected content</p>
  <p>You can also <a href="auth.php?logout">log out</a></p>
  <?php
    }
    else {
  ?>
  <h2>You are not logged in</h2>
  <p>Hello. Since you are not logged in, you cannot view protected content</p>
  <p>But you can <a href="login.html">log in</a></p>
  <?php
    }
  ?>
 </body>
</html>
