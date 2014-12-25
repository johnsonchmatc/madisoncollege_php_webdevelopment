<?php
  // Sample5 Script
  @ $db = mysql_connect('itins3.matcmadison.edu','astudent','phpmysql');
  if (!$db) {
    exit('Connection to server failed: '. mysql_error());
  }
  if (! mysql_select_db('Northwind', $db)) {
    exit('Database select error: '. mysql_error($db));
  } 
  $result = mysql_query('SELECT * FROM Customers', $db);
  if (! $result) {
    exit('Database query error: '. mysql_error($db));
  }

  print "<table>";
  for ($i=0; $i < mysql_num_fields($result); $i++) {
    print '<th><u>'. mysql_field_name($result, $i) .'</u></th>';
  }
  while ($record = mysql_fetch_row($result)) {
    print '<tr>';
    for ($j=0; $j < mysql_num_fields($result); $j++) {
      print '<td>'. $record[$j] .'</td>';
    }
    print '</tr>';
  }
  print '</table>';
?>
