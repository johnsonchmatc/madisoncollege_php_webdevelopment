<?php
  function trackme() {
    static $count = 0;
    $count++;
    echo "You have been here $count times.\n<br />";
  }
  trackme();
  trackme();
  trackme();
?>
