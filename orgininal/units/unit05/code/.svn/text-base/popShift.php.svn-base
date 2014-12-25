<html>
 <head>
  <title>Pop and Shift</title>
 </head>
 <body bgcolor="lightblue">
 <h3>array_pop() & array_shift()</h3>
  <font face="verdana" size="+1">
  <?php
    echo 'Before array_pop():<br />';
    $names = array('Tom','Dan','Steve','Christian','Jerry');
    foreach ($names as $val) {
      echo "<em>$val </em>";
    }
    $popped = array_pop($names); // Remove last element
    echo '<br /><br />After array_pop():<br />';
    foreach ($names as $val) {
      echo "<em>$val </em>";
    }
    echo "<p>$popped was removed from the end of the array.</p>";

    echo 'Before array_shift():<br />';
    foreach ($names as $val) {
      echo "<em>$val </em>";
    }
    $shifted = array_shift($names); // Remove first element
    echo '<br /><br />After array_shift():<br />';
    foreach ($names as $val) {
      echo "<em>$val </em>";
    }
    echo "<p>$shifted was removed from the start of the array.</p>";
  ?>
  </font>
 </body>
</html>
