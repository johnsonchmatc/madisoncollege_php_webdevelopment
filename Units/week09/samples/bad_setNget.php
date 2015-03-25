<?php
  // Using the set and get methods
  class Employee {
    // No defined properties
    // public magic methods
    function __set($property,$value) // setter
    {
      $this->property = $value;
    }
    function __get($property) // getter
    {
      return $this->property;
    }
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
  $Brad->name = "Brad Bit";
  $Brad->address = "4321 Sunset Blvd ";
  $Brad->phone = "987-654-3210";
  
  echo $Brad->name, "<br>\n";
  echo $Brad->address, "<br>\n";
  echo $Brad->phone, "<br>\n";
?>
