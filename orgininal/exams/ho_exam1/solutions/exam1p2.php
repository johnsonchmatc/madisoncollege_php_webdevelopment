<!DOCTYPE HTML PUBLIC
                 "-//W3C//DTD HTML 4.01 Transitional//EN"
                 "http://www.w3.org/TR/html401/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <title>PHP MySQL Exam 1 - Spring 2008 - HandsOn Problem 2</title>
</head>
<body>
 <h2 align="center">PHP MySQL Exam 1 - Spring 2008 - HandsOn Problem 2</h2>
 <pre>
<?php
  //
  // Student Name: 
  // Date of Exam: March 13, 2008
  //
  // Submit your finished script using the 
  // Blackboard project submission procedure
  //
  // Task #1: Create a PHP script named "exam1p2.inc.php"
  // 
  // In the "exam1p2.inc.php" script, create a PHP class named UnitCounter
  // with 2 member variables:
  // 
  //       public $units = 0;
  //       public $weightPerUnit = 1.0;
  // 
  // Also give class UnitCounter 2 member functions:
  // 
  //       function add($n = 1)  // Add $n to the total number of units
  //       {
  //         $this->units = $this->units + $n;
  //       }
  // 
  //       function totalWeight()  // Calculate the total weight
  //       {
  //         return $this->units * $this->weightPerUnit;
  //       }
  //
  // Save the file "exam1p2.inc.php" containing the completed class
  // definition for UnitCounter.
  //
  // Task #2: Create and manipulate objects of the class UnitCounter
  //          in a PHP script named "exam1p2.php" (this file).
  // 
  // In this file, add a statment to include the UnitCounter definition
  // and cause a fatal error if the file "exam1p2.inc.php" does not exist.
  // 
  // Create the objects $boxes and $buckets of class UnitCounter:
  //
  //       For object $boxes:
  //          1. Set the $units member variable to 24 directly
  //          2. Add 3 units using the member function add()
  //          3. Print out the number of units in $boxes
  // 
  //       For $buckets:
  //          1. Set the units member variable to 10 directly
  //          2. Set the weightPerUnit to 1.5 directly
  //          3. Print out the result of the totalWeight member function for $buckets
  //
  // Your code for Task #2 starts here:

  require('exam1p2.inc.php');
  
  $boxes = new UnitCounter();
  $boxes->units = 24;
  $boxes->add(3);
  echo 'The number of units of $boxes is: ', $boxes->units, '<br>';
  echo 'The weight-per-unit of $boxes is: ', $boxes->weightPerUnit, '<br><br>';
  
  $buckets = new UnitCounter();
  $buckets->units = 10;
  $buckets->weightPerUnit = 1.5;
  echo 'The number of units of $buckets is: ', $buckets->units, '<br>';
  echo 'The weight-per-unit of $buckets is: ', $buckets->weightPerUnit, '<br>';
  echo 'The total weight of $buckets is: ', $buckets->totalWeight(), '<br><br>';
  
  // do not delete the end-of-PHP tag below 
?>
</body>
</html>
