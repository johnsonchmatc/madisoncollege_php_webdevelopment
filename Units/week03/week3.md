#Basic PHP Syntax and HTML Forms
##Chapter 4
###Week 3

---
##Agenda 
- Getting Started with PHP
- Introduction to Data Types
- Using Variables and Constants
- Using HTML Forms and Form Variables

---
#Getting Started with PHP

---
###Mixing in PHP
```
<html>
   <head><title>Mixing HTML and PHP</title></head>
   <body>
   <div class='main'>
     <h1>
      <?php 
        print "It's such a perfect day!"; 
      ?>
      </h1>
      <p>Some paragraph text.</p>
    </div>
   </body>
</html>
```
^ Here we're using php to generate the text for the header, this is a trivial example but imaging setting the header to be 'Welcome <username> to our great site' 

---
###Mixing in PHP - Bad
```
<html>
   <head><title>Mixing HTML and PHP</title></head>
   <body>
   <div class='main'>
      <?php 
        print "<h1>It's such a perfect day!</h1>"; 
      ?>
      <p>Some paragraph text.</p>
    </div>
   </body>
</html>
```
^ What is wrong with this code?

---
###Commenting your code
- We all write code for a reason, we may need at times to share why something is the way it is.
```
<?php
  //Single line comment
  # Also a single line comment
  phpinfo(); //comment after code
  /*
    Multi line block, you can add as many
    lines as you want, but don't write a book
  */
?>
```

---
#Data Types

---
#What fundamental basic data types does PHP support?

---
#Fundamental basic data types does PHP support?
- Integers
- Floats
- Strings
- Bolleans

^ also called scalars
^ assigned single literal value

---
#What is the difference between Integers and Floats?

---
#The difference between Integers and Floats
* Integers are whole numbers Floats are fractional numbers
^ 1,2,3 vs 1.5,2.3,6.6

---
#What is a String?

---
#A string is:
> A group of characters enclosed in either single or double quotes

* Quotes must match

```
  "This is a string"
  'This is also a string'
  "This is not a string'
  "This is 'actually' a string"
  'This is another "example"'
```

---
#The Here Document
##A special Kind of Quoting

```
print <<<EOF
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vulputate, 
arcu a pellentesque viverra, elit metus pretium dui, nec congue ligula 
velit vitae nunc. Aliquam est elit, faucibus vitae tincidunt sed, venenatis 
vitae urna. Duis dignissim vel odio ac convallis. Suspendisse sodales viverra 
ante, in consectetur nulla finibus a. Integer faucibus auctor ipsum, nec 
tincidunt metus mattis id. Morbi non leo tristique, facilisis neque a, 
volutpat purus. Class aptent taciti sociosqu ad litora torquent per 
conubia nostra, per inceptos himenaeos.
EOF
```

---
#What is a Boolean?

---
#A Boolean is:
^ A logical value that is either 'true' or 'false' 

---
#What composite data types does PHP support?

---
#PHP supports the following composite data types:
- Arrays
- Objects
- NULL
- Resources

---
#Array
- Simply a collection of values
- We'll talk more in week 6

---
#What is a NULL data type?

---
#NULL
- Means 'no vlaue', not even an empty string '' or 0 is type NULL

---
#What is a Resource data type

---
#Resources
- Simply a reference to an external resource
- Used for working with files and databases

---
#Objects
* A way of repersenting every day data
* We'll talk more about these week 8

---
#Debugging data types
```
<?php gettype($myVariable); ?>
```

[samples/datatypes.php](sampes/datatypes.php)
^ note using the express <?= rather than <?php echo

---
#Variables

---
#What are the 3 kinds of variables PHP supports?

---
#3 kinds of variables in PHP

1. Predefined
1. User-defined
1. Form variables related to names in an HTML form

---
#Valid variable names
```
$name1
$price_tag
$_abc
$Abc_22
$A23
```
^ notice they all start with a $ and then have a letter or an _

----
#Invalid variable names
```
$10names
box.front
$name#last
A-23
$5
```

---
#Declaring and Intializing Variables
* When are they delaared?
^ normally before they are used
* What are some ways variables 
^ in the script, an HTML form, a query string, cookies, server or server environments

---
#Displaying Variables

[samples/datatypes.php](sampes/datatypes.php)

---
#String Interpolation
```
<?php echo "Hello $name_variable" ?>
```
Is the same as
```
<?php echo "Hello" . $name_variable ?>
This is also known as concatenation

---
#Managing Variables

---
#Actvity
```
* isset()        * is_int()      * is_scalar()
* empty()        * is_integer()  * is_string()  
* is_bool()      * is_long()     * unset()
* is_callable()  * is_null()
* is_double()    * is_numeric()
* is_float()     * is_object()
* is_real()      * is_resource()
```
* http://php.net/manual/en/