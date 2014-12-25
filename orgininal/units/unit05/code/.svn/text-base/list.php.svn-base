<html>
 <head>
  <title>The each and list Functions</title>
 </head>
 <body bgcolor="CCFFCC">
   <?php
     echo "<h4>Using the list() and each() Functions</h4>";
     echo "<hr /><p>";
     $colors = array("red","green","blue");
     list($a, $b) = $colors; // Create two variables, $a and $b
     echo "The list() function assigns array elements to variables: ";
     echo 'list($a, $b) = $colors<br />';
     echo "\$a == '$a' and \$b == '$b'";
     echo '</p><p>';
     $book = array('Title' => 'War and Peace',
                   'Author' => 'Tolstoy',
                   'Publisher' => "Oxford University Press"
                  );
     while( list($key, $val) = each($book)) {
       echo "$key => $val<br />";
     }
     echo '</p>';
     reset($book);
   ?>
 </body>
</html>
