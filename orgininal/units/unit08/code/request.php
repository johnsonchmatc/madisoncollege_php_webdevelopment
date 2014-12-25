<html>
 <head>
  <title>Processing Form w $_REQUEST</title>
 </head>
 <body bgcolor = "lightgreen"><font size="+1">
  <p>
  <h4>The Contents of the $_REQUEST Array</h4>
  </p><p>
  <?php
    foreach ($_REQUEST as $key=>$val) {
      echo "$key => $val <br />";
    }
  ?>
  </p>
 </body>
</html>
