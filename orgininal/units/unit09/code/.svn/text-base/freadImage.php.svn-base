<?php
  $filename = $_SERVER['DOCUMENT_ROOT'] .'/pictures/pizza-chef.jpg';
  $handle = fopen($filename,'rb');
  $contents = fread($handle, filesize($filename));

  header("Content-type: image/jpeg");
  echo $contents;

  fclose($handle);
?>
