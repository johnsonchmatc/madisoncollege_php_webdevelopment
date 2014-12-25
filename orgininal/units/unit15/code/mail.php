<?php
  // send an email with hard-coded data 
  $Recipient = 'djefferson@gmail.com';
  $MsgSubject = 'Hello from Yahoo!';

   // You must set sender through message header
  $MsgHeader = "From: D.W. Jefferson <jefferson_dw@yahoo.com>\r\n";
  $MsgBody = "This is a simple, 2 line message\r\nLine 2 of message.";
  
  $success = mail($Recipient, $MsgSubject, $MsgBody, $MsgHeader);
  if ($success)
    echo 'Email message sent to: ', $Recipient;
  else
    echo 'Failed to send email message to: ', $Recipient;
?>
