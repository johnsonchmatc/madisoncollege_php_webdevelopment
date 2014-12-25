<html>
 <head>
  <title>MySQL Fetch Associative Array</title>
 </head>
 <body bgcolor="lightblue">
  <font size='+1' face='arial'>
  <?php
    print "Opening the connection to the database server<br />";
    $link = mysql_connect('198.150.221.252','djefferson','dino1234');
    if (!$link)
      exit('Connection to MySQL server failed!');
    $database = 'Northwind';
    print "Selecting the $database database<br />";
    if (! mysql_select_db($database, $link))
      exit('Selection of database '. $database .' failed!');

    $query = 'SELECT CompanyName, Phone from Shippers';
    $result = mysql_query($query, $link);
    if (!$result)
      die('Query failed: '. mysql_error($link));

    print 'Fetch the first row of data.<br /><br />';
    $record = mysql_fetch_assoc($result);
    foreach ($record as $key => $value) {
      print "<em>$key: $value</em><br />"; // Print the row
    }
    print '<br />';

    print 'Closing the connection<br />';
    mysql_close($link);
  ?>
  </font>
 </body>
</html>
