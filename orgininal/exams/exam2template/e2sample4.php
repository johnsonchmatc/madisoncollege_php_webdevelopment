<html>
 <head>
  <title>Sample4 Script</title>
 </head>
 <body bgcolor="lavender">
  <?php
    $filename = $_SERVER['DOCUMENT_ROOT'] .'/files/data.txt';

    if (! file_exists($filename)) {
      exit("No such file as: $filename");
    }
    
    $fh = fopen($filename,'rb');
    while(! feof($fh)) {
      $line = fgets($fh);   
      print $line .'<br />';
    }
    fclose($fh);
    
    $lines = file($filename);
    foreach ($lines as $line_num => $line) {
      $line_num++;
      echo '<b>'. $line_num .'</b>: '. $line .'<br />';
    }
  ?>
 </body>
</html>
