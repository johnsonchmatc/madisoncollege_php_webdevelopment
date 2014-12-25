<?php
  // Was the form submitted?
  if (isset($_POST['submit'])) {
    $your_name = $_POST['your_name'];
    $your_phone=$_POST['your_phone'];
    print "<b>Your name is $your_name<br />";
    print "Your phone is $your_phone<br />";
    print "The path to this file is: "
         . $_SERVER['PHP_SELF'] ."<br />";
  }
  else{
?>
<html>
 <head>
  <title>HTML Form/PHP Script</title>
 </head>
 <body bgcolor="lightblue"><font size="+1">
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>"
        method="POST">
   <p />
   Please enter your name: <br />
   <input type="text" size=50 name="your_name">
   <p />
   Please enter your phone: <br />
   <input type="text" size=50 name="your_phone">
   <p />
   <input type="submit" name="submit" value="Send Now">
   <input type=reset value="Clear">
  </form>
  <hr>
 </body>
</html>
<?php
  }
?>
