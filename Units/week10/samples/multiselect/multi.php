<html>
 <head>
  <title><Forms and User-defined Arrays>
  </title>
 </head>
 <body >
  <br />
  <fieldset><legend><b>Vacation Choices</b></legend>
  <?php
    if (is_array($_POST['location'])) {
      print "<ul>";
      foreach ($_POST['location'] as $key=>$value ) {
        print "<li>$key=>$value</li>";
      }
      print "</ul>";
    }
  ?>
  </fieldset>
  <fieldset><legend><b>City Choices</b></legend>
  <?php
    extract($_POST);
    if (is_array($place)) {
      print "<ul>";
      foreach ($place as $key => $value ) {
        print "<li>$key=>$value</li>";
      }
      print "</ul>";
    }
  ?>
  </fieldset>
 </body>
</html>
