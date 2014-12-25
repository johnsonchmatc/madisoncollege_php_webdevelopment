<html>
 <head>
  <title>The strcasecmp() Function</title></head>
 <body bgcolor="lightblue">
  <h3>Comparing Strings--Case-Insensitive</h3>
  <?php
    $str1 = "new york";
    $str2 = "New York";
    if (strcasecmp($str1, $str2) == 0) {
      print "<p><em>$str1</em> is equal to <em>$str2</em></p>";
    }
  ?>
 </body>
</html>
