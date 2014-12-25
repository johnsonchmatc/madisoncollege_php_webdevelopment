<html>
 <head>
  <title>Read a File</title>
 </head>
 <body bgcolor="lavender">
  <?php
    $filename = $_SERVER['DOCUMENT_ROOT'] .'/files/data.txt';
    $filehandle = fopen($filename,'rb');
    $contents = fread($filehandle, filesize($filename));
    print "<pre>$contents</pre>";
    fclose($filehandle);
  ?>
 </body>
</html>
