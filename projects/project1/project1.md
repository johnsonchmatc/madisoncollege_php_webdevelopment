#Project One
##Simple PHP Application

Total Points: 20
Due: 2/11/2015 at the start of class

###Concepts

This project is designed to get you started with PHP web applications. You will learn these concepts:

* Creating PHP scripts
* Running PHP scripts
* Scalar Data
* Scalar Variables
* Getting input from the user using a web form.
* Printing output to a web page.

###Readings

To prepare for this project you should study or review the following:

* PHP and MySQL by Example Ellie Quigley with Marko Gargenta, Prentice Hall
  * Chapter 1, Introduction
  * Chapter 2, Getting Started
  * Chapter 4, The Building Blocks: Data Types, Literals, Variables and Constants
  * Chapter 5, Operators
  * Chapter 7, Conditionals and Loops

###Project Overview

This project will introduce the PHP programming language and its environment.

###Exercises

Create a directory named "project1" under your web server's document root directory (workspace/www). Place all HTML files and PHP scripts for this project in this new directory. 

####Exercise 1

Create a file called p1form.html in your project1 directory. Add he following contents to that file:
```
<html>
<head>
<title>RPCV of Wisconsin</title>

</head>
<body>
<form action="p1process.php" method="post">
<table border="0">
<tr bgcolor="#cccccc">
  <td width="150">Item</td>
  <td width="15">Quantity</td>
</tr>
<tr>
  <td>2008 Calendars @ $10.00</td>
  <td align="center"><input type="text" name="calqty" size="3"
     maxlength="3"></td>
</tr>
<tr>
  <td>Pigs Postcards @ $0.15</td>
  <td align="center"><input type="text" name="pigsqty" size="3" maxlength="3"></td>
</tr>
<tr>
  <td>Reindeer Postcards @ $0.25</td>
  <td align="center"><input type="text" name="deerqty" size="3"
     maxlength="3"></td>
</tr>
<tr>
  <td>How did you find RPCV of Wisconsin?</td>
  <td><select name="find">
        <option value = "a">I'm a member or regular customer</option>
        <option value = "b">National Peace Corps Assoc. advertising</option>
        <option value = "c">Peace Corps group directory</option>
        <option value = "d">Through a member or customer</option>
      </select>
  </td>
</tr>
<tr>
  <td colspan="2" align="center"><input type="submit" value="Submit Order"></td>
</tr>
</table>
</form>
</body>
</html>
```

Open the file in a text editor and note the names of the input fields it contains. Then open the file in a web browser to verify how it works.

####Exercise 2

* Write a PHP script named p1process.php that processes the data collected by the form in p1form.html and displays it on a web page:

  * Create local variables to store the data from the form's fields.
  * Display the company name, "RPCV of Wisconsin", and the text "Order Results" both as a title and as headers in the body of the web page.
  * Display the date and time the order was processed.
  * Calculate and display the total number of items of all three types ordered.
  * If the total number of items is zero (nothing was ordered), display: "You did not order anything on the previous page!"
  * Otherwise, for each item type, display the number of units ordered. If none of a particular item type were ordered, do not display a line for that item type.
  * Define constants for the price of each item type, then use them to calculate the total dollar amount of the order. Display the total amount of the order.
  * Calculate the total amount of the order including tax, using a 5% sales tax rate, and display the total dollar amount including tax.
  * Finally, display an appropriate message to the customer, based on the answer given to the question, "How did you find RPCV of Wisconsin?", from the form. You must display a different message for each distinct answer to the question!

####Submitting the project

All of your PHP scripts and HTML files for this project should be in one directory. Using a compression program like WinZip, zip this directory and its contents into a single file named project1.zip .  If you are using Linux or Macintosh OSX then you should tar and gzip your directory into a file named project1.tar.gz .  Submit the project1.tar.gz or project1.zip file to your instructor via Blackboard, using the new Blackboard Assignment Submission Procedures.  In addition to this your instructor might grade your projects with you in the lab.

