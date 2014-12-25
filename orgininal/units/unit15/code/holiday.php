<?php
  // Christmas 2006
  $date = mktime(0, 0, 0, 12, 25, 2006);
  $holiday = getdate($date);
  echo '<pre>';
  print_r($holiday);
  echo '</pre><br />';
  echo "$holiday[month] $holiday[mday], ",
       "$holiday[year] is on a ",
       $holiday["weekday"],'.<br />';
?>
