<html>
 <head>
  <title>Variable Arguments</title>
 </head>
 <body bgcolor = "#ffffcc">
  <h3>Variable Number of Arguments</h3>
  <font face="verdana" size="+1">
  <pre>
  <?php
     // Arguments must be scalars, not an array
     $forty = 40;
     average($forty, 90, 88, 33, 45);  

     function average() {
       $sum = 0;
       $all_args = func_get_args();
       print_r($all_args);
       $size = func_num_args();
       for($i = 0; $i < $size; $i++) {
         $sum += func_get_arg($i);
       }
       print "The average is: ". $sum/$size ."<br />";
     }
  ?>
  </pre></font>
 </body>
</html>
