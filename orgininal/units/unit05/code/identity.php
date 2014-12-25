<html>
 <head><title>Equality and Identity</title></head>
 <body bgcolor="lightgreen">
  <h3>Equality and Identity</h3>
  <font face="arial" size='+1'>
  <?php
     $pets = array('dog','cat','bird');
     $animals = array(1 => 'cat', 0 => 'dog','2' => 'bird');
     // key-value pairs are equal
     if ($pets == $animals) {
       echo '$pets and $animals are equal.<br />';
     } else {
       echo '$pets and $animals are not equal.<br />';
     }
     // For identity, key-value pairs must be in the
     // same order and keys must be of the same type
     if ($pets === $animals) {
       echo '$pets and $animals are identical.<br />';
     } else {
       echo '$pets and $animals are not identical.<br />';
     }
     // Redefine second array so keys and values match
     $animals = array(0 => 'dog', 1 => 'cat', 2 => 'bird');
     if ($pets === $animals) {
       echo 'Now $pets and $animals are identical.<br />';
     }
  ?>
  </font>
 </body>
</html>
