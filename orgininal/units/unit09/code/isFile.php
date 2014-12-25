<html>
 <head>
  <title>Is it a Regular File?</title>
 </head>
 <body bgcolor="lightgreen">
  <font face="verdana" size="+1">
  <?php
    $filename = $_SERVER['DOCUMENT_ROOT'];
    if (is_file($filename)) {
      echo "$filename exists and is a regular file.<br />";
    }
    else {
      exit("<em>$filename</em> is not a regular file.<br />");
    }
  ?>
  </font>
 </body>
</html>
