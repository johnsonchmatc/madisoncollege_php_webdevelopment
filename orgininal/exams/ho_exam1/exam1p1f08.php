<html>
 <head>
  <title>PHP MySQL Exam 1 - Fall 2008 - HandsOn Problem 1</title>
 </head>
 <body>
  <h2 align="center">PHP MySQL Exam 1 - Fall 2008 - HandsOn Problem 1</h2>
<?php
  // This script contains the HTML form code and PHP code to enter and display
  // the user's name. 
  //
  // Task:  Modify this script so that the HTML form also asks for
  //        and inputs the user's email address. Then modify the
  //        PHP code so that it also output's a line like this:
  //        "May I email you at joe@yahoo.com ?"
  //        Your code should display the email address entered by the user
  //        in place of "joe@yahoo.com".
  //
  // Student Name: 
  // Date of Exam: October, 2008
  //
  // Submit your finished script using the 
  // Blackboard project submission procedure
  //
  if(!empty($_POST['name'])) {
    echo "Hello, {$_POST['name']} <br>";
  } 
?>
  <form action="<?php $PHP_SELF; ?>" method="POST">
  Enter your name: <input type="text" name="name" />
  <input type="submit" />
 </body>
</html>