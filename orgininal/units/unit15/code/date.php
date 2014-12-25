<html>
 <head>
  <title>Using the date() Function</title>
 </head>
 <body bgcolor="lavender">
  <font size="+1" face="verdana">
  <?php
    // date() function examples
    echo '1. <b>date(\'d-M-Y\')</b> returns=> <b><i>',
         date('d-M-Y'),'</i></b><br>';
    echo '2. <b>date(\'M/d/Y\')</b> returns=> <b><i>',
         date('M/d/Y'),'</i></b><br>';
    echo '3. <b>date(\'D dS M, Y h:i a\')</b> returns=> <b><i>',
         date('D dS M, Y h:i a'),'</i></b><br>';
    echo '4. <b>date(\'\T\h\e \\t\i\m\e \i\s: h:m a\')</b> returns=> <b><i>',
         date('\T\h\e \\t\i\m\e \i\s: h:m a'),'</i></b><br>';
    echo '5. <b>date(\'\T\o\d\a\y \i\s: l\')</b> returns=> <b><i>',
         date('\T\o\d\a\y \i\s: l'),'</i></b><br>';
  ?>
  </font>
 </body>
</html>
