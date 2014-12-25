<html>
 <head>
  <title>Change and Get Directories</title>
 </head>
 <body bgcolor="lavender">
  <?php
    // Get the current directory
    echo getcwd(),"\n<br />";
    // Change directory; go up one level
    chdir(".."); 
    echo getcwd(),"\n<br />";
  ?>
 </body>
</html>
