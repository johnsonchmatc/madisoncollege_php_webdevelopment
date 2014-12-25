<?php
  session_start();
?>
<html>
 <head><title>Sessions - Page 2</title></head>
 <body bgcolor="lavender">
  <font face='arial' size="+1">
  <?php
    if (! (empty($_POST['book']) or empty($_POST['user']))) {
      // Create short variables
      $book = trim(stripslashes($_POST['book']));
      $user = trim(stripslashes($_POST['user']));
      
      if (isset($_SESSION['user'])) {
        echo '<h2>Welcome back, '
            . $_SESSION['user'] .'!</h2>';
        echo '<h2>You recently visited our '
            . $_SESSION['book'] .' store.</h2>';
      }
      else {
        $_SESSION['book'] = $book;
        $_SESSION['user'] = $user;
        echo "<h2>Welcome, $user!</h2>";
      }
    }
    else {
      die('Form incomplete<br />');
    }
    echo 'The session id is: ', session_id(),'<br />';
    echo 'You have chosen to enter the <b>'
        . $book .'</b> section.<br />';
    // Create a variable with book category page name
    $section = $book .'_page.php'; 
  ?>
  To browse the <?php echo $book; ?> Section:
  <a href="<?php echo $section; ?>">Click here</a>
  <br />
  </font>
 </body>
</html>
