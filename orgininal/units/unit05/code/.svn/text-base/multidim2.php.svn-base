<html>
 <head>
  <title>Array of Associative Arrays</title>
 </head>
 <body bgcolor="9999CC"><font face="arial">
  <h3>Array of Associative Arrays</h3>
  <b>
  <?php
    $teachers = array(
      array('Name' => "John Doe",
            'Subjects' => array('Government','English'),
            'Salary'=> 56000,
           ),
      array('Name' => "Steven Lee",
            'Subjects' => array("Math","Science","PE"),
            'Salary'=> 65000,
           ),
      array('Name' => "Jean Perot",
            'Subjects' => array("French", "Literature"),
            'Salary'=> 57000,
           ),
                      );
    foreach($teachers as $value) {
      echo "<hr>";
      foreach($value as $key => $val) {
        if ($key == "Subjects") {
          echo "$key: ";
          foreach($val as $subjects) {
            echo "$subjects ";
          }
        }
        else {
          echo "<br />$key: $val<br />";
        }
      }
    }
  ?>
  </b>
 </body>
</html>
