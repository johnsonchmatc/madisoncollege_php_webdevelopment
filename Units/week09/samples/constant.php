<?php
  class House {
    const TAX_COLLECTOR = "Dick Scrooge";
    const COUNTY = "Butte";
    
    private $owner;
    public $address;
    
    function __construct($owner,$address) {
      $this->owner = $owner;
      $this->address = $address;
      echo 'Constructor initializing a new house ';
      echo 'in the ', get_class($this),' class.<br>';
    }
    function Tax_info() {
      echo 'The tax collector for ', self::COUNTY,
           ' is ', self::TAX_COLLECTOR,'.<br>';
      // could use House::County or House::TAX_COLLECTOR
    }
  }
  // Using the class to create objects
  $myHouse = new House("Joe","13 River Road");
  $yourHouse = new House("Brad","1 Roundabout Drive");
  $theirHouse = new House("Mary", "5 Outthere Street");
  House::Tax_info();
?>

