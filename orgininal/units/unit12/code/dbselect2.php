<?php
  print 'Opening a connection to the MySQL database server<br />';
  $link = mysql_connect('itins3.matcmadison.edu','djefferson','dino1234');
  if (!$link)
    exit('Connection to MySQL server failed!');

  print 'Selecting a database schema<br />';
  $selected = mysql_select_db('Northwind', $link);
  if (!$selected)
    exit('Selection of the MySQL database failed!');
  print 'MySQL database selected successfully<br />';

  mysql_close($link);
?>
