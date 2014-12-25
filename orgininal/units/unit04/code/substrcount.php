<html>
 <head>
  <title>The substr_count() Function</title>
 </head>
 <body bgcolor="lavender">
  <font size="+1">
  <h3>Counting Substrings</h3>
  <?php
    $text = "One little, two little, three, little Wolfies...";
    echo '<p>$text = '."$text</p>";
    echo '<p><b>substr_count($text,"little") </b>counts: ' ;
    echo substr_count($text,"little"),'</p>';
    echo '<p><b>substr_count($text,"little", 5) </b>counts: ' ;
    echo substr_count($text,"little", 5),'</p>';
  ?>
 </body>
</html>
