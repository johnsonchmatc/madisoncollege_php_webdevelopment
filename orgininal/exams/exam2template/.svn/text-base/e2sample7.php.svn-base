<html>
 <head>
  <title>Sample7 Script</title>
 </head>
 <body bgcolor="#33ff33">
  <?php
    echo 'The uploaded file is: ',
         $_FILES['my_file']['tmp_name'],'<br />';
    $filename = $_FILES['my_file']['name'];
    $filesize = $_FILES['my_file']['size'];
    $directory = $_SERVER['DOCUMENT_ROOT'] .'/files/';
    $uploadFile = $directory . $filename;
    echo "The moved file is: $uploadFile<br />";
    if (move_uploaded_file($_FILES['my_file']['tmp_name'],
                           $uploadFile)) {
      echo 'The file was successfully uploaded.<br />';
      echo "The size of file, $filename, is $filesize bytes.<br />";
    }
  ?>
 </body>
</html>
