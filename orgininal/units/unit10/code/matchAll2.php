<?php
  $string = 'My lovely gloves are lost in the clover, Love.';
  $result = preg_match_all('/love/i', $string, $matches,
                           PREG_OFFSET_CAPTURE);
  if ($result > 0) {
    echo "The pattern /love/ was matched $result times.<br />";
  }
  else {
    echo 'Match was not found.<br />';
  }
  print 'PREG_OFFSET_CAPTURE shows the offset position of each
         pattern found.<br />';
  print_r($matches);
?>
