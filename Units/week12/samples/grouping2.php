<?php
  $fh = fopen('data10.txt','r');
  if (!$fh)
    exit('File not found.');
  $text = fgets($fh);
  while (!feof($fh)) {
    if (preg_match('/(ma)+/', $text)) {
      echo $text,'<br />';
    }
    $text = fgets($fh);
  }
?>
