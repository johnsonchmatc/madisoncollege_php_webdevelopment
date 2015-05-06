<?php
  if (isset($_GET['color'])) {
    // Start the new session
    session_start();
    // Set the favorite color for this user
    $_SESSION['favorite_color'] = $_GET['color'];
  }
?>
<html>
 <body>
  <h1> Select Favorite Color</h1>
  <form action="<?php echo ${_SERVER}['PHP_SELF']; ?>" method="GET">
   <select name="color" >
    <option value="" selected>Please select</option>
    <option value="white">White</option>
    <option value="blue">Blue</option>
    <option value="red">Red</option>
    <option value="yellow">Yellow</option>
    <option value="gray">Gray</option>
   </select>
   <input type="submit" value="Set color">
  </form>
 </body>
</html>
