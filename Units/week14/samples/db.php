<?php
  $db = mysql_connect('localhost','root');
  if (!$db) {
    exit('Connection to server failed: '. mysql_error());
  }
  if (! mysql_select_db('northwind', $db)) {
    exit('Database select error: '. mysql_error($db));
  } 
?>
