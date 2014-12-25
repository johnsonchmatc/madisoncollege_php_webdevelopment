<html>
 <head><title>Sample 8</title></head>
 <body>
  <?php
    if ((!empty($_GET)) ||
        (!isset($_POST['formName'])) ||
        ($_POST['formName'] != 'sample8')) {
      die("Bad input data source<br />");
    }
    $name = $_POST['userName'];
    $phone = $_POST['userPhone'];
    $email = $_POST['userEmail'];
  ?>
  <div align="center">
   <table>
    <tr><td>
    Welcome to PHP, <em><?php echo $name; ?>.</em>
    </td></tr><tr><td>
    Can I call you at <em><?php echo $phone; ?>? </em>
    </td></tr><tr><td>
    Is it OK to send you email at <em><?php echo $email; ?>?</em>
    </td></tr>
   </table>
  </div>
 </body>
</html>
