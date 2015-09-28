footer:@johnsonch :: Chris Johnson :: Web Development with PHP and MySQL 
autoscale: true

#More PHP Syntax / Operators, Expressions, Conditionals & Loops
##Chapters 5 and 7
###Week 4

---
#What is an operator?

---
#An operator is:
* A symbol that produces a result based on some rules
* Examples include:
```php
+
-
=
>
<
```

---
#What are operands?

---
#An operand is:
* Data objects that are manipulated by operators
* Can be a string, number, boolean or combination of of these three
* Example:
```php
$result = 5 + 4
```

^ What are the operators in this expression? 
What are the operands?

---
#What is an expression?

---
#An expression is:
* A group of operators and operands that can be evaluated

---
#Assignment

---
#What is assignment in PHP?

---
##An assignment statement evaluates the expression on the right side of the equal sign and assigns the result to the variable on the left.
```php
$result = 5 + 4
```

---
#Precedence and Associativity
* Think of it as order of operations 

---
![fit inline](https://dl.dropboxusercontent.com/s/rip7cpkwivn2jor/2015-02-08%20at%207.03%20AM.png?dl=0)

---
#Precedence and Associativity Examples
* [samples/precedence_associativity.php](https://github.com/johnsonch/madisoncollege_php_webdevelopment/blob/master/Units/week04/samples/precedence_associativity.php)
* [samples/precedence_associativity_form.php](https://github.com/johnsonch/madisoncollege_php_webdevelopment/blob/master/Units/week04/samples/precedence_associativity_form.php)

---
#Short Circut Assignment Operators
>Allow you to perform an arthmetic or string operation by compingin an assignment operator with an arithmetic or string operator.

---
#Short Circut Assignment Operators
Examples:

```php
//Operator 	Example  	Meaning
  =	      $x = 5;	  Assign 5 to variable $x.
  +=      $x += 3;	Add 3 to $x and assign result to $x.
  -=      $x -= 2;	Subtract 2 from $x and assign result to $x.
  *=      $x *= 4;	Multiply $x by 4 and assign result to $x.
  /=      $x /= 2;	Divide $x by 2 and assign result to $x.
  %=      $x %= 2;	Divide $x by 2 and assign remainder to $x.
```

---
#Autoincrement and Autodecrement Operators
> To make programs easier to read, to simplify typing, and, at the machine level, to produce more efficient code, the autoincrement (++) and autodecrement (--) operators are provided.

---
#Autoincrement and Autodecrement Operators
Examples:

```php
//Operator 	Function      	What It Does         	Examples
++$x      Preincrement    Adds 1 to $x	        $x = 3; $x++; $x is now 4
$x++      Postincrement   Adds 1 to $x	        $x = 3; ++$x; $x is now 4
--$x      Predecrement    Subtracts 1 from $x	  $x = 3; $x--; $x is now 2
$x--      Postdecrement   Subtracts 1 from $x	  $x = 3; --$x; $x is now 2
```

---
#Math functions
* [http://php.net/manual/en/ref.math.php](http://php.net/manual/en/ref.math.php)

---
#Casting Operators
> Sometimes you just gotta persuade something to be something else. -Me

* PHP is loosely typed so variables can be different data types at different times
* Casting will allow you to tell functions how to work with your variable
* Pseudo typing your variables

---
#Casting Operators
[samples/casting_operators.php]()

---
#Comparison Operators
* Used to compare numbers or strings

---
#Comparison Operators

```php
//Operator/Operands 	Function
$x == $y            $x is equal to $y
$x != $y            $x is not equal to $y
$x > $y             $x is greater than $y
$x >= $y            $x is greater than or equal to $y
$x < $y             $x is less than $y
$x <= $y            $x is less than or equal to $y
$x === $y           $x is identical to $y in value and type
$x !== $y           $x is not identical to $y
```

---
#Comparison Operators
* The result of the comparison is either true or false
* Numbers are compared as you would expect
* Strings are compared letter by letter using ASCII values
* [samples/vote.php]()

---
#What is equal
* ```==``` tests the value is equal
* ```===``` tests if the value is equal but also the same data type
* [samples/what_is_equal.php]()

---
#Logical Operators
> Logical operators let you test combinations of expressions resulting in boolean value, true and false.

* [samples/logical_operators.php]()

---
#Break

---
#Conditionals
* Ternary
* if/else
* Switch

---
#Conditionals - Ternary
```php
$able_to_vote = ($age > 18) ? true : false;
$variable = empty($_POST['first_name']) ? null : $_POST['first_name'];
```

---
#Conditionals - if/else

```php
if ($age > 18){
  echo 'You can vote';
}else{
  echo 'You can not vote';
}
```

```php
<?php if ($age > 18) : ?>
  <h1>You can vote</h1>
<?php else : ?>
  <h1>You can not vote</h1>
<?php endif; ?>
```

---
#Conditionals - if/elseif/else
```php
if ($age > 18){
  echo 'You can vote';
}elseif ($age > 16) {
  echo 'You can drive';
}else{
  echo 'Get back to school!'
}
```

```php
<?php if ($age > 18) : ?>
  <h1>You can vote</h1>
<?php elseif ($age > 16) : ?>
  <h1>You can drive</h1>
<?php else : ?>
  <h1>Get back to school!</h1>
<?php endif; ?>
```

---
#Conditionals - Switch
```php
$hungry_for = 'chocolate'
switch ($hungry_for) {
  case 'burgers':
    echo 'Head to the Dane';
    break;
  case 'ice cream':
    echo 'Go to Culvers, and it is custard!';
    break;
  case 'chocolate':
    echo 'Grab a Snickers';
    break;
  case 'pad thai':
    echo 'Bandung has the best';
    break;
  default:
    echo 'I do not have any suggestions for you';
    break;
}
```

---
#Checkbox arrays


* [samples/checkboxes.php](https://github.com/johnsonch/madisoncollege_php_webdevelopment/blob/master/Units/week04/samples/checkboxes.php)
