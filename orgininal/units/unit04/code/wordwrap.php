<html>
 <head>
  <title>Word Wrap</title>
 </head>
 <body bgcolor="lavender">
  <font size="+1">
  <h3>Word Wrap</h3>
  <?php
    $text = "The snow is falling in Stockholm on Christmas day
             and I am absolutely mesmerized by its beauty.";
    $new_text = wordwrap($text, 9,"<br />");
  ?>
  Original text: <?=$text?>
  <br />
  Wrapped text:<br />
  <font color="red">
  <?=$new_text?>
  <br />
  </font>
 </body>
</html>
