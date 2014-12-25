<?php
  session_start();
  $current_sessionid = session_id();
  session_regenerate_id();
  $new_session_id = session_id();
  echo "Session id was: $current_sessionid<br />";
  echo "Regenerated session id is: $new_session_id<br />";
?>
