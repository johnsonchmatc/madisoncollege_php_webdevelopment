#Introduction to PHP, MySQL and Web Applications
##Chapters 1 and 2
###Week 2

----
#Agenda 
* Open Source
* Static vs Dynamic Web Sites
* What is an HTTP request?
* What is PHP?
* What does a PHP script look like?

----
#Agenda (cont)
* PHP Functions
* PHP vs HTML
* What is MySQL?
* What does SQL look like?
* Why PHP and MySQL?
* Where to get help

---
#Static Web Sites

Simply a page of content that is rendered the same every time it is requested.

---
#Dynamic Web Sites

A dynamic Web site is one with content that is regenerated every time a user visits or reloads the site.

---
#What is an HTTP request?

^ When one computer talks to another over the HTT protocol 

---
#What is the HTT protocol (HTTP)?
^ Hypertext Transfer Protocol

---
#What does an HTTP request look like?
![inline fit](http://help.sap.com/static/saphelp_nwpi711/en/48/3a063a902131c3e10000000a42189d/ppt_img.gif)

---
#What Is Open Source?

> 'Free software' is a matter of liberty, not price. To understand the concept, you should think of 'free' as in 'free speech,' not as in 'free beer.'
  -The Free Software Foundation, http://www.gnu.org/philosophy/free-sw.html

---
#What Is Open Source?
* What is the difference between Open Source and Freeware? 

^ Freewhere is software that is free to use but you do not have access to the source of that application.  Open Source means you have the ability to view and modify the code of the application.  Ideally an open source project will accept modifications from the community.

* Is PHP open source?

---
#How can I contribute to PHP?
* [http://php.net/get-involved.php](http://php.net/get-involved.php)
* [https://github.com/php/php-src](https://github.com/php/php-src)

---
#What is PHP?
> PHP is a popular general-purpose scripting language that is especially suited to web development.
Fast, flexible and pragmatic, PHP powers everything from your blog to the most popular websites in the world. - php.net

---
#History of PHP
* June 8, 1995 PHP 1.0 is posted to the usenet group comp.infosystems.www.authoring.cgi
* It was created by Rasmus Lerdorf as PHP Tools.
* Then he set to work integrating his tools with the Apache web server and less than a year later, PHP 2.0 was posted to the same usenet group.

^ PHP stood for Personal Home Page at the time

---
#History of PHP
##Here is how Lerndorf described PHP at the time:
> "PHP/FI is a server-side HTML embedded scripting language. It has built-in access logging and access restriction features and also support for embedded SQL queries to mSQL and/or Postgres95 backend databases.

---
#History of PHP
* It is most likely the fastest and simplest tool available for creating database-enabled web sites.

* It will work with any UNIX-based web server on every UNIX flavor out there. The package is completely free of charge for all uses including commercial."

---
#And the rest, as they say, is history...

![fit](https://dl.dropboxusercontent.com/s/6sv291dt8qyh23z/2015-01-25%20at%202.21%20PM%202x.png?dl=0)

---
#What does a PHP script look like?
```php
<?php phpinfo(); ?>
```

---
#How does PHP work with HTTP?

![inline fit](http://www3.dcu.ie/~costelle/sites/default/files/phpnet4_0.png)

---
#PHP Functions
> An independent piece of program code that is create to make programing easier.

```php
Today is <?php date("m-d-Y"); ?>
```
^ This is PHP's date function, the implementation of this is written in C

* [http://php.net/manual/en/function.date.php](http://php.net/manual/en/function.date.php)

---
#PHP vs HTML
```php
<html>
  <head>
    <title>My Awesome Page</html>
  </head>
  <body>
    <h1>Today is <?php date("m-d-Y"); ?></h1>
  </body>
</html>
```

---
#What is MySQL?

---
###Installing MySQL (on nitrous.io)
* Use the Autoparts menu to search for MySQL and choose install

![inline fit](https://dl.dropboxusercontent.com/s/u1bye8731rnjc2s/2015-01-24%20at%202.28%20PM%202x.png?dl=0)


---
###Installing MySQL (on nitrous.io)
* When it is complete you should see the following:

![inline fit](https://dl.dropboxusercontent.com/s/0roui7h5k0to0w2/2015-01-24%20at%202.30%20PM%202x.png?dl=0_)

* Choose done

---
###Installing MySQL (on nitrous.io)
* As noted you can start the server with `$ parts start mysql`
* You can stop the server with `$ parts stop mysql`
* You can connect to the server with `$ mysql`

---
#What does SQL look like?
^ ``` show databases; ```
^ ``` use northwind; ```
^ ``` show tables; ````
^ ``` select * from ;```

---
#Why PHP and MySQL?
* Both Open Source
* Commonly used together
* Both have a low barrior to entry

---
#Where can I get help?
* [http://php.net/support.php](http://php.net/support.php)

---
#Notes for next week

