<?php
  session_start();
?>
<html>
 <head><title>Sessions</title></head>
 <body bgcolor="lavender">
  <font size=+1 face="arial">
  <h2>Tracking Visitors with Sessions</h2>
  <?php
    if (! isset($_SESSION)) {
      $_SESSION['visitor_count'] = 0;
    }
    else {
      $_SESSION['visitor_count']++;
    }
    echo 'You are visitor number ', $_SESSION['visitor_count'],
         '.<br />';
    echo 'The session id is: ', session_id();
  ?>
  </font>
 </body>
</html>
