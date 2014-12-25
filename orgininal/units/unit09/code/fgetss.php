<html>
 <head>
  <title>Read HTML File</title>
 </head>
 <body bgcolor="lavender">
  <pre>
  <?php
    $filename = 'myForm.html';
    $fh = fopen($filename,'r');
    while (!feof($fh)) {
      $content = fgetss($fh);
      echo $content;
    }
    fclose($fh);
  ?>
  </pre>
 </body>
</html>
