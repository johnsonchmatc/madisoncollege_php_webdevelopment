<?php
  $fh = fopen('data10.txt','r');
  if (!$fh)
    exit('File not found.');
  $text = fgets($fh);
  while (!feof($fh)) {
    list($fname, $lname, $number) = preg_split('/\s+/', $text);
    $new_number = preg_replace('/(\d{3})$/e','$1 * 1.1', $number);
    printf('%s, %s %.2f<br />', $lname, $fname, $new_number);

    $text = fgets($fh);
  }
?>
