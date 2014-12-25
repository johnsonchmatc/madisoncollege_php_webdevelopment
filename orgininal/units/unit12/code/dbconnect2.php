<?php
  print 'Opening a connection to the MySQL database server<br />';
  $link = mysql_connect('itins3.matcmadison.edu','djefferson','dino1234');
  if (!$link)
    exit('Connection to MySQL server failed!');
  print "Connection to MySQL worked. The link is: $link <br />";
  print 'Closing the connection<br />';
  mysql_close($link);
?>
