<html>
 <head>
  <title>Default Arguments</title>
 </head>
 <body bgcolor="#fffed9">
  <font face="verdana" size="+1">
  <?php
    function print_table($border, $color = "#669966") {
      print <<<TABLE_BLOCK
            <table border="$border">
            <caption><b>Lincoln High Events</b></caption>
            <tr bgcolor="$color">
             <th>Date</th>
             <th>Event</th>
             <th>Time</th>
             <th>Location</th>
            </tr>
            <tr>
             <td>June 8</td>
             <td>Graduation</td>
             <td>8:00 PM</td>
             <td>Gymnasium</td>
            </tr>

            <tr>
             <td>June 21</td>
             <td>Piano Recital</td>
             <td>8:00 PM</td>
             <td>Theatre</td>
            </tr>
            <tr>
             <td>July 4</td>
             <td>Fireworks</td>
             <td>9:00 PM</td>
             <td>Football Field</td>
            </tr>
           </table>
           <hr>
TABLE_BLOCK;
    }
    print_table("1"); // One argument passed; default color used
    print_table("10","gray"); /* Two arguments passed; second
                                 argument overrides the default */
  ?>
  </font>
 </body>
</html>
