#Project Two 
##Simple PHP Application

Total Points: 20
Due: 4/01/2015 by end of class

###Concepts

This project is designed tofurther develop your PHP programming skills. You will learn these concepts:

* Creating an HTML form
* Using a PHP script to process an HTML form
* Strings and String Manipulation
* Arrays and Associative Arrays
* PHP Functions and Writing Your Own Functions
* Using Object-Oriented PHP Features

###Readings

To prepare for this project you should study or review the following:

PHP and MySQL by Example Ellie Quigley with Marko Gargenta, Prentice Hall

Chapter 6, Strings
Chapter 8, Arrays
Chapter 9, User-Defined Functions
Chapter 17, Objects
3. Project Overview

This project will utilize more features of the PHP programming language and its environment.

###Exercises

Create a directory named "project2" under your web server's document root directory on your hard drive. Place all HTML files and PHP scripts for this project in this new directory.

Note: If you are working on an MATC lab computer, always save a copy of this directory and all the files in it to either the class server, a USB thumb drive, a floppy disk or similar media, at the end of each work session. Otherwise your work will be lost!

####Exercise 1

Create an HTML form to serve as the "Contact Us" form for the fictional restaurant Canvas Gallery. Place it in your project2 directory and name it contactForm.php

The form should include these fields:

name - Form user's full name
email - Form user's email address
phone - Form user's phone number
message - Message user is sending to Canvas Gallery

Use the PHP include() directive to add the restaurant's standard HTML page header and footer to your HTML form. 

The files can be found here:
* [files.zip](files.zip)

Note: This file also contains the header.jpg and style.css files used by header.php. Download these by clicking on the 'Raw' button on github.

Your form should use the POST method, and it's action should be to load the PHP script contactUs.php that you will create in Exercise 2.

Here is an example of what your Contact form might look like:

![](https://raw.githubusercontent.com/johnsonch/madisoncollege_php_webdevelopment/master/projects/project2/contactForm.png)

####Exercise 2

Write a PHP script named contactUs.php to process the data collected by the contactForm.php form page and display it on a web page:

Use the Canvas Gallary restaurant's standard header and footer on your web page, so it will match the style of the HTML form you created in Exercise 1.

Create a PHP associative array with keys of: 'Name', 'Email', 'Phone' and 'Message' to store the data from the form's fields, and transfer the data from the $\_POST superglobal array to your array.

Display the date and time the form data was processed by your script.

Test whether the directive magic\_quotes\_gpc is on and if not, use a built-in function to escape the form data as you would before writing it to a file or database.

Use a loop to display the key-value pairs of your array. The values will be displayed with appropriate characters escaped as if writing them to a database.

Then use another PHP function to remove any escape characters from the values in your array and display the key-value pairs in a loop as you would normally present entered data for review by the user.

Create an include file named contact.inc.php and in it define a class named Contact with the following member variables:

```
protected $name
protected $phone
protected $email\_user
protected $email\_domain
protected $message
```

**Note:** See the Guest Book example on page 776 of the text for a sample class definition.Your member variables should be "protected" as in the example. You will need to create getter and setter functions for each member variable.

Create a showContact member function for your Contact class that will print out the names and values of all the member variables.

Use the require() directive to include your Contact class definition in the contactUs.php script, so the script will fail if the contact.inc.php file is not available. Note: You should place the contact.inc.php file in the include subdirectory along with header.php and footer.php .

In contactUs.php create an object of class Contact and assign the corresponding values from the HTML form to its member variables. Use an appropriate string function to extract the user's email username and domain from the email address field.

Use the showContact member function to display the contents of the object you created.

###Submitting the project

All of your PHP scripts and HTML files for this project should be in one directory. Using a compression program like WinZip, zip this directory and its contents into a single file named: project2.zip If you are using Linux or Macintosh OSX then you should tar and gzip your directory into a file named: project2.tar.gz Submit the project2.tar.gz or project2.zip file to your instructor via Blackboard, using the Blackboard Assignment Submission Procedures . In addition to this your instructor might grade your projects with you in the lab.

