<?php
  print 'Opening the connection to the database server<br />';
  @ $db = mysql_connect('localhost','djefferson','dino1234');
  if (!$db) {
    $error_message = mysql_error();
    print 'There was a problem connecting to the MySQL server:<br />';
    exit($error_message);
  }
  print "Connection to MySQL successful<br />";
  
  $database = 'Northwind';
  print 'Selecting database '. $database .'<br />';
  $selected = mysql_select_db($database, $db);
  if (!$selected) {
    $error_message = mysql_error($db);
    print 'There was a problem selecting database '
         . $database .':<br />';
    exit($error_message);
  }
  print "Database $database selected successfully<br />";
?>
