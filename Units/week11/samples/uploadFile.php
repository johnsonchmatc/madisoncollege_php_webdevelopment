<?php

    $filename = $_FILES['user_file']['name'];
    $filesize = $_FILES['user_file']['size'];
    $directory = './uploads/';
    $uploadFile = $directory . $filename;

    if (move_uploaded_file($_FILES['user_file']['tmp_name'], $uploadFile)){
      echo 'The file is valid and was successfully uploaded.
            <br />';
      echo "The file, $filename, is $filesize bytes.<br />";
    }
    $handle = fopen($uploadFile,'r');
    while(!feof($handle)) {
      $text = fgets($handle);
      echo $text,'<br />';
  }
?>
