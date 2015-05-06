<?php
$db = new mysqli("localhost", "root", "", "northwind");
if ($db->connect_errno) {
  echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $mysqli->connect_error;
}

$result = $db->query("select * from Employees;");

if (!$result) {
  exit('Database query error: '. mysql_error($db));
}

?>
<table>
  <tr>
    <th>Name</th>
    <th>Password</th>
    <th>Hash</th>
  </tr>
<?php
while ($record = $result->fetch_assoc()) { 
  $password = "CHANGEME";
  $date_of_birth = $record["BirthDate"];
  $hashed_password =  md5("$password+$date_of_birth");
?>
<tr>
  <td><?= $record["FirstName"] . " " . $record["LastName"] ?></td>
  <td><?= $password ?></td>
  <td><?= $hashed_password ?></td>
</tr>
<?php
}
?>
</table>
