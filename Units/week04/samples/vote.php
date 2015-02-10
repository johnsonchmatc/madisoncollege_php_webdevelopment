<html>
  <head>
  </head>
  <body>
<?php
  $error_messages = array();
  $month = "";
  $day = "";
  $year = "";
  if (isset($_POST["submit"])) {
    //We need to capture empty values and display friendly error messages

  }
?>
  <h3>Enter your brithday:</h3>
    <form action="" method="POST">
      <input type="text" size=2 name="month" value="<?= $month ?>">-
      <input type="text" size=2 name="day" value="<?= $day ?>">-
      <input type="text" size=4 name="year" value="<?= $year ?>">
      <input type=submit value="submit" name="submit">
      <input type=reset value="clear">
    <form>
  </body>
</html>
