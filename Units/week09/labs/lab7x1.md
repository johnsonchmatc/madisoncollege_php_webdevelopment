#Exercise 1 - Create a class in PHP 5

* Create a directory named lab07 under your labs directory
* Create a script named lab7x1.inc.php and save it into your lab07 directory.
* Create a PHP class named UnitCounter with 2 member properties/variables:

```
protected $units = 0;
protected $weightPerUnit = 1.0;
```

* Create public individual user-defined setter and getter methods/functions for the 2 member properties, so users of the class UnitCounter will be able to set and get their values through your methods.

* Class UnitCounter will also have 2 other member methods/functions:

```
// Add $n to the total number of units, default $n to 1
function add($n = 1) {
  $this->units = $this->units + $n;
}

// Member method that calculates the total weight
function totalWeight() {
  return $this->units * $this->weightPerUnit;
}
```
