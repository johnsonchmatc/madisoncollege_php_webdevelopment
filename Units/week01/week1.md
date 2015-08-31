#PHP Web Development with MySQL
###Chris Johnson

---
#About me

---
#Work
* Software Engineer and Scrum Master at Getty Images
* Author at Pragmatic Bookshelf
* Owner at JohnsonCH, LLC

---
#Hobbies
* Software development
* Networking
* Photography
* Hockey
	
---
#Personal
* Wife: Laura
* Daughter: Kenzie
* Dogs: Scooter and Miley

![fit right](https://dl.dropboxusercontent.com/s/j163v0j78anj18d/2015-08-31%20at%205.17%20PM.png)

---
#About you
* Name
* Program
* Interesting fact about you

---
#Class expectations

---
#What do you expect from this class?

---
#What I expect from you
* Come to class
* Participate
* Turn in assignments and labs on time
* A positive and pleasant attitude

---
#Syllabus

---
#Coding Standards

---
#Questions?

---
#Projects, Labs and Exams
* Labs
* Projects
* Exams 

---
#Activity
##First Job
* What is your name?
* What was your first job?
* What was your first day like?
* What was your favorite thing about that job?
* What was the worst thing about that job?

---
#Preparing our shop
* IRC http://officehours.johnsonch.com/
* [Github](https://github.com) -> [Github Education](https://education.github.com/discount_requests/new)
* [Try Git](https://try.github.io)
* Development Options
  * [c9.io](cloud_9.md)
  * [Ubuntu VM](ubuntu_vm.md)
  * [XAMPP](xampp.md)
  * [Vagrant](vagrant.md)


---

#Short Lecture

---
#What is PHP?
> PHP is a popular general-purpose open source scripting language that is especially suited to web development.
Fast, flexible and pragmatic, PHP powers everything from your blog to the most popular websites in the world. - php.net


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
#	Static vs. Dynamic Websites

---
#Static Web Sites

Simply a page of content that is rendered the same every time it is requested.

---
#Dynamic Web Sites

A dynamic Web site is one with content that is regenerated every time a user visits or reloads the site.

---
#	HTTP

---
#What does an HTTP request look like?
![inline fit](http://help.sap.com/static/saphelp_nwpi711/en/48/3a063a902131c3e10000000a42189d/ppt_img.gif)


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
#	Simple PHP script
```php
<?php phpinfo(); ?>
```

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

> is a freely available open source Relational Database Management System (RDBMS) that uses Structured Query Language (SQL). SQL is the most popular language for adding, accessing and managing content in a database. It is most noted for its quick processing, proven reliability, ease and flexibility of use.

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
#Installing PHPMyAdmin
* [Cloud 9](https://docs.c9.io/docs/setting-up-phpmyadmin)

---
#Debugging
* Apache log

---
#Where can I get help?
* [http://php.net/support.php](http://php.net/support.php)


---

#Socrative
* http://beta.socrative.com
* Room ID: johnsonchmatc
