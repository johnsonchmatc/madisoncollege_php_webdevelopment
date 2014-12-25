<?php
  @ $db = mysql_connect('localhost','djefferson','dino1234');
  if (!$db) {
    exit('Connection to server failed: '. mysql_error());
  }
  if (! mysql_select_db('Northwind', $db)) {
    exit('Database select error: '. mysql_error($db));
  } 
  
  print 'Executing SQL...<br /><br />';
  $result = mysql_query('SELECT ShipName FROM Orders', $db);
  if (!$result) {
    exit('Database query error: '. mysql_error($db));
  }
  $num_rows = mysql_num_rows($result);
  print "<b>There are a total of $num_rows ship names "
       .'in the "Orders" table.';
?>
