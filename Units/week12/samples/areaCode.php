<html>
 <head>
  <title>Finding Phones by Area Code</title>
 </head>
 <body bgcolor="silver">
  <font face=verdana">
  <?php
    $filename = $_SERVER['DOCUMENT_ROOT'] .'/files/datebook.txt';
    $lines = file($filename);
    $area_code = trim($_POST['area_code']);
    echo '<h2>Names and Phones in '. $area_code .' area code</h2>';
       
    foreach ($lines as $the_line) {
      $fields = explode(':',$the_line);
      $name = $fields[0];
      $phone = $fields[1];
      $address = $fields[2];
      $birthday = $fields[3];
      $salary = $fields[4];
      
      if (preg_match("/^$area_code-/", $phone)) {
         echo "$name: $phone<br />";
         $count++;
       }
     }
     
     if ($count == 0) {
        echo 'The area code was not found.<br />';
     }
  ?>
  </font>
 </body>
</html>
