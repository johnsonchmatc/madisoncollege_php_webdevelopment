<?php
  session_start();
  if (isset($_SESSION['favorite_color'])) {
    print 'favorite_color is registered<br />';
    $color = $_SESSION['favorite_color'];
  }
?>
<html>
 <body bgcolor="<?php echo $color; ?>">
  <h1>Your Favorite Color</h1>
  Your favorite color is: <b><?php echo $color; ?></b>
  <?php
    unset($_SESSION['favorite_color']);
    session_destroy();
  ?>
 </body>
</html>
