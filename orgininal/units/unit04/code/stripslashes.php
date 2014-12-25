<html>
 <head>
  <title>The stripslashes() Function</title>
 </head>
 <body>
  <form action="stripslashes.php" method="POST">
  <textarea name="story" rows=3 cols=30>(type some quoted text)
  </textarea>
  <br />
  <input type=submit name="submit">
  <input type=reset>
  </form>
  <?php
    if (isset($_POST['submit'])) {
      if (! get_magic_quotes_gpc())
        $input = addslashes($_POST["story"]);
      else
        $input = $_POST["story"];
      // print with escaped characters
      echo '<br /><pre>'. $input .'</pre>';
      // and then with them removed
      echo '<br /><pre>'. stripslashes($input) .'</pre>';
    }
  ?>
 </body>
</html>
