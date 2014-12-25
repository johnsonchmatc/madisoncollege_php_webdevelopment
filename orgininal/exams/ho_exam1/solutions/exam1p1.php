<html>
 <head>
  <title>PHP MySQL Exam 1 - Spring 2008 - HandsOn Problem 1</title>
 </head>
 <body>
  <h2 align="center">PHP MySQL Exam 1 - Spring 2008 - HandsOn Problem 1</h2>
<?php
  // This script contains the PHP and HTML code for the personalized
  // Hello World example. 
  //
  // Task: Modify this script so that the HTML form also asks for
  //        and inputs the user's favorite fruit. Then modify the
  //        PHP code so that it also output's a line like this:
  //        "So, you prefer to munch pineapples!"
  //        Your code should display the user's favorite fruit in 
  //        place of "pineapple".
  //
  // Student Name: DW Jefferson
  // Date of Exam: March 2008
  //
  // Submit your finished script using the 
  // Blackboard project submission procedure
  //
  if(!empty($_POST['name'])) {
    echo "Greetings, {$_POST['name']} <br>";
  } 
  if(!empty($_POST['fruit'])) {
    echo "So, you prefer to munch {$_POST['fruit']} <br>";
  } 
?>
  <p>
  <form action="<?php $PHP_SELF; ?>" method="post">
  Enter your name: <input type="text" name="name" /><br><br>
  and your favorite fruit: <input type="text" name="fruit" /><br><br>
  <input type="submit" />
  </form>
  </p>
 </body>
</html>