<?php
  // House class using a Constructor
  class House{

    private $owner;
    public $address;

    function __construct($owner, $address) {
      if (! empty($owner)&& ! empty($address)) {
        $this->owner = $owner;
        $this->address = $address;
        print "Constructor initializing a new house.<br>\n";
      }
    }
    function displayHouse() {
      echo "This house is owned by $this->owner.<br>\n";
      echo "It's address is $this->address.<br>\n";
    }
  }

  // Using the class to create objects
  $myHouse = new House("Joe","13 River Road");
  $yourHouse = new House("Brad","1 Roundabout Drive");
  $myHouse->displayHouse();
  $yourHouse->displayHouse();
?>
