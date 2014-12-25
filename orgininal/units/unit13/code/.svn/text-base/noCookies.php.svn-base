<?php
  // Disable cookies for this session
  ini_set('session.use_cookies', 0);
  ob_start();

  // start the session
  session_start();

  if (isset($_GET['mycolor'])) {
    $_SESSION['favorite_color'] = $_GET['mycolor'];
    $sess_name = session_name();
    $sess_id = $_GET[$sess_name];
    header('Location:noCookies2.php?'. $sess_name .'='. $sess_id);
  }
?>
<html>
 <body>
  <h1> Select Favorite Color</h1>
  <form action="<?php echo ${_SERVER}['PHP_SELF']; ?>" method="GET">
   <select name="mycolor">
   Please select</option>
    <option selected value="green">Green</option>
    <option value="white">White</option>
    <option value="blue">Blue</option>
    <option value="red">Red</option>
    <option value="yellow">Yellow</option>
    <option value="gray">Gray</option>
   </select>
   <input type="hidden" name='PHPSESSID'
         value="<?php echo session_id(); ?>">
   <input type="submit" value="Set color">
  </form>
 </body>
</html>
<?php
  ob_end_flush();
?>
