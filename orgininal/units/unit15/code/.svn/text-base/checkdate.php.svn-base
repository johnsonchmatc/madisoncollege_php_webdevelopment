<?php
  echo '<br />Is 12/31/2006 a valid date?  ';
  var_dump(checkdate(12, 31, 2006));

  echo '<br />Is 12/32/2006 a valid date?  ';
  var_dump(checkdate(12,32, 2006));
    
  echo '<br />Is this better?  ';
  // Let mktime() adjust the date to the correct date
  echo date('m/d/Y', mktime(0,0,0, 12,32,2006));

  echo '<br />Is 2/29/2008 a leap year?  ';
  var_dump(checkdate(2, 29, 2008));

  echo '<br />Is 2/29/2006 a leap year?  ';
  var_dump(checkdate(2, 29, 2006));
?>
