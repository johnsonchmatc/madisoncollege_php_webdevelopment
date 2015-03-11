#Project Three

##Enhancing the PHP Application

###Table of Contents

1. Concepts
2. Readings
3. Project Overview
4. Exercises
5. Submitting the project.

This project is designed to enhance a simple PHP web application to use 
additional HTML Form features, a file, and regular expressions. You will learn 
these concepts:

* Creating and Adding Functionality to PHP scripts
* Using Additional Functionality of HTML Forms
* Accessing Files and Directories
* Using Array Variables for File Data
* Pattern Matching and Regular Expressions

###Readings

To prepare for this project you should study or review the following:

PHP and MySQL by Example Ellie Quigley with Marko Gargenta, Prentice Hall

* Chapter 10, More on PHP Forms
* Chapter 11, Files and Directories
* Chapter 12, Regular Expressions and Pattern Matching

##Project Overview

This project will introduce the use of files, additional HTML form features, 
and regular expressions for pattern matching in the PHP programming language.

##Exercises

Create a directory named project3 under your web server's document root 
directory. Place all HTML files and PHP scripts for this project in this new 
directory.

##Exercise 1

Download these two files containing an HTML form [p3form.html](p3form.html) and 
a PHP script for processing the form [p3process.php](p3process.php) into your 
project3 directory. Be sure to give the files the original names, since the HTML 
form file invokes the PHP file by name.

Modify the data collected by the form in p3form.html to include customer name 
and address fields, and hidden fields that identify the form. Modify the PHP 
script named p3process.php to use a function with a regular expression to 
validate customer order information, and to save the order information to a file.

Create form fields for:

* customer name - text box
* customer address - text area with 2 rows
* form identifier - hidden
* form version date - hidden

Prior to processing the HTML form, your script should verify that the input in 
the ```$_POST``` array came from your form by checking that the form identifier 
hidden field is set to the value you gave it. If the input is not from your form, 
display a message such as "Invalid form input, script aborted!" and exit.

Create local variables in the PHP script to store the data from the form's new 
fields.

Display the customer name and address along with other order information already
being displayed by the PHP script.

Use a PHP regular expression based function to verify that the customer has 
included either a 5 digit or 9 digit zip code as the last thing in the address 
field. If either a 5 digit or a 9 digit number is not found (you do not have to 
check it against a list of valid zip codes), display a message such as "Your 
order can not be processed without a valid zip code!" and exit.

If the total number of items ordered is greater than zero, write the customer 
order to a file named orders.txt in your project3 directory.

Write the data to the file in comma-delimited format (CSV) with a newline 
character (\n) to mark end-of-record.

As part of your data validation, you should check for any embedded commas in all 
variables to be written to the data record. If any are found, the value of the 
variable must be enclosed in double quotes when it is written to the file. As an 
alternative, you may choose to enclose all values in double quotes when writing 
them to orders.txt.

Note that you also need to check for embedded "\n" characters in the variables 
(particularly the address variable). Replace each embedded "\n" character with 
a space.

Use appropriate file lock and unlock functions to prevent multiple users of your 
script from writing to the orders.txt file at the same time.

###Exercise 2

Write a PHP script named p3view.php that reads the orders.txt file in your 
project3 directory and displays the records on a web page:

Open orders.txt for reading and display your own appropriate message if the file 
open statement fails (suppress the default PHP error message).

Display the company name, "RPCV of Wisconsin", and the text "Pending Orders" 
both as a title and as headers in the body of the web page.

Lock the file with a shared, read lock before attempting to read data from it.

Display each order on a separate line. You should convert each order (line of 
the input file) into an array, with an appropriate function, so you can loop 
through the order fields, preparing each appropriately for display in the browser.

Be sure to strip off the enclosing double quotes from any fields that contain 
them. Note that if the magic_qutoes_gpc directive is turned on, the double quotes 
will be escaped when they are read in from the file.

Do not forget to unlock the file when done reading it, and close the file explicitly.


###Submitting the project

All of your PHP scripts and HTML files for this project should be in one 
directory. Using a compression program like WinZip, zip this directory and its 
contents into a single file named: project2.zip If you are using Linux or 
Macintosh OSX then you should tar and gzip your directory into a file named: 
project2.tar.gz Submit the project2.tar.gz or project2.zip file to your 
instructor via Blackboard, using the Blackboard Assignment Submission Procedures. 

