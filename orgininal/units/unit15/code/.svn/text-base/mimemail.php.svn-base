<?php
  $Recipient = 'djefferson@gmail.com';
  $MsgSubject = 'This is a MIME message with HTML content';

  // You must set a sender through message header
  $MsgHeader = "From: D.W. Jefferson <jefferson_dw@yahoo.com>\r\n";

  // These two lines are required
  $MsgHeader .= "MIME-Version: 1.0\n";
  $MsgHeader .= "Content-type: text/html; charset=us-ascii\n";

  // Message body is HTML
  $MsgBody = "
<html>
 <head>
  <title>HTML message</title>
 </head>
 <body>
  <h2>Congratulations!</h2>
  <p>You have just learned how to send an HTML message</p>
 </body>
</html>";

  $success = mail($Recipient, $MsgSubject, $MsgBody, $MsgHeader);
  if ($success)
    echo 'Email message sent to: ', $Recipient;
  else
    echo 'Failed to send email message to: ', $Recipient;
?>
