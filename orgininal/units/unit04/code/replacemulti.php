<html>
 <head>
  <title>Search and Replace with Arrays</title>
 </head>
 <body>
  <?php
    $text = "I love pizza and beer!";
    $search = array("love","pizza","beer");
    $replace = array("hate","fruits","vegetables");
    $modified_text = str_ireplace($search, $replace, $text);
    print "original: $text<br />";
    print "modified: $modified_text<br />";
  ?>
 </body>
</html>
