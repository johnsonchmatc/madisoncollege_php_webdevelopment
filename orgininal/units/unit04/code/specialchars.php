<html>
 <head>
  <title>The htmlspecialchars() Function</title>
 </head>
 <body bgcolor="lavender">
  <font size="+1">
  <h3>Creating HTML Entities</h3>
  <b>
  <?php
    $text = "<<Johnson&Son's Tobacco Store>>";
    echo "Original: $text<br /><br />";
    echo "Modified: ", htmlspecialchars($text), "<br />";
  ?>
  </b>
 </body>
</html>

