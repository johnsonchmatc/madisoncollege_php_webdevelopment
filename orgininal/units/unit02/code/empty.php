<html>
 <head><title>Testing Variables</title></head>
 <body bgcolor="66C66">
  The <b>empty()</b> function returns a boolean value. <br />
  If a variable doesn't exist or is assigned the empty string,
  0, <br />or "0", NULL, or hasn't been assigned any value;
  returns true, otherwise false.
  <font face="verdana" size="+1">
  <p>
   <?php
     $first_name = ""; $last_name = " ";
     $age = 0;
     $salary = "0";
     $state = NULL;
     print 'empty($first_name) : '. empty($first_name) ."<br />";
     print 'empty($last_name) : '. empty($last_name) ."<br />";
     print 'empty($age) : '. empty($age) ."<br />";
     print 'empty($salary) : '. empty($salary) ."<br />";
     print 'empty($state ) : '. empty($state) ."<br />";
   ?>
  </p>
 </body>
</html>
