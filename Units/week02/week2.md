#Introduction to PHP, MySQL and Web Applications
##Chapters 1 and 2
###Week 2

----
#Agenda 
*	Getting Started with PHP
  *	Mixing in PHP
  *	Commenting your code
*	Introduction to Data Types
  *	Scalars
    *	Integers
    *	Floats
    *	Strings
      *	Quoting
      *	Here Document
    *	Booleans
  *	Composite Data Types
    *	Arrays
    *	Objects
    *	NULL
    *	Resources
  *	Debugging Data Types
*	Variables
  *	Predefined
  *	User-defined
  *	Form variables
  *	Valid variable names
  *	Displaying variables
  *	Managing variables
*	PHP Rules to code by (pg. 25 – 26)
  *	PHP code is always enclosed by ```<?php and ?>```
  *	Every PHP statement must end with a semicolon (;)
  *	If there is any PHP code in a web page, it’s a good idea to name the file on the web server with .php, not .html
  *	PHP variable names must begin with a dollar sign ($)
  *	A variable name must be at least one character in length
  *	The first character after the dollar sign can be a letter or an underscore ```_```, and characters after that can be a letter, and underscore, or a number
  *	Spaces and special characters other than _ and $ are not allowed in any part of a variable name
*	$_POST[] superglobal that holds form data (pg. 33 – 34)
*	MySQL
  *	```CREATE DATABASE database_name```
  *	```CREATE TABLE table_name```
  *	```INSERT INTO table_name (column_name1, column_name2, …) VALUES ('value1', 'value2', …)```
  *	```SELECT columns FROM table_name```
  *	```SELECT * FROM table_name```
  *	```SELECT * FROM table_name WHERE column_name = ''```
*	PHP mysqli
  *	mysqli_connect()
  *	mysqli_query()
  *	mysqli_close()
