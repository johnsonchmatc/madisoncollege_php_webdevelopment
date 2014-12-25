<html>
 <head><title>Sample8 Script</title></head>
 <body bgcolor="lightgreen">
  <?php
    $name = "John Doe";
    $address = "1001 Logic Dr.";
    $email = "johndoe@place.gov";
    $title = "VP";
    $outputstring="$name\t$address\t$email\t$title\n";
    echo 'The data to be written:<br />';
    echo $outputstring .'<br>';
    
    $filename = $_SERVER['DOCUMENT_ROOT'] .'/files/info.txt';
    $filehandle = fopen($filename, "ab");
    if (fwrite($filehandle, $outputstring,
               strlen($outputstring)) == FALSE) {
      echo "You cannot write to $filename.<br />";
    }
    else {
      $text = file_get_contents($filename);
      echo '<br />The contents of the file is:<br />';
      echo "<pre>$text</pre>";
    }
    fclose($filehandle);
  ?>
 </body>
</html>
