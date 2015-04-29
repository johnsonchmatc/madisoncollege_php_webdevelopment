#Project Four

###The PHP and MySQL Orders Application

##Table of Contents

1. Concepts
2. Readings
3. Project Overview
4. Exercises
5. Submitting the project.

###Concepts

This project is designed to enhance a simple PHP web application to use additional HTML Form features, and the MySQL database to store records. You will learn these concepts:

* Creating and Adding Functionality to PHP scripts
* Using Additional Functionality of HTML Forms
* Using the MySQL DBMS
* Accessing a MySQL Database Using PHP

###Readings

To prepare for this project you should study or review the following:

PHP and MySQL by Example Ellie Quigley with Marko Gargenta, Prentice Hall

* Chapter 10, More on PHP Forms
* Chapter 13, Introduction to MySQL
* Chapter 14, SQL Language Tutorial
* Chapter 15, PHP and MySQL Integration

###Project Overview

This project will involve additional HTML form features, and use of the MySQL 
DBMS with the PHP programming language.

##Exercises

Create a directory named project4 under your web server's document root directory. 
Place all HTML files and PHP scripts for this project in this new directory.


###Exercise 1

Download these two files containing an HTML form [p4form.hml](p4form.html) and 
a PHP script for processing the form [p4process](p4process.php) into your 
project4 directory. Be sure to give the files the original names, since the HTML 
form file invokes the PHP file by name.

Modify the data collected by the form in p4form.html to include customer name 
and address fields, and hidden fields that identify the form. Modify the PHP 
script named p4process.php to save the order information to two MySQL database 
tables named ```order_master``` and ```order_detail```.

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

Create a custom database for yourself on your nitrous box.  Use the ```$ mysql -u root``` to gain access to the MySQL CLI. Then create a database called personal with the following code.

```
CREATE DATABASE personal;
```

Next create the ```order_master``` and ```order_detail``` tables in your personal 
database schema on your nitrous using the following CREATE TABLE statements:

```
CREATE TABLE order_master
( id INT(12) NOT NULL AUTO_INCREMENT
, order_date DATETIME
, ship_date DATETIME
, customer_name VARCHAR(40) NOT NULL
, address VARCHAR(100) NOT NULL
, item_total FLOAT(10,2) NOT NULL
, total_amt_due FLOAT(10,2) NOT NULL
, PRIMARY KEY(id)
);

CREATE TABLE order_detail
( order_id INT(12) NOT NULL
, item_name VARCHAR(20) NOT NULL
, quantity INT(6) NOT NULL
, price_per_unit FLOAT(10,2) NOT NULL
, PRIMARY KEY(order_id, item_name)
);
```

If the total number of items ordered is greater than zero, write the customer 
order to the ```order_master``` and ```order_detail``` tables.

Create an ```order_master``` record for the order, containing the following 
information:

* ```id``` - This column will be automatically generated and written to the database 
by the auto_increment feature.
* ```order_date``` - The date and time the order was written to the database.
* ```ship_date``` - NULL (empty)
* ```customer name``` - Value entered on the HTML form. Use 
```mysql_real_escape_string()``` to escape any characters that might cause a 
problem for your INSERT statement.
* ```customer address``` - Value entered on the HTML form. Use 
```mysql_real_escape_string()``` here also.
* ```item_total``` - Total dollar amount of items ordered.
* ```total_amt_due``` - Total amount of order, including the 5% tax added to the item total.

Create an ```order_detail``` record for each item ordered, containing the 
following information:

* ```order_id``` - This column must contain the same value as the corresponding 
order_master record's ```id``` column. The ```mysql_insert_id()``` function will 
be useful here.
* ```item_name``` - Use the strings "calendar", "pigs card", and "reindeer card" 
to specify which item this detail record is for.
* ```quantity``` - How many of this item the customer ordered. (Do not write a 
record if zero (0) of this item were ordered.)
* ```price_per_unit``` - Record the price of this item as displayed on the HTML 
form. This could change over time, so it is best to record what it was at time of sale.

Display a message to the user to indicate their order was successfully saved to the database.

###Exercise 2

Now, write a PHP script named p4view.php that reads the customer orders from your 
```order_maste``` and ```order_detail``` tables and displays the records on a 
web page:

Display the company name, "RPCV of Wisconsin", and the text "Pending Orders" 
both as a title and as headers in the body of the web page.

I recommend that you first query the ```order_master``` table, and transfer the 
result set into a local array. Then you can loop through order_master records 
(in the array) and query the corresponding records from the 
```order_detail``` table.

For each order, display the order_master data on a line. Then display the data 
from each order_detail record for that order on an indented line beneath it.

Loop through the order_master records, displaying each one followed by its 
corresponding detail records.

Close the MySQL database explicitly, before ending your script.

###Submitting the project

All of your PHP scripts and HTML files for this project should be in one 
directory. Using a compression program like WinZip, zip this directory and its 
contents into a single file named: project2.zip If you are using Linux or 
Macintosh OSX then you should tar and gzip your directory into a file named: 
project2.tar.gz Submit the project2.tar.gz or project2.zip file to your 
instructor via Blackboard, using the Blackboard Assignment Submission Procedures. 

