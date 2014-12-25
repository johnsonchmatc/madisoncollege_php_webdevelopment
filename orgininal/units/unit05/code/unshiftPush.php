<html>
 <head>
  <title>Unshift and Push</title>
 </head>
 <body bgcolor="yellow">
  <h3>array_unshift() & array_push()</h3>
  <font face="verdana" size="+1">
  <?php
    echo 'Before array_unshift():<br />';
    $names = array('Tom','Dan','Steve','Christian','Jerry');
    foreach ($names as $val) {
      echo "<em>$val </em>";
    }
    // Add 2 new elements to the beginning
    array_unshift($names,'Willie','Liz');
    echo '<br /><br />After array_unshift():<br />';
    foreach ($names as $val) {
      echo "<em>$val </em>";
    }
    // Add two elements to the end
    array_push($names,'Tina','Donna');
    echo '<br /><br />After array_push():<br />';
    foreach ($names as $val) {
      echo "<em>$val </em>";
    }
  ?>
  </font>
 </body>
</html>
