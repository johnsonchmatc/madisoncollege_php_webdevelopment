<html>
 <head><title>Type Conversion</title></head>
 <body bgcolor="pink"><font size="+1">
  <?php
    $item = 5.5;
    print "$item is type ". gettype($item) ."<br />";
    $item = 44;
    print "$item is type ". gettype($item) ."<br />";
    $item = "Today was a bummer!";
    print "\"$item\" is type ". gettype($item) ."<br />";
    $item = true;
    print "$item is type ". gettype($item) ."<br />";
    $item = NULL;
    print "$item is type ". gettype($item) ."<br />";
  ?>
 </body>
</html>
