#Exercise 1

Open your Nitrous.io editor and create a file named lab1x1.php inside of workspace > www, as seen in the following figure:
![](https://dl.dropboxusercontent.com/s/j063lu83mwnk1yf/2015-01-24%20at%202.23%20PM%202x.png?dl=0)

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
Save the file and use Nitrous.io's preview menu and choose port 3000 to view your page. When you are satisfied show your instructor.

