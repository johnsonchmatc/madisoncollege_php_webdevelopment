<?php
  // Using property-specific set and get methods
  class Employee {
    // private and protected variables
    private $name;
    private $address;
    protected $phone;
    // public methods
    function setName($name)  // setter
    {
      $this->name = $name;
    }
    function getName()   // getter
    {
      return $this->name;
    }
    function setAddress($address)
    {
      $this->address = $address;
    }
    function getAddress()
    {
      return $this->address;
    }
    function setPhone($phone)
    {
      $this->phone = $phone;
    }
    function getPhone()
    {
      return $this->phone;
    }

    function printPersonInfo()
    {
      echo "<hr><b>Employee Info</b><br>";
      echo $this->name . "<br>\n";
      echo $this->address . "<br>\n";
      echo $this->phone . "<br>\n";
    }
  };
  // Create objects of the class
  $Heidi = new Employee();
  $Heidi->setName("Heidi Clum");
  $Heidi->setAddress("1234 Somewhere Blvd ");
  $Heidi->setPhone("123-456-7890");
  
  echo $Heidi->getName() ."<br>\n";
  echo $Heidi->getAddress() ."<br>\n";
  echo $Heidi->getPhone() ."<br>\n";
  
  $Brad = new Employee();
  $Brad->setName("Brad Bit");
  $Brad->setAddress("4321 Sunset Blvd ");
  $Brad->setPhone("987-654-3210");

  $Heidi->printPersonInfo();
  $Brad->printPersonInfo();
?>
