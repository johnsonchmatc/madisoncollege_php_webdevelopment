#Exercise 1


Create a PHP script named hello.php containing the following text:

<html>
 <head>
  <title>PHP Hello World!</title>
 </head>
 <body>
  <?php echo 'Look out world, here is another PHP script!' ?>
 </body>
</html>
and save it into your labs directory.

Create a second PHP script named phpinfo.php containing the following text:

<html>
 <head>
  <title>phpinfo()</title>
 </head>
 <body>
  <?php phpinfo() ?>
 </body>
</html>
and save it into your labs directory.

Test your two scripts by opening Firefox and loading the following URLs:

http://localhost/labs/hello.php

http://localhost/labs/phpinfo.php
Note that PHP scripts must be placed in a directory under the web server's document root and accessed through the document root for the PHP code to be executed. What happens if you load your hello.php script using the following URL?

file://var/www/labs/hello.php
Show your scripts and the results of loading the above URLs to your instructor.

