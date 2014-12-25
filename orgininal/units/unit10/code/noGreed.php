<?php
  $fh = fopen('data10.txt','r');
  if (!$fh)
    exit('File not found.');
  $text = fgets($fh);
  while (!feof($fh)) {
    $newtext = preg_replace('/B.* /','John ', $text);
    echo $newtext,'<br />';
    $text = fgets($fh);
  }
  echo '<hr width="75%">';
  rewind($fh);
  $text = fgets($fh);
  while (!feof($fh)) {
    $newtext = preg_replace('/B.*? /','John ', $text);
    echo $newtext,'<br />';
    $text = fgets($fh);
  }
?>
