<?php
  // create short variable names for form fields
  $name = $_POST['name'];
  $email = $_POST['email'];
  $feedback = $_POST['feedback'];
  // use string functions to validate form input
  // if any of the form fields are empty, give an appropriate message
  
  // remove any leading spaces or trailing spaces from the form input
  
  // use a regular expression to test for a valid email address
  // in $email similar to what we did in lecture
  
  // change $toaddress to your email address for testing
  $toaddress = 'djefferson@matcmadison.edu';
  $subject = 'Feedback from web site';
  $mailcontent = 'Customer name: '.$name."\n"
                 .'Customer email: '.$email."\n"
                 ."Customer comments: \n".$feedback."\n";
  $fromaddress = 'From: webserver@example.com';

  mail($toaddress, $subject, $mailcontent, $fromaddress);
?>
<html>
<head>
  <title>PHP and MySQL Lab 6 - Feedback Submitted</title>
</head>
<body>
<h1>Feedback submitted</h1>
<p>Your feedback (shown below) has been sent.</p>
<p>1) Printed without nl2br:</p>
<p><?php echo $mailcontent; ?> </p>
<p>2) Printed with nl2br:</p>
<p><?php echo nl2br($mailcontent); ?> </p>
<?php 
  // check whether magic quotes are turned on and
  // print just the feedback appropriately so
  // no slashes are displayed

?>
</body>
</html>
