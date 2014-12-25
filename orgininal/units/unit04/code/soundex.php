<html>
 <head>
  <title>Words that Sound the Same</title>
 </head>
 <body bgcolor="silver">
  <font size="+1">
  <?php
    $sound1 = "bald";
    $sound2 = "bawled";
    $key1=soundex("$sound1");
    $key2=soundex("$sound2");
    if ($key1 == $key2) {
      print "The key values are: $key1 and $key2.\n<br />";
      print "\"$sound1\" and \"$sound2\" are homophones.\n<br />";
    }
    $sound1 = "tuba";
    $sound2 = "tuber";
    if (metaphone($sound1) == metaphone($sound2)) {
      print "<p>\"$sound1\" and \"$sound2\" are homonyms.</p>";
    }
    else{
      print "<p>\"$sound1\" and \"$sound2\" do not sound the same.</p>";
    }
  ?>
  </font>
 </body>
</html>
