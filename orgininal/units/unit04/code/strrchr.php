<html>
 <head>
  <title>The strrchr Function</title>
 </head>
 <body bgcolor="lavender">
  <font size="+1">
  <h3>Searching for a Character</h3>
  <?php
    $address='15 Sleepy Hollow Rd, Boston, Massachusetts';
    print $address .'<br />';
    $state = strrchr($address,"M");
    print $state .'<br />';

    $path="C:\\Documents and Settings\\Ellie Quigley\\My Documents";
    print $path .'<br />';
    print strrchr($path,"\\");
  ?>
 </body>
</html>
