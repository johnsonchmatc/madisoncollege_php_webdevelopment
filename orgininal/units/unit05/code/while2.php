<html>
 <head>
  <title>Table Colors</table>
 </head>
 <body bgcolor="blue">
  <table border=1 bordercolor="white" align="center"
          cellpadding="2">
   <caption><b><font size="+2" color="yellow">Colored Rows</font></b>
   </caption>
   <?php
     $colors=array("orange","lightgreen", "lightblue","yellow");
     $i = 0;
     while ($i < 8){
       // Each time through the loop the index value in the array
       // will be changed, with values 0, 1, 2, 3, 0, 1, 2, 3.
       $color = $colors[$i % 4];
   ?>
   <tr bgcolor="<?php echo $color; ?>">
    <td><?php echo $color; ?></td>
    <td><?php echo $color; ?></td>
    <td><?php echo $color; ?></td>
    <td><?php echo $color; ?></td>
    <td><?php echo $color; ?></td>
   </tr>
   <?php
       $i++; // Increment the value of the loop counter
     }
   ?>
  </table>
 </body>
</html>
