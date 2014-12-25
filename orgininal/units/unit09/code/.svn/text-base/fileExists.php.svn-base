<html>
 <head>
  <title>File Exists?</title>
 </head>
 <body bgcolor="lightgreen">
  <font face="verdana" size="+1">
  <?php
    $webname = '/pictures/pizza-chef.jpg';
    $filename = $_SERVER['DOCUMENT_ROOT'] . $webname;
    if (file_exists($filename)) {
      echo '<img src='. $webname .'><br />';
    }
    else {
      echo "<em>$filename</em> doesn't exist.<br />";
      exit();
    }
  ?>
  </font>
 </body>
</html>
