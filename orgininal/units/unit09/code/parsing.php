<html>
 <head><title>Parsing Lines</title>
 </head>
 <body bgcolor="lightgreen">
  <font face=verdana" size="+2">
  <?php
    if (!isset($_POST['submit'])) {
      show_form();
    }
    else {
      process_file();
    }
    
    function show_form() {
  ?>
  <h2>Exploding and Imploding</h2>

  <form method=POST
        action="<?php echo $_SERVER['PHP_SELF']; ?>">
   <table cellspacing="0" cellpadding="2">
    <tr>
     <b> Select a first name from the file.</b>
     <td><input type="text" size=30
                name="first_name" </td>
    </tr>
    <tr>
     <td>&nbsp</td>
    </tr>
    <tr>
     <td><input type="submit" name="submit"
    </tr><br />
   </table>
  </form>
  <?php
    }
    
    function process_file() {
      $filename = $_SERVER['DOCUMENT_ROOT'] .'/files/datebook.txt';
      $lines = file($filename);
      $first_name = trim($_POST['first_name']);
      
      foreach ($lines as $line_value) {
        $fields = explode(':', $line_value);
        $fullname = explode(' ', $fields[0]);
        $phone = $fields[1];
        $address = $fields[2];
        $birthday = $fields[3];
        $salary = $fields[4];
        
        if (strcasecmp($fullname[0], $first_name) == 0 ) {
          $birth = explode('/', $birthday);
          $newstring = implode('<br />', array($fields[0], $phone,
                               $address,'19'. $birth[2],
                               '$'. number_format($salary,2)));
          echo $newstring .'<br />';
          $count++;
          echo '<hr />';
        }
      }
      
      if ($count==0) {
        echo "$first_name is not in the file.<br />";
      }
    }
  ?>
  </font>
 </body>
</html>
