<html>
 <head>
  <title>Sorting an Array</title>
 </head>
 <body bgcolor="CCFFFF">
  <font style="arial" size="+1">
  <table border="2" cellspacing="3">
   <caption>Sorting by Keys</caption>
   <tr><td>
   <?php
     $states = array('HI' => 'Hawaii',
                     'ME' => 'Maine',
                     'MT' => 'Montana',
                     'CA' => 'California',
                     'AZ' => 'Arizona',
                     'MD' => 'Maryland'
                    );
     ksort($states);
     while(list($key, $val) = each($states)) {
       echo 'states[<b>'. $key .'</b>] => '."$val\n<br />";
     }
   ?>
   </td></tr>
  </table>
 </body>
</html>
