<?php
  session_start();
?>
<html>
 <head><title>Sample7 protected content</title></head>
 <body>
  <?php
    if (isset($_SESSION['Authenticated']) && ($_SESSION['Authenticated'] == 1)) {
  ?>
  <p>Hello. Since you are logged in, you can view protected content!</p>
  <?php } else { ?>
  <p>Sorry, since you are not logged in, you cannot view protected content.</p>
  <?php } ?>
 </body>
</html>
