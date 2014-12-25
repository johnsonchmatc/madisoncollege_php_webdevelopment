<?php
  session_save_path($_SERVER['DOCUMENT_ROOT'].'/files');

  echo 'Your session files are stored in: <b>'
      . session_save_path() .'</b><br /><br />';
  if ($handle = opendir(session_save_path())) {
    echo '<b>Files:</b><br />';
    // Loop over the directory.
    while (FALSE !== ($file = readdir($handle))) {
      echo "$file<br />";
    }
    closedir($handle);
  }
?>
