<?php
  $fh = fopen('moredata.txt','r');
  if (!$fh)
    exit('File not found.');
  $text = fgets($fh);
  while (!feof($fh)) {
    $newstring = preg_replace('/mama (monkey|bird)/i',
                              'Papa $1', $text);
    print $newstring .'<br />';
    $text = fgets($fh);
  }
  
  rewind($fh);
  $text = fgets($fh);
  # Forward lookahead
  print '-------lookahead---------<br />';
  while(!feof($fh)) {
    $newstring = preg_replace('/mama (?=monkey|bird)/i',
                              'Papa ', $text);
    print $newstring .'<br />';
    $text = fgets($fh);
  }
?>
