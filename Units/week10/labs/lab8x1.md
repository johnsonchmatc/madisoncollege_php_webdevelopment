#Exercise 1

* Create a directory named lab08 under your labs directory
* Create a script named lab7x8.inc.php and save it into your lab07 directory.

* Create an HTML form file that contains the following fields:
  * First Name - text field 
  * Last Name - text field
  * Street 1 - text field
  * Street 2 - text field
  * City - text field
  * State - select list [select list snippet](select_list.md) 
  * Postal code - text field
  * Multi Select Products list containing the following items
    * Time Capsule - 3TB $499.99
    * AirPort Express $99.00
    * Mini DisplayPort to VGA Adapter $29.00
    * Apple Wireless Keyboard $69.00
    * Solid State Drive $89.99
    * Chromebook $149.00
  * A Hidden field with your name as the value

* The ACTION attribute of the form tag should be assigned the name of the PHP 
script that will handle your form. Your form should use the GET method. Call it 
lab8x1script.php

* Save the form file as lab8x1form.html in the lab08 directory you created in step #1.

* Open lab8x1form.html in a browser to test whether it contains syntax errors, 
and fix any errors you encounter.

#Exercise 2

* Create a PHP script named lab8x1script.php and save it into your lab08 directory.

* Use the ```$_GET``` superglobal array to assign the form fields to PHP variables. 
Give the PHP variables names that differ from the form field names.

* Note: Do not use an ```extract($_REQUEST)``` or ```extract($_GET)``` funtion 
call to create the PHP variables!

* Add PHP code to print the values of the three form fields the user entered in 
the lab8x1form.html HTML form.

* Test to see if any of the form fields is empty, and print a "no value 
submitted" message instead of the field value if that is the case.

Test your code and show it to your instructor.

#Exercise 3

* Copy your HTML form and PHP script, the modify them to use the POST method 
instead of GET.

* Name the revised form file lab8xp1post.html and the revised PHP script lab8xp1post.php .

* Again, be sure to test to see if any of the form fields is empty, and print a 
"no value submitted" message instead of the field value if that is the case.

Test your code and show it to your instructor.
