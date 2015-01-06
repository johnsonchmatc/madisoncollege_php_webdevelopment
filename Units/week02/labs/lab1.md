#Exercise 1

Open a text editor and enter the following in a new file.

```
<html>
 <head>
  <title>Personalized Hello World</title>
 </head>
 <body>
  <?php
    if(!empty($_POST['name'])) {
      echo "Greetings, {$_POST['name']}, and welcome.";
    }
  ?>
  <form action="<?php $PHP_SELF; ?>" method="post">
  Enter your name: <input type="text" name="name" />
  <input type="submit" />
 </body>
</html>
```
Save the file as lab1x1.php into your document root directory.

Open a browser and enter the URL:

http://localhost/lab1x1.php
Show the contents of the file and the screen output to your instructor.
