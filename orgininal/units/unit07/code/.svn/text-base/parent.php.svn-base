<?php
  // Parent/base/super class
  class Computer { 
    private $password; // Is visible in this class
    protected $userId; // Is visible in this class and subclass
    public $printer; // Is visible everywhere in the script

    function __construct() {
      echo "Parent constructor just called.\n<br>";
      $this->userId = "willie";
      $this->password="UrOKhi5";
    }
  }
  // Subclass extends the Computer class
  class Laptop extends Computer {
    public $brand;
    public $weight;
    private $password = "LetMeIn2";

    // Subclass constructor calls parent constructor
    function __construct($brand,$weight) { 
      parent::__construct();
      echo "Child constructor just called.\n<br>";
      $this->brand = $brand; // New properties for the child
      $this->weight = $weight;
    }
  }
  
  // Create objects of the classes
  $pc = new Computer();
  $portable = new Laptop("Sonie","3.5");
  
  $pc->printer = "LazerBeam"; //direct access ok
  $portable->printer = "Daisy";
  
  // echo $portable->password, "<br>"; // Fatal error
  // echo $pc->password, "<br>";   // Fatal error
  
  // Get publicly available properties
  echo '<br>Public properties for object $pc:<br><pre>'; 
  print_r(get_object_vars($pc));
  
  echo '</pre><br>Public properties for object $portable:<br><pre>';
  print_r(get_object_vars($portable));
  echo '</pre>';
?>
