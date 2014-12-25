<html>
 <head><title>File Locking</title></head>
 <body bgcolor="lightgreen">
  <font face="verdana" size="+1">
  <?php
    $name = "Jane Doe";
    $address = "1 Sensible Ave.";
    $email = "janedoe@school.edu";
    $title = "Dean";
    $outputstring = "$name\t$address\t$email\t$title\n";
    echo 'The data to be written:<br />';
    echo $outputstring .'<br>';
    
    $filename = $_SERVER['DOCUMENT_ROOT'] .'/files/info.txt';
    $filehandle = fopen($filename, "ab");
    // Acquire an exclusive lock
    if (flock($filehandle, LOCK_EX)) { 
      fwrite($filehandle, $outputstring, strlen($outputstring));
      // Release the lock
      flock($filehandle, LOCK_UN); 
    }
    else {
      echo "Couldn't lock this file.<br />";
      exit();
    }
    $text = file_get_contents("$filename");
    echo '<br />The contents of the file is:<br />';
    echo "<pre>$text</pre>";
    // This would also release the lock
    fclose($filehandle); 
  ?>
  </font>
 </body>
</html>
