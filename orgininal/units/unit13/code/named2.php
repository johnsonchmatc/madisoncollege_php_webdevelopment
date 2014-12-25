<?php
  session_name('ColorSite');
  session_start();
  $favorite_color = $_SESSION['favorite_color'];
  print_r($_SESSION);
?>
<html>
 <body bgcolor="<?php echo $favorite_color; ?>">
  <h1>Your Favorite Color</h1>
  <font size='+2'>
  Your favorite color is <b><?php echo $favorite_color; ?></b>.
  </font>
 </body>
</html>
<?php
  // Flush the buffer and end output buffering
  ob_end_flush();
?>
