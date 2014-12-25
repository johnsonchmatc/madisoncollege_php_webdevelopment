<html>
 <head>
  <title>The ftell() Function</title>
 </head>
 <body bgcolor="lavender">
  <h3>Marking a Position in a File</h3>
  <pre>
  <?php
    $filename = $_SERVER['DOCUMENT_ROOT'] .'/files/data.txt';
    if (!file_exists($filename)) {
      print "No such file as: $filename";
      exit();
    }
    $fh = fopen($filename,'r');
    $substring = 'Line 1';
    while(!feof($fh)) {
      $line_of_text = fgets($fh);
      echo $line_of_text;
      if (substr_count($line_of_text, $substring)) {
        $bytes = ftell($fh);
      }
    }
    if (!isset($bytes)) {
      echo "$substring not found<br />";
      exit();
    }
    fseek($fh, $bytes, SEEK_SET);
    echo '<hr />';
    echo "<b>Start reading again from byte position $bytes</b>
          <br />";
    while(!feof($fh)) {
      $line_of_text = fgets($fh);
      echo $line_of_text;
    }
    fclose($fh);
  ?>
  </pre>
 </body>
</html>
