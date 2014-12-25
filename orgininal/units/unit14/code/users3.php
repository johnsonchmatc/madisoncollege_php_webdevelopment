<?php
    @ $db = mysql_connect('localhost','djefferson','dino1234');
    if (!$db) {
      die('Connection to server failed: '. mysql_error());
    }
    if (! mysql_select_db('test', $db)) {
      die('Database select error: '. mysql_error($db));
    }
    $sql = "INSERT INTO users (username, password, email)"
          ."VALUES ('marko','password','marko@polo.com')";
// debug print statement
print '[DB query: '. $sql .']<br />';

    $result = mysql_query($sql, $db);
    if (! $result) {
      die('Database query error: '. mysql_error($db));
    }
?>
