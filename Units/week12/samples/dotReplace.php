<?php
  $fh = fopen('data10.txt','r');
  if (!$fh)
    exit('File not found.');
  $text = fgets($fh);
  while (!feof($fh)) {
    $newtext = preg_replace('/J../','Daniel', $text);
    echo $newtext,'<br />';
    
    $text = fgets($fh);
  }
?>
