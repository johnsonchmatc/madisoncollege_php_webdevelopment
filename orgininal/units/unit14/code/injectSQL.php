<?php
  $sql = "INSERT INTO users (username, password)"
        ." VALUES ('{$_GET['user']}', '{$_GET['password']}')";
  echo $sql;
?>
