<html>
 <head><title>Copy a File</title></head>
 <body bgcolor="lavender">
  <?php
    $oldfilename = $_SERVER['DOCUMENT_ROOT'] .'/files/datebook.txt';
    $newfilename = $_SERVER['DOCUMENT_ROOT'] .'/files/datebook.bck';
    if (!copy($oldfilename, $newfilename)) {
      exit("Copy of $oldfilename failed<br />");
    }
    else { echo "Copy of $oldfilename succeeded!<br />";}
  ?>
 </body>
</html>
