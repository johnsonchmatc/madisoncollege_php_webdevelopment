<html>
 <head><title>MySQL Fetch a Row</title></head>
 <body bgcolor="lightblue">
  <font size='+1' face='arial'>
  <?php
    print "Opening the connection to the database server<br />";
    $link = mysql_connect('localhost','djefferson','dino1234');
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

    print 'Fetch the first row of data.<br />';
    $record = mysql_fetch_row($result);
    // print_r($record);
    foreach ($record as $value) {
      print "<em>$value </em>"; // print the row
    }
    print '<br />';

    print 'Closing the connection<br />';
    mysql_close($link);
  ?>
  </font>
 </body>
</html>
