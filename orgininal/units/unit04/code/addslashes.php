<html>
 <head>
  <title>Adding Slashes to Characters</title>
 </head>
 <body bgcolor="lightgreen">
  <h3>The addslashes() Function</h3>
  <font size="+1">
  <?php
    $last_name = $_GET['last_name'];
    if (get_magic_quotes_gpc() == 1) {
      echo "get_magic_quotes_gpc() is on<br />";
      echo '$last_name = '. $last_name .'<br />';
      $query = ("SELECT first_name, last_name from
                 Persons WHERE last_name='$last_name'");
    }
    else{
      echo "get_magic_quotes_gpc() is off<br />";
      echo '$last_name = '. $last_name .'<br />';
      $last_name = addslashes($last_name);
      $query = ("SELECT first_name, last_name from
                 Persons WHERE last_name='$last_name'");
    }
    echo $query,'<br />';
  ?>
  </font>
 </body>
</html>
