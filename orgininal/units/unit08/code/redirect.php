<?php
  if ($_POST['new_url'] == "") {
    exit;
  }
  else {
    header('Location: '. $_POST['new_url']);
    exit;
  }
?>
