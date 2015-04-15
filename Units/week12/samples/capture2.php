<?php
  $fh = fopen('data10.txt','r');
  if (!$fh)
    exit('File not found.');
  $text = fgets($fh);
  while (!feof($fh)) {
    if (preg_match('/(Steve)\s(Blenheim)/', $text, $matches)) {
      echo "$matches[0]<br />";
      echo "$matches[1]<br />";
      echo "$matches[2]<br />";
    }
    $text = fgets($fh);
  }
?>
