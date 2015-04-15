<?php
  $fh = fopen('data10.txt','r');
  if (!$fh)
    exit('File not found.');
  $text = fgets($fh);
  while (!feof($fh)) {
    if (preg_match('/[a-z] [0-5]/', $text)) {
      echo $text,'<br />';
    }
    $text = fgets($fh);
  }
?>
