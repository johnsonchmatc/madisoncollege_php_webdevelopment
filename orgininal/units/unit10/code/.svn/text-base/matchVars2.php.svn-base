<?php
  $fh = fopen('data10.txt','r');
  if (!$fh)
    exit('File not found.');
  $text = fgets($fh);
  while (!feof($fh)) {
    $new = preg_replace('/(\w+)\s(\w+)\s(\w+)/','$2, $1 $3',
                        $text);
    echo $new .'<br />';

    $text = fgets($fh);
  }
?>
