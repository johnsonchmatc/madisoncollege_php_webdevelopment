<html>
 <head>
  <title>fseek and fread</title>
 </head>
 <body bgcolor="lavender">
  <?php
    $filename = $_SERVER['DOCUMENT_ROOT'] .'/files/data.txt';
    $filehandle = fopen($filename,'r');
    $total_bytes = filesize($filename);
    $contents = fread($filehandle, $total_bytes);
    // Go back to the beginning of the file
    fseek($filehandle, 0); 
    $contents = fread($filehandle, $total_bytes);
    echo "Reading from the beginning of the file:<br />
          <pre>$contents</pre>";
    fseek($filehandle, -10, SEEK_END);
    $contents = fread($filehandle, $total_bytes);
    echo "Reading from the end of the file:<br />
          <pre>$contents</pre>";
    fclose($filehandle);
  ?>
 </body>
</html>
