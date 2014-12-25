<html>
 <head><title>Variables</title></head>
 <body bgcolor="lightblue">
  <font face = "arial" size='+1'>
  <?php
    $name="Joe Shmoe";
    $age=25.4;
    $now=date("m/d/Y");
    $nothing;
    echo "$name is $age years old.<br />";
    echo '$nothing contains the value of ', gettype($nothing),
         ".<br />";
    echo "Today is $now<br />";
  ?>
  </font>
 </body>
</html>
