#Introduction to PHP, MySQL and Web Applications
##Week 2

----
###Agenda 
- Static vs Dynamic Web Sites
- How-To of HTTP Request/Response
- What Does PHP Do?
- A Brief History of PHP
- Installing PHP

----
###Agenda cont.
- What Does MySQL Do?
- A Brief History of MySQL
- Installing MySQL
- First PHP Scripts

---
##Static Web Sites

> The dream behind the Web is a common information space in which we communicate by sharing information. . . .
  -Tim Berners-Lee

---
##Dynamic Web Sites

A dynamic Web site is one with content that is regenerated every time a user visits or reloads the site.

---
##What Is Open Source?

> 'Free software' is a matter of liberty, not price. To understand the concept, you should think of 'free' as in 'free speech,' not as in 'free beer.'
  -The Free Software Foundation, http://www.gnu.org/philosophy/free-sw.html

---
##Basics of HTTP
* Hypertext Transfer Protocol
* simple and stateless
* client/server architecture 
* Common standard ports are 80 (http) and 443 (https)

---
##HTTP Request

^ TODO

---
##HTTP Response

^ TODO

---
##What is PHP?
###Recursive acronym for "PHP: Hypertext Preprocessor"

---
##What is PHP?
* PHP is a simple, fast, portable scripting language well suited for development of database-enabled Web sites. 
* It was developed in 1995 and is currently powering tens of millions of Web sites worldwide.

---
##PHP can be used in three primary ways:
* Server-side scripting:
  * PHP was originally designed to create dynamic web content. To generate HTML, you need the PHP parser and a web server to send the documents. PHP has also become popular for generating XML documents, graphics, Flash animations, PDF files, and more.

---
##PHP can be used in three primary ways:
* Command-line scripting:
  * PHP can run scripts from the command line, much like Perl, awk, or the Unix shell. You might use the command line scripts for system administration tasks, such as backup and log parsing

---
##PHP can be used in three primary ways:
* Client-side GUI applications:
  * Using PHP-GTK (http://gtk.php.net), you can write full-blown, cross-platform GUI applications in PHP.

^For this course we'll just be focusing on Server-side scripting

---
##History of PHP
* June 8, 1995 PHP 1.0 is posted to the usenet group comp.infosystems.www.authoring.cgi
* It was created by Rasmus Lerdorf as PHP Tools.
* Then he set to work integrating his tools with the Apache web server and less than a year later, PHP 2.0 was posted to the same usenet group.

^ PHP stood for Personal Home Page at the time
---
##History of PHP
###Here is how Lerndorf described PHP at the time:
> "PHP/FI is a server-side HTML embedded scripting language. It has built-in access logging and access restriction features and also support for embedded SQL queries to mSQL and/or Postgres95 backend databases.

---
##History of PHP
* It is most likely the fastest and simplest tool available for creating database-enabled web sites.

* It will work with any UNIX-based web server on every UNIX flavor out there. The package is completely free of charge for all uses including commercial."

---
#And the rest, as they say, is history...

---
##Some language design notes:
* PHP is a very Perl-like in sytnax

^ but whereas Perl is an all-purposelanguage, PHP was designed for the Web. 

* PHP can be embedded with HTML so that whenever a page is rendered the code is executed.
* PHP includes automatic interpretation of form variables, which makes working with forms easier.

---
##Some language design notes:
* It enabled users to create simple dynamic Web sites by having the ability to use an RDBMS.

^ in this course we'll work with the MySQL RDBMS

---
##Timeline
* 1995 - PHP Released
* 1997 PHP/FI 2.0
  * Added core team of developers
* 1998 - Zeev Suraski and Andi Gutmans released PHP 3.0

^ Zeev Suraski and Andi Gutmans, two students attending Technion-Israel Institute of Technology, needed a language for their university e-commerce project. They chose PHP/FI for their project. Dissatisfied with its limitations and bugs, they put their project aside, and rewrote PHP almost from scratch. PHP 3.0 was a significant departure from the previous code base.

^ The new language supported add-on modules and had a much more consistent syntax. At this time, the meaning of the acronym changed as well. PHP now stands for PHP: Hypertext Preprocessor. PHP 3.0 was released in 1998 and is the closest version to PHP today.

* 2000 - PHP 4

^ By May 2000, PHP 4 was released. The core of PHP 4 was entirely rewritten to improve the performance of complex Web applications and improve modularity of the platform. Zeev Suraski and Andi Gutmans, the authors of PHP 3, introduced a new parsing engine, called the Zend engine, which is the scripting language that powers PHP today.

^ Version 4 offered an open Application Programming Interface (API), allowing other programmers to write modules for PHP, modules that would extend its functionality, modules that allowed PHP 4 to support most of the available databases and Web servers available.

* 2004 - PHP 5

^ The latest incarnation of PHP was released in July 2004. PHP 5 added a whole new object-oriented model to the language.

---
##What is MySQL?

* MySQL is a widely-used Open Source relational database management system (RDBMS) using the industry standard SQL query language that is very scalable and especially suited for Web development.

---
###Server-side tools: 
* The MySQL database server, which is the core software engine responsible for creating and managing databases, executing queries and returning query results, and maintaining security. They also include additional tools to manage multiple MySQL servers, optimize and repair MySQL tables, and create bug reports.

---
###Client-side tools: 
* These include a command line MySQL client, tools to manage MySQL user permissions, and utilities to import and export MySQL databases. Also included are command line tools to view and copy MySQL databases and tables, and retrieve server status information.

---

