<?php
  # PHP5 Simple class
  class House { // Declare a class
    // Create class variables/properties
    public $owner = "John";  
    public $address = "Anywhere, USA";
    // Create a class method
    function displayHouse() {
      echo "This house is of type ", gettype($this),".<br>\n";
      echo "It belongs to the ", get_class($this),
           " class.<br>\n";
      echo "This house is owned by $this->owner. ";
      echo "It's address is $this->address.<br>\n";
    }
  }
  // Using the class - Create an ojbect
  $myHouse = new House();
  $myHouse->displayHouse();
?>
