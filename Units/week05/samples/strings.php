<html>
  <head>
  </head>
  <body>
    <?php
      $string = '';
    ?> 
    <form action="vote.php" method="POST">
      <input type="text" name="string" value="<?= $string ?>">-
      <input type=submit value="submit" name="submit">
      <input type=reset value="clear">
    <form>
  </body>
</html>
