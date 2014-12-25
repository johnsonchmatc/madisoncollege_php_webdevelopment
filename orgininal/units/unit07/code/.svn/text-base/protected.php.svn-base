<html>
 <head>
  <title>Private, Protected, Public</title>
 </head>
 <body bgcolor="lavender">
  <font face="ariel" size=+1>
  <h1>Private, Protected, Public</h1>
  <?php
    class computer {
      private $password;  // Visible only within this class
      protected $userId;  // Visible within this class and subclass
      public $printer;    // Visible anywhere in the script
      // Parent's constructor
      function __construct() {  
        print "In the parent constructor.\n<br>";
        $this->userId = "willie";     // protected
        $this->password = "urAok5";   // private
      }
      function setUserId($userId) {
        $this->userId=$userId;
      }
      function getUserId() {
        return $this->userId;
      }
      // private methods
      private function setPassword($password){  
        $this->password=$password;
      }
      private function getPassword(){
        return $this->password;
      }
    }

    class Laptop extends Computer {
      public $model;
      public $weight;
      private $password;
      // Laptop's constructor
      function __construct() { 
        echo "In the child's constructor\n<br>";
        parent::__construct();
        // Inherited
        echo "Inherited user name? ". $this->userId, "\n<br>";
        // Not inherited
        echo "Inherited password? ". $this->password, "\n<br>";
        $this->model = 'MacBook Pro';
        $this->weight = '3 lbs.';
      }
      function setPassword($password) {
        $this->password=$password;
      }
      function getPassword() {
        return $this->password;
      }
    }

    // Create objects from the Classes
    $pc = new Computer(); 
    $portable = new Laptop();

    $portable->setPassword("letmein2");
    $pc->printer = "Lazerboy"; // Direct access okay
    $portable->printer="Daisy";
    
    // echo $pc->userId;     // Error: Can't access directly
    echo "<br>My Laptop username is ", $portable->getUserId(),
         "\n<br>";
    echo "My pc username is ", $pc->getUserId(), "\n<br>";
    
    // echo "My pc password is ", $pc->getPassword(), "\n<br>";
    echo "My Laptop password is ", $portable->getPassword(),
         "<br>";
    echo "My pc printer is ", $pc->printer, "\n<br>";
    echo "My Laptop printer is ", $portable->printer, "<br>";
  ?>
  </font>
 </body>
</html>
