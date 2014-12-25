<html>
 <head>
  <title>File Uploads</title>
 </head>
 <body bgcolor="#33ff33">
  <font face="verdana" size="+1">
  <?php
    echo 'The uploaded file is: ',
         $_FILES['picture_file']['tmp_name'],'<br />';
    $filename = $_FILES['picture_file']['name'];
    $filesize = $_FILES['picture_file']['size'];
    $directory = $_SERVER['DOCUMENT_ROOT'] .'/pictures/';
    $uploadFile = $directory . $filename;
    echo "The moved file is: $uploadFile<br />";
    if (move_uploaded_file($_FILES['picture_file']['tmp_name'],
                           $uploadFile)) {
      echo 'The file is valid and was successfully uploaded.
            <br />';
      echo "The image file, $filename, is $filesize bytes.<br />";
    }
  ?>
  <center>
  <br />
  <img src=<?php echo 'http://localhost/pictures/' . $filename; ?>
       width="250" height="175" border="3">
  </center>
  </font>
 </body>
</html>
