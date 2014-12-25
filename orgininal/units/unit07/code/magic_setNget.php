<?php
  // Using the set and get methods
  class Employee {
    // Define an assoc. array for properties
    private $attrib = array();
    // public magic methods
    function __set($property,$value) // setter
    {
      $this->attrib[$property] = $value;
    }
    function __get($property) // getter
    {
      if (isset($this->attrib[$property]))
        return $this->attrib[$property];
      else
        return '';
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
  
  $email = $Heidi->email;
  if (!empty($email))
    echo $email,"<br>\n";
  else
    echo 'Heidi has no email specified.<br>';
  echo "<hr>";
  
  $Brad = new Employee();
  $Brad->firstName = 'Brad';
  $Brad->lastName = 'Bitt';  
  $Brad->street = "4321 Sunset Blvd";
  $Brad->email = 'BradBitt@gmail.com';
  
  echo $Brad->firstName, ' ', $Brad->lastName, "<br>\n";
  echo $Brad->street, "<br>\n";
  echo $Brad->email, "<br>\n";
  
  $phone = $Brad->phone;
  if (!empty($phone))
    echo $phone,"<br>\n";
  else
    echo 'Brad has no phone specified.<br>';
?>
