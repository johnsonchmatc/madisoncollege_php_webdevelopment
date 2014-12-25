<html>
 <head>
  <title>Directory Functions</title>
 </head>
 <body bgcolor="aqua">
  <font face="verdana">
  <h3>Listing the Contents of a Directory</h3>
  <?php
    $dirhandle = opendir($_SERVER['DOCUMENT_ROOT'] .'/files');
    // List all files in the directory
    while (!(FALSE === ($file = readdir($dirhandle)))) {
      echo $file,'<br />';
    }
    closedir($dirhandle);
  ?>
  </font>
 </body>
</html>
