<html>
 <head><title>MySQL Queries in PHP</title></head>
 <body bgcolor="lightblue">
  <font size='+1' face='arial'>
  <?php
    print "Opening the connection to the database server<br />";
    $link = mysql_connect('localhost','student','student');
    if (!$link)
      exit('Connection to MySQL server failed!');
    $database = 'Northwind';
    print "Selecting the $database database<br />";
    $selected = mysql_select_db($database, $link);
    if (!$selected)
      exit('Selection of database '. $database .' failed!');

    $query = "UPDATE Shippers SET phone = '(777) 430-2346'"
            ." WHERE CompanyName = 'Federal Shipping'";
    $result = mysql_query($query, $link);
    if (!$result)
      die('Query failed: '. mysql_error($link));

    // number of rows affected by the most recently executed query
    $rows_affected = mysql_affected_rows($link); 
    echo "You have updated $rows_affected row(s).<br />";

    print 'Closing the connection<br />';
    mysql_close($link);
  ?>
  </font>
 </body>
</html>
