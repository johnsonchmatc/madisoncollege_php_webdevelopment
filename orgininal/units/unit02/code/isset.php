<html>
 <head><title>Testing Variables</title></head>
 <body bgcolor="#66CC66">
  The <b>isset()</b> function returns a boolean value. <br />
  If one or more variables exist and have a value, true is returned;
  otherwise false.
  <font face="verdana" size="+1">
  <p />
  <?php
    $first_name="John"; $middle_name=" "; $last_name="Doe";
    $age;
    $state = NULL;
     print 'isset($first_name,$middle_name,$last_name) : '
          . isset($first_name,$last_name) ."<br />";
     print 'isset($age) : '. isset($age) ."<br />";
     print 'isset($city ) : '. isset($city) ."<br />";
     print 'isset($state ) : '. isset($state) ."<br />";
  ?>
 </body>
</html>
