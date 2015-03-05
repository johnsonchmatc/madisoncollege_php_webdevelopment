#Functions & Writing Your Own Functions
##Week 7
###Chapter 17

---
#What is a function?

---
#A function is:

> A self-contained unit of code designed to accomplish a specified task

---
#What makes a good function
* Smaller than small
* Do one thing, and do it well
* Use descriptive names
* Limit the number of arguments

---
#Defining functions

```php
function my_great_function(){
  //do some great things
}
```

---
#Calling functions

```php
my_great_function();
```

---
#Functions with parameters
```php
function say_hello($name){
  echo "Hello $name";
}

say_hello("Bob"); // Hello Bob
```

---
#Function with default parameters
```php
function say_hello($name="Jim"){
  echo "Hello $name";
}

say_hello("Bob"); // Hello Bob
say_hello(); // Hello Jim
```

---
#Passing variables by reference
```php
$full_name = '';
$first_name = 'Bob';
$last_name = 'Smith';

function combine_name(&$full_name, $first, $last){
  $full_name = "$first $last";
}

echo "Hello, $full_name"; // Hello,

combine_name($full_name, $first_name, $last_name);

echo "Hello, $full_name"; // Hello, Bob Smith
```

---
#Callbacks

![inline fit](https://www.youtube.com/watch?v=gFJsBQIqpto)

^ https://www.youtube.com/watch?v=gFJsBQIqpto

---
#Scope
* Local
  * only available to the function, and while the function is executing
* Global
  * visible to an entire script
* Static
  * only available to a function, but persist from call to call

---
#Scope - Local
```php
function who() {
  // Local variable; disappears when function ends
  $friend = "Joe"; 
  print "In the function $friend is your local friend.<br />";
 }
```

---
#Scope - Global
```php
function raise_sal() {
  global $salary;
  $salary *= 1.1; // 10 percent raise
}
$salary = 50000;
raise_sal();
echo 'Congratulations! Your new salary is: $'. $salary .'<br />';
```

^ Could also accomplish this by passing a reference

---
#Scope - Static
```php
function trackme() {
  static $count = 0;
  $count++;
  echo "You have been here $count times.\n<br />";
}
trackme(); // You have been here 1 times
trackme(); // You have been here 2 times
trackme(); // You have been here 3 times
```

---
#Recursive Functions

> A recursive function is a function that calls itself. Recursive functions are often used to handle certain types of mathematical problems such as:

* traverse directories, linked lists, and binary trees
* crack passwords
* create anagrams, and magic squares

---
#Recursive Functions
##Fibonacci sequence
In the beginnning of the 13th century an Italian mathemetician, Leonardo Fibonacci, came up with a formula, called the Fibonacci sequence, to solve the following problem presented at a mathematical competition in Pisa:

---
#Recursive Functions
##Fibonacci sequence
> How many rabbits would be produced in a year if, beginning with a single pair of rabbits, every month each pair reproduces a new pair of rabbits, which become productive when they are one month old, and none of them die, and so on?

---
#Recursive Functions
##Fibonacci sequence
Fibonacci came up with a formula, named after himself, to answer the rabbit question. The Fibonacci sequence normally starts with 0 and 1, and then produces the next Fibonacci number by adding the two previous Fibonacci numbers together: 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, 233, 377, 610, 987, 1597, 2584, 4181, 6765, 10946 . . .

---
#Recursive Functions
##Fibonacci sequence
* [fibonacci](samples/fibonacci.php)

---
#Code Organization 
* Store code that can be re-used in separate files and include with either require() or include()

> The require() function is identical to include(), except that it handles errors differently. If an error occurs, the include() function generates a warning, but the script will continue execution. The require() generates a fatal error, and the script will stop. -Stackoverflow

---
#Code Organization 
```php
<?php
  require("mylibrary.php");
  echo "The average is ", ave(array(11,3,5,7,34));
?>

<?php   include("mylibrary.php");
  echo "The average is ", ave(array(11,3,5,7,34));
?>
```

---
#Code Organization 
* Best practice is to include your files relative to the file that is including them
* If you do not enclose the code of the included file with PHP tags, when PHP starts processing, it will treat the code as though it were an HTML document, causing an error.

---
#Demo
##Let's look at some more code
* [form post](samples/form_post.php)
* [fizzbuzz](samples/fizzbuzz)

---
