<html>
 <head>
  <title>Read a Character at a Time</title>
 </head>
 <body bgcolor="lavender">
  <?php
    $filename = $_SERVER['DOCUMENT_ROOT'] .'/files/data.txt';
    if (!file_exists($filename)) {
      print "No such file as: $filename<br />";
      exit();
    }
    $fh = fopen($filename,'r');
    while(!feof($fh)) {
      $char = fgetc($fh);
      if ($char == "\n") {
        $char = '<br />';
      }
      print $char;
    }
    fclose($fh);
  ?>
 </body>
</html>
