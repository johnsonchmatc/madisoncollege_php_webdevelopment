<html>
 <head>
  <title>Returning a List</title>
 </head>
 <body bgcolor="lavender">
  <font size="+1">
  <h2>Function Returns an Array of Hashes</h2>
  <?php
    print "Opening a MySQL connection<br />";
    $connection = mysql_connect('itins3.matcmadison.edu','astudent','astudent')
      or die ("Couldn't open connection to class server");
    $result = mysql_select_db('winestore');
    if ($result) {
      echo "Database \"winestore\" selected<br />";
    }
    
    function get_info() {
      $record = array();
      $result_set = mysql_query("SELECT * FROM winery");
      while ($row = mysql_fetch_assoc($result_set)) {
        array_push($record, $row);
      }
      return($record);
    }
  ?>
  <br /><br />
  <b>
  <?php
    $company_records = get_info();
    foreach ($company_records as $key => $value) {
      foreach ($value as $field_key => $val) {
        print "$field_key => $val<br />";
      }
      print "<hr>";
    }
  ?>
  </b>
  </font>
 </body>
</html>
