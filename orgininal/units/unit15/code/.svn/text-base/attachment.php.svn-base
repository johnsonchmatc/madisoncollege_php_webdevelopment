<?php
  // Read in file content
  $FilePathName = 'Helios.jpg'; // full path to file
  $FileName = 'Helios.jpg'; // just file name
  $FileHandle = fopen($FilePathName,'rb');
  $FileContent = fread($FileHandle, filesize($FilePathName));
  fclose($FileHandle);

  // Encode file content
  $AttachmentData = chunk_split(base64_encode($FileContent));

  // Message text
  $MsgHTMLPart = "
<html>
 <head>
  <title>HTML message with attachment</title>
 </head>
 <body>
  <h2>Congratulations!</h2>
   <p>You have just learned how to send an HTML message
      with attachment</p>
 </body>
</html>
  ";

  // Forming message
  $Recipient = 'djefferson@gmail.com';
  $MsgSubject = 'NASA Helios experimental aircraft';

  // You must set sender through message header
  $MsgHeader = "From: D.W. Jefferson <jefferson_dw@yahoo.com>\n";

  // These two lines mark message as multipart
  $MsgHeader .= "MIME-Version: 1.0\n";
  $MsgHeader .= "Content-Type: multipart/mixed; boundary=\"
        --NSD35F65YGsgrg3--\"";
  // First part begins
  $MsgBody = "
  --NSD35F65YGsgrg3--
  Content-Type: text/html; charset=us-ascii
  Content-Transfer-Encoding: 8bit\n";

  $MsgBody .= $MsgHTMLPart;

  // Second part begins
  $MsgBody .= "
  --NSD35F65YGsgrg3--
  Content-Type: application/octet-stream; name=\"". $FileName ."\"
  Content-Transfer-Encoding: base64
  Content-Disposition: attachment; filename=\"". $FileName
        ."\"\n\n";

  $MsgBody .= $AttachmentData;

  // Message ends
  $MsgBody .= "\n--NSD35F65YGsgrg3--\n";

  // Sending message
  $success = mail($Recipient, $MsgSubject, $MsgBody, $MsgHeader);
  if ($success)
    echo 'Message/Attachment sent to: ', $Recipient;
  else
    echo 'Failed to send message/attachment to: ', $Recipient;
?>
