<html>
 <head>
  <title>The foreach Loop</title>
 </head>
 <body bgcolor="lightblue">
  <h3>Changing Values by Reference</h3>
  <p><b>Original array</b></p>
  <pre>
  <?php
    //$val = "hello";
    //echo "Before foreach: \$val = $val<br />";
    $years = array(44, 53, 64, 77);
    print_r($years);
    // $val is a reference to array values
    foreach($years as &$val) {
      $val += 1900;
      echo "$val<br />"; // $val is global in scope
    }
    echo "After foreach: \$val = $val<br />";
  ?>
  </pre>
  <hr>
  <p><b>Array has been changed</b></p>
  <pre>
  <?php
    print_r($years);
  ?>
  </pre>
 </body>
</html>
