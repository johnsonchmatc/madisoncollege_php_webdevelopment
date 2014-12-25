<html>
 <head><title>Sample 5</title>
 </head>
 <body>
  <?php
    $colors = 'red green orange blue';
    echo '$colors is a '. gettype($colors) .'<br />';
    $employee = array('Name' => 'Jon Doe',
                      'ID' => '23d4',
                      'Job Title'=> 'Designer',
                      'Department'=>'Web Development'
                     );
    $colors = explode(" ", $colors);
    echo 'After explode(): $colors is an '. gettype($colors) .'<br />';
    echo "<hr>";
    
    foreach ($colors as $value) {
      echo "$value <br />";
    }
    echo "<hr>";
    
    foreach ($employee as $key => $value) {
      echo "employee[$key] => $value<br />";
    }
  ?>
 </body>
</html>
