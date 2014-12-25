<html>
 <head>
  <title>Including a file</title>
 </head>
 <body>
  <font size="+1">
  <?php
    $color = "red";
    require_once("test.library");
    welcome();
  ?>
  <hr>
  <?php
    $color = "blue";
    welcome();
    echo $mood, $color,"<br />";
  ?>
  </font>
 </body>
</html>
