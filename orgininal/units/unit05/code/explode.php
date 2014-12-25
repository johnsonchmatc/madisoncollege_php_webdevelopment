<html>
 <head>
  <title>explode() Array</title>
 </head>
 <body bgcolor="black">
  <font size="+1" color="white">
  <pre>
  <?php
    $colors = "red green orange blue";
    echo "<b>\$colors is a ". gettype($colors)."\n\n";
    // Split up the string by spaces
    $colors = explode(" ", $colors);
    echo "<img src='explosion.jpg'>","\n";
    echo "<b>After explode(): \$colors is an ".
         gettype($colors) ."\n\n";
    print_r($colors);
    // Let's give explode() second parameter limiting
    // array size to 3 elements
    $colors = explode(" ","red green orange blue", 3);
    echo "\n";
    print_r($colors);
  ?>
  </pre>
 </body>
</html>
