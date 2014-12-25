<html>
 <head>
  <title>Setting a Range of Values</title>
 </head>
 <body bgcolor="azure">
  <font face="arial" size='+1'>
  <?php
    echo "Range of numbers incrementing by 1.<br />";
    $years = range(2000, 2010);
    foreach($years as $value){
      echo "$value ";
    }
    echo "<hr>";
    echo "Range of numbers incrementing by 10.<br />";
    $decades=range(2000, 2050, 10);
    foreach( $decades as $value){
      echo "$value ";
    }
    echo "<hr>";
    echo "Range of numbers decrementing by 5.<br />";
    $decades=range(2000, 1980, -5);
      foreach( $decades as $value){
      echo "$value ";
    }
    echo "<hr>";
    echo "Range of characters incrementing by 1(ASCII value).<br />";
    $alpha=range('A','Z');
    foreach( $alpha as $value){
      echo "$value ";
    }
  ?>
  </font>
 </body>
</html>
