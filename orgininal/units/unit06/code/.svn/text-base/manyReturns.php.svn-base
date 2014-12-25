<html>
 <head>
  <title>Conditional Return</title>
 </head>
 <body bgcolor="silver">
  <div align="center">
  <font size="+1">
  <?php
    function clock_time($total_hours) {
      if ($total_hours < 0 || $total_hours > 23) {
        return "Invalid input.<br />";
      }
      $hours = (($total_hours - 1) % 12) + 1;
      if ($total_hours >= 12) {
        return "The time is $hours PM.\n<br />";
      }
      else {
        return "The time is $hours AM.\n<br />";
      }
    }
    
    // If the user filled in the text field, enter the block
    if ($_REQUEST['time']) {
      // Remove any leading/trail whitespace
      $num_hours=trim($_REQUEST['time']);  
      print clock_time($num_hours); // Call clock_time
    }
  ?>
  </font>
  </div>
 </body>
</html>
