<?php
  // Sample1 Script
  $link = mysql_connect('itins3.matcmadison.edu','astudent','phpmysql');
  if (!$link)
    exit('Connection to MySQL server failed!');

  $database = 'Northwind';
  if (! mysql_select_db($database, $link))
    exit('Selection of database '. $database .' failed!');

  $query = 'SELECT CompanyName, Phone from Shippers';
  $result = mysql_query($query, $link);
  if (!$result)
    die('Query failed: '. mysql_error($link));

  $record = mysql_fetch_assoc($result);
  foreach ($record as $key => $value) {
    print "$key: $value<br />";
  }
  print '<br />';

  mysql_close($link);
?>
