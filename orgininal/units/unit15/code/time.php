<?php
  echo time(),'<br />';     // Now in seconds
  print time() + (7 * 24 * 60 * 60);    // Next week in seconds
  print '<br />';
  echo date("M-d-Y", time()),'<br />';   // Today
  echo date("M-d-Y", time() + (7 * 24 * 60 * 60)),'<br />';   // Next week
  echo date("M-d-Y", time() - (7 * 24 * 60 * 60)),'<br />';   // Last week
?>
