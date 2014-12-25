<html>
 <head>
  <title>Open a File</title>
 </head>
 <body bgcolor="lavender">
  <pre>
  <?php
    // $filename = "data.txt";
    $filename = $_SERVER['DOCUMENT_ROOT'] .'/files/data.txt';
    // Check for file existence
    if (!file_exists($filename)) {  
        print "No such file as: $filename";
      exit();
    }
    // Open the file for reading
    $fh = fopen($filename,'r');
    // Get text from file, line by line
    while(!feof($fh)) {
      $line_of_text = fgets($fh);   
      print $line_of_text;
    }
    // Close the file
    fclose($fh);  
  ?>
  </pre>
 </body>
</html>
