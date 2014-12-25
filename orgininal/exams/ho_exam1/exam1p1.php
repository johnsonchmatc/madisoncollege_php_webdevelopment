<html>
 <head>
  <title>PHP MySQL Exam 1 - Fall 2014 - HandsOn Problem 1</title>
 </head>
 <body>
  <h2 align="center">PHP MySQL Exam 1 - Fall 2014 - HandsOn Problem 1</h2>
<?php
  // This script contains the HTML form code and PHP code to enter and display
  // the user's name. 
  //
  // Task:  Modify this script so that the HTML form also asks for
  //        and inputs the user's phone number. Then modify the
  //        PHP code so that it also output's a line like this:
  //        "May I call you at 608-321-4567 ?"
  //        Your code should display the phone number entered by
  //        the user in place of "608-321-4567".
  //
  // Student Name: 
  // Date of Exam: 
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