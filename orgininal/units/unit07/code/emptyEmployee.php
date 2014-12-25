<?php
  // Using the set and get methods
  class Employee {
    // leave employee class completely empty
  };

  // Create objects of the class
  $Heidi = new Employee();
  $Heidi->name = "Heidi Clum";
  $Heidi->address = "1234 Somewhere Blvd ";
  $Heidi->phone ="123-456-7890";
  
  echo $Heidi->name, "<br>\n";
  echo $Heidi->address, "<br>\n";
  echo $Heidi->phone,"<br>\n";
  echo "<hr>";
  
  $Brad = new Employee();
  $Brad->firstName = 'Brad';
  $Brad->lastName = 'Bitt';  
  $Brad->street = "4321 Sunset Blvd";
  $Brad->email = 'BradBitt@gmail.com';
  
  echo $Brad->firstName, ' ', $Brad->lastName, "<br>\n";
  echo $Brad->street, "<br>\n";
  echo $Brad->email, "<br>\n";
?>
