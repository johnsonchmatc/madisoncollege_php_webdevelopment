<?php
  $fh = fopen('data10.txt','r');
  if (!$fh)
    exit('File not found.');
  $text = fgets($fh);
  while (!feof($fh)) {
    $new = preg_replace('/(Betty)\s(Boop)/','$2, $1',$text);
    echo $new .'<br />';

    $text = fgets($fh);
  }
?>
