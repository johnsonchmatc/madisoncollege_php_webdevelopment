<?php
  $string = 'My lovely gloves are worse for wear, Love.';
  // Turn off case sensitivity
  if (preg_match("/LOVE/i", $string, $matches)) {
    echo 'Pattern /LOVE/ was found.<br />';
  }
  else {
    echo 'Match was not found.<br />';
  }
  print_r($matches);
?>
