<html>
 <head>
  <title>The trim() Function</title>
 </head>
 <body bgcolor="lavender">
  <font size="+1">
  <h3>Trimming a String</h3>
  <b>
  <?php
    $text = "\x20\x0a\t\tCutting away the excess whitespace!\n\n";
    echo "<pre>Original: ", $text;
    echo "Modified: ",trim($text),"\n</pre>";
    echo "<hr>";
    $text = "Cutting away the excess dots!...";
    echo "Original: $text<br />";
    echo "Modified: ", rtrim($text, "."),'<br />';
  ?>
  </b>
 </body>
</html>
