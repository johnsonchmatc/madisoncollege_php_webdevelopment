<html>
 <head>
  <title>The substr_replace() Function</title>
 </head>
 <body bgcolor="lavender">
  <font size="+1">
  <h3>Replace a Portion of a String</h3>
  <?php
    $text = "Tom used a teaspoon of sugar.";
    print "Original string: $text<br />";
    // Find the starting position of the substring
    $start = strpos($text,"teaspoon");
    $modified_text = substr_replace($text,"table", $start, 3 );
    print "<br />1. Modified: $modified_text<br />";

    $text = "Tom used a teaspoon of sugar.";
    $modified_text = substr_replace($text,"Peter", 0, 3 );
    print "<br />2. Modified: $modified_text<br />";

    $text = "Tom used a teaspoon of sugar.";
    $modified_text = substr_replace($text,"Yesterday, ", 0, 0 );
    print "<br />3. Modified: $modified_text<br />";

    $text = "Tom used a teaspoon of sugar.";
    $modified_text = substr_replace($text,"vanilla", -6, -1 );
    print "<br />4. Modified: $modified_text<br />";
  ?>
 </body>
</html>
