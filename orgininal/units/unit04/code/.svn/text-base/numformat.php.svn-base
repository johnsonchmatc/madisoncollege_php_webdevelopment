<?php
  $number = 7634.887;
  // American format is the default: 7,643.89
  $us_format = number_format($number, 2);
  print "Default is US format: $us_format<br />";

  // French format: 7 634,89
  $french_format = number_format($number, 2, ',', ' ');
  print "French format: $french_format<br />";
   
  // Spanish/Latin American format: 7.634,89
  $spanish_format = number_format($number, 2, ',', '.');
  print "Spanish format: $spanish_format<br />";

  // American format without thousands separator: 7634.89
  $us_format2 = number_format($number, 2, '.', '');
  print "US format w/o commas: $us_format2<br />";
?>
