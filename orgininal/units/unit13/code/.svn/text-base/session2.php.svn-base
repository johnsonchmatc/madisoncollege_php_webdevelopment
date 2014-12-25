<?php
  session_start();
?>
<html>
 <head>
  <title>Listing User's Book Categories</title>
 </head>
 <body bgcolor="#6666FF">
  <font face="verdana">
  <table width="25%" border='1'>
   <caption><b>Selected Book Categories</b></caption>
   <col span="1" width="100"/>
   <?php
     if (is_array($_SESSION['choices'])) {
       foreach ($_SESSION['choices'] as $book) {
   ?>
       <tr bgcolor="#ffffff"><td ><?php echo $book; ?></td></tr>
   <?php
       } // End foreach block
     } // End if block
     else { 
       echo '<p>You have not selected any book categories yet</p>';
     }
   ?>
  </table>
  <p>
  <a href="session1.php">Click here to return to category page</a>
  </p>
  </font>
 </body>
</html>
