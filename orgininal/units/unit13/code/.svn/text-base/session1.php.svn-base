<?php
  session_start();
  if (! isset($_SESSION['choices'])) {
    $_SESSION['choices'] = array();
  }
  
  if (is_array($_POST['books'])) {
    $items = array_merge($_SESSION['choices'], $_POST['books']);
    $_SESSION['choices'] = array_unique($items);
    // Redirect to listing page
    header('Location: session2.php');
  }
?>
<html>
 <head><title>Arrays and Sessions</title></head>
 <body bgcolor="#6666ff">
  <font face="verdana" >
  <div align="center">
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
   <p>
   Book Categories<br />
   <select name="books[]" multiple=multiple size="8">
    <option>Art</option>
    <option>Computer</option>
    <option>Engineering</option>
    <option>Fiction</option>
    <option>Language</option>
    <option>Non Fiction</option>
    <option>Poetry</option>
    <option>Travel</option>
   </select>
   </p>
   <input type=submit value="Select category"/>
   </p>
  </form>
  </div>
  </font>
 </body>
</html>
