<?php
  if (!empty($_POST)) {
    $subject = $_POST['subject'];
    $body = $_POST['body'];
  }
  if (!empty($subject) && !empty($body)) {
    @ $db = mysql_connect('198.150.221.252','djefferson','dino1234');
    if (!$db) {
      exit('Connection to server failed: '. mysql_error());
    }
    if (! mysql_select_db('guestbook', $db)) {
      exit('Database select error: '. mysql_error($db));
    } 
    $result = mysql_query("INSERT INTO messages (subject, body)"
                         ." VALUES ('$subject','$body')", $db);
    if (!$result) {
        exit('Database query error: '. mysql_error($db));
    } 
    $status = "Message <i>$subject</i> has been posted<br /><br />";
  }
?>
<html>
 <head>
  <title>Guestbook</title>
 </head>
 <body>
  <h1>Post a Message to the Guestbook</h1>
  <strong><?= $status ?></strong>
  <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
    Subject <input type="text" name="subject" size="35">
    <br /><br />
    <textarea name="body" cols="40" rows="15"></textarea>
    <br /><br />
    <input type="submit" value="Post">
  </form>
 </body>
</html>
