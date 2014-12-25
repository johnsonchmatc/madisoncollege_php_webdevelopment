<html>
 <head>
  <title>Empty Fields</title>
 </head>
 <body><div align="center">
  <h2>Validating Input</h2>
  <?php
    $errors = array();
    // If the form was submitted
    if (isset($_REQUEST['submit'])) {
      validate_input(); // Check for empty fields
      // If there are errors redisplay the form
      if (count($errors) > 0) {
        display_form();
      }
      else {
        echo '<b>OK! Go ahead and Process the form!
              </b><br />'; }
      }
      else {
        // Display the form for the first time
        display_form();
      }
      
      function validate_input() {
        global $errors;
        if ($_POST["name"] == "") {
          $errors['name'] = 
            "<font color='red'>***Your name?***</font>";
        }
        if ($_POST["phone"] == "") {
          $errors['phone'] =
            "<font color='red'>***Your phone?***</font>";
        }
      }
      function display_form() {
        global $errors;
  ?>
  <b>
  <form method="post"
        action="<?php echo $_SERVER['PHP_SELF']; ?>">
   What is your name?<br />
   <input type="text" name="name"
      value="<?php if (@$_POST['name']) echo $_POST['name']; ?>">
   <br />
   <?php if (@$errors['name']) echo $errors['name']; ?>
   <br />
   What is your phone number?<br />
   <input type="text" name="phone"
      value="<?php if (@$_POST['phone']) echo $_POST['phone']; ?>">
   <br />
   <?php if (@$errors['phone']) echo $errors['phone']; ?>
   <br />
   <input type="reset">
   <input type="submit" name="submit">
   <br />
  <form>
  <?php
    }
  ?>
  </b>
  </div>
 </body>
</html>
