<?php
  # PHP 5 Destructor
  class House {

    private $owner;
    public $address;

    function __construct($owner, $address) {
      if (!empty($owner) && !empty($address)) {
        $this->owner = $owner;
        $this->address = $address;
        echo "Constructor initializing a new house ";
        echo "in the ", get_class($this)," class.<br>\n";
      }
    }
    function displayHouse() {
      echo "This house is owned by $this->owner and ";
      echo "its address is $this->address.<br>\n";
    }
    function __destruct() {
      echo 'Evacuate now! ', $this->owner,"'s house being destroyed!<br>\n";
    }
  }
  // Using the class to create objects
  $myHouse= new House("Joe","13 River Road");
  $yourHouse = new House("Brad","1 Roundabout Drive");
  $myHouse->displayHouse();
  $yourHouse->displayHouse();
?>
