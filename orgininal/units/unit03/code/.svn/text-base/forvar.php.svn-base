<html>
 <head>
  <title>For Loop and Variable Variables
  </title>
 </head>
 <body bgcolor="000099">
  <font face="arial" size="+1">
  <table border="1" bordercolor="white" cellpadding="3">
   <tr>
    <td bgcolor="00ff66" align="center">Checkbox Item</td>
    <td bgcolor="00ff66" align="center">Checked Values</td>
   </tr>
   <?php
     extract($_REQUEST);
     for($i=1; $i <= 5; $i++) {
       $temp = "place$i";
       echo "<tr><td bgcolor='00ff99'>$temp</td>";
       echo "<td bgcolor='00ffcc'>${$temp}</td></tr>";
     }
   ?>
  </table>
  </font>
 </body>
</html>
