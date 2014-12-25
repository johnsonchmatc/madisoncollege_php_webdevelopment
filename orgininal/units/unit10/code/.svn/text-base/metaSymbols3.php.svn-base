<?php
  $fh = fopen('data10.txt','r');
  if (!$fh)
    exit('File not found.');
  $text = fgets($fh);
  while (!feof($fh)) {
    $newtext = preg_replace('/\W\D/','XX', $text);
    echo $newtext,'<br />';
    
    $text = fgets($fh);
  }
?>
