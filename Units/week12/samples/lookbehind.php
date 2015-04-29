<?php
  $fh = fopen('moredata.txt','r');
  if (!$fh)
    exit('File not found.');
  $text = fgets($fh);
  while (!feof($fh)) {
    $newstring = preg_replace('/(?<=ma )[MC][a-z]+/',
                              'Goose', $text);
    print $newstring .'<br />';
    $text = fgets($fh);
  }
?>
