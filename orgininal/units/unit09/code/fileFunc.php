<html>
 <head>
  <title>The file() Function</title>
 </head>
 <body bgcolor="lightgreen">
  <font face="verdana">
  <h3>Assigning Lines of a File to an Array</h3>
  <?php
    $filename = $_SERVER['DOCUMENT_ROOT'] .'/files/data.txt';
    $lines = file($filename); // Lines of file stored in an array
    // Loop through our array, show the file with line numbers
    foreach ($lines as $line_num => $line) {
      $line_num++;
      echo '<b>'. $line_num .'</b>: '. $line ."<br />\n";
    }
  ?>
  </font>
 </body>
</html>
