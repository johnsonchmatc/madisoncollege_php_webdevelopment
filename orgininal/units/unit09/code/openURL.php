<html>
 <head>
  <title>Open URL</title>
 </head>
 <body bgcolor="lavender">
  <?php
    $filename = 'http://www.ellieq.com/';
    $fh = fopen($filename,'r');
    while (!feof($fh)) {
      $contents = htmlspecialchars(fgets($fh, 1024));
      print "<pre>$contents</pre>";
    }
    fclose($fh);
  ?>
 </body>
</html>
