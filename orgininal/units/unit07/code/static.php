<?php
  class House {
    static $houseCount;
    private $owner;
    public $address;

    function __construct($owner,$address) {
      self::$houseCount++;
      $this->owner = $owner;
      $this->address = $address;
      echo "Constructor initializing a new house ";
      echo "in the ", get_class($this)," class.\n<br>";
      echo "So far, we have built ", self::$houseCount,
           " houses.<br>";
    }
  }
  // Using the class to create objects
  $myHouse= new House("Joe","13 River Road");
  $yourHouse = new House("Brad","1 Roundabout Drive");
  $theirHouse=new House("Mary", "5 Outthere Street");
?>
