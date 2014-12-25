<?php
  @ $db = mysql_connect('198.150.221.252','djefferson','dino1234');
  if (!$db) {
    exit('Connection to server failed: '. mysql_error());
  }
  if (! mysql_select_db('guestbook', $db)) {
    exit('Database select error: '. mysql_error($db));
  } 
  $result = mysql_query("SELECT * FROM messages", $db);
  if (!$result) {
    exit('Database query error: '. mysql_error($db));
  }
  $num_messages = mysql_num_rows($result);
?>
<html>
 <head>
  <title>Guestbook</title>
 </head>
 <body>
  <h1>View the Guest Book</h1>
  <i>There are a total of <?= $num_messages ?> posts to this website.</i>
  <br /><br /><hr>
  <?php
    // Loop over all the posts and print them out
    while ($row = mysql_fetch_assoc($result)) {
      $subject = $row['subject'];
      $body = $row['body'];
      print "<strong>$subject</strong><br />";
      print "<pre>$body</pre><br /><br />";
    }
  ?>
 </body>
</html>
