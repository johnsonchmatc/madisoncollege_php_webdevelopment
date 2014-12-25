<html>
 <head>
  <title>Server Info</title>
 </head>
 <body bgcolor="silver">
  <font face="verdana" size="+1">
  <?php
    echo "My server is \"", $_SERVER["SERVER_NAME"], "\".\n<br />";
    echo "The server's IP address is \"", $_SERVER["REMOTE_ADDR"],
         "\".\n<br />";
    echo "My browser is \"", $_SERVER["HTTP_USER_AGENT"],
         "\".\n<br />";
    echo "The PHP script being executed is \"",
          $_SERVER["PHP_SELF"], "\".\n<br />";
  ?>
 </body>
</html>
