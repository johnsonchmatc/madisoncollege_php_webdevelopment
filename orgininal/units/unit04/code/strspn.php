<html>
 <head>
  <title>The strspn() Function</title>
 </head>
 <body bgcolor="lavender">
  <font size="+1">
  <h3>Finding the Length of a String by a Mask</h3>
  <?php
    $mask = "0123456789";
    $zip = "95926";
    $count = strspn($zip, $mask);
    if ($count == strlen($zip)){
      print "The zip code consists of $count numbers.<br />";
    }
  ?>
 </body>
</html
