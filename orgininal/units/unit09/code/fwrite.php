<html>
 <head>
  <title>Write a File with fwrite()</title>
 </head>
 <body bgcolor="lavender">
  <?php
    $name = "Joe Shmoe Jr.";
    $address = "100 Main St.";
    $email = "jshmoe@whatever.mil";
    $title = "Major";
    $outputstring = "$name\t$address\t$email\t$title\n";
    echo 'The data to be written:<br>';
    echo $outputstring .'<br>';
    
    $filename = $_SERVER['DOCUMENT_ROOT'] .'/files/info.txt';
    $filehandle = fopen($filename, "wb");
    fwrite($filehandle, $outputstring, strlen($outputstring));
    fclose($filehandle);
  ?>
 </body>
</html>
