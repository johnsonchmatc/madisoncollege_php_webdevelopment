<html>
 <head>
  <title>Process Form using POST</title>
 </head>
 <body bgcolor = "lightgreen"><font size="+1">
  <h2>Here is the form input:</h2>
  <?php
    // register_globals is off so we need to extract the form
    extract($_REQUEST, EXTR_SKIP);
    print "Welcome to PHP $your_name!<br />";
    print "Can I call you at $your_phone?<br />";
    print "Is it ok to send you email at $your_email_addr?<br />";
  ?>
 </body>
</html>
