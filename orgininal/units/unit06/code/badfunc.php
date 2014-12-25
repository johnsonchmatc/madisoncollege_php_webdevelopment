<?php
  // test of invalid function name in if
  if (magic_quotes_gpc) 
  {
    print 'This will always be true, regardless of the "magic quotes" setting!<br>';
  }
  
  if (get_magic_quotes_gpc()) 
  {
    print 'PHP Directive <b>magic_quotes_gpc</b> is on.<br>';
  }
  else
  {
    print 'PHP Directive <b>magic_quotes_gpc</b> is off.<br>';
  }
 
  if (1) 
  {
    print 'This will always be true, 1 is true, 0 is false!<br>';
  }
?>
