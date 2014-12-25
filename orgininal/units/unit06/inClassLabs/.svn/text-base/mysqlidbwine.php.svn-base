<!DOCTYPE HTML PUBLIC
                 "-//W3C//DTD HTML 4.01 Transitional//EN"
                 "http://www.w3.org/TR/html401/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <title>Wines DB using mysqli lib</title>
</head>
<body>
<pre>
<?php
   // (1) Open the database connection and select "winestore" database
   @ $db = new mysqli("localhost", "astudent", "php155", "winestore");
   if (mysqli_connect_errno()) {
     echo 'Error: Could not connect to the database winestore at this time.<br>';
     exit;
   }
   // (2) Select the winestore database (not needed)
   // mysql_select_db("winestore", $connection);

   // (3) Run the query on the winestore through the connection
   $result = $db->query("SELECT * FROM wine");

   // (4) While there are still rows in the result set, fetch the current
   // row into the array $row
   while ($row = $result->fetch_assoc())
   {
     // (5) Print out each element in $row, that is, print the values of
     // the attributes
      foreach ($row as $attribute)
         print "{$attribute} ";

      // Print a carriage return to neaten the output
      print "<br>";
   }
?>
</pre>
</body>
</html>
