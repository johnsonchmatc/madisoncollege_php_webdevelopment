<?php
  @ $db = mysql_connect('itins3.matcmadison.edu','djefferson','dino1234');
  if (!$db) {
    exit('Connection to server failed: '. mysql_error());
  }
  if (! mysql_select_db('Northwind', $db)) {
    exit('Database select error: '. mysql_error($db));
  } 
  print 'Executing SQL...<br /><br />';
  $result = mysql_query('SELECT * FROM Customers', $db);
  if (!$result) {
    exit('Database query error: '. mysql_error($db));
  }

  print "<table>";
  // Print the headers
  for ($c=0; $c < mysql_num_fields($result); $c++) {
    print '<th><u>'. mysql_field_name($result, $c) .'</u></th>';
  }
  // Print all the rows
  while ($record = mysql_fetch_row($result)) {
    print '<tr>';
    for ($c=0; $c < mysql_num_fields($result); $c++) {
      print '<td>'. $record[$c] .'</td>';
    }
    print '</tr>';
  }
  print '</table>';
?>
