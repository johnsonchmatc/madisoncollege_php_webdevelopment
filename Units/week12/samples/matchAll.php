<?php
  $string = 'My lovely gloves are lost in the clover, Love.';
  $result = preg_match_all('/(\w*lo\w*)/i', $string, $matches);
  if ($result == true) {
    print "Found $result matches<br />";
  }
  else {
    print 'Didn\'t find a match<br />';
  }
  $match_results = $matches[0];
  foreach($match_results as $match){
    echo $match."<br/>";
  }
?>
