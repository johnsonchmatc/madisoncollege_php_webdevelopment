<html>
 <head><title>Font Color</title></head>
 <body bgcolor="lightgreen">
  <font face="arial" size="+1">
  <p>
  <?php
    extract($_REQUEST);
    if (! isset ($submit_color)) { // check that variables were set
      exit;
    }
  ?>
  <table border="2" cellpadding="10">
  <tr bgcolor="white">
  <?php
    switch ( $color ) {
      case "red":
        print "<td><b><font color=".$color.">Font is red</td>";
        break;
      case "blue":
        print "<td><b><font color=".$color.">Font is blue</td>";
        break;
      case "purple":
        print "<td><b><font color=".$color.">Font is purple</td>";
        break;
      case "green":
        print "<td><b><font color=".$color.">Font is green</td>";
        break;
      default:
        print "<td><b><font color=".'black'.">Font is black</td>";
        break;
    }
  ?>
  </tr>
  </table>
  </font>
 </body>
</html>
