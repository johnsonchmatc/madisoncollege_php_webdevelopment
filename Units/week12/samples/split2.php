<?php
  $colors = 'Primary:red,yellow,blue;'
           .'Secondary:violet,orange,green';
  $myArray = preg_split('/[:,;]/', $colors);

  echo '<h2>Splitting Colors</h2><pre>';
  print_r($myArray);
  echo '</pre><hr width="50%" />';
  
  foreach ($myArray as $key => $value) {
    if ($value == "Primary" || $value == "Secondary") {
      print "$value<br />";
    }
    else {
      print "&nbsp;&nbsp;$key: $value<br />";
    }
  }
?>
