<?php include "db_mysqli.php" ?>

<?php
  $result = $db->query("select * from Customers;");
  if (!$result) {
    exit('Database query error: '. mysql_error($db));
  }
?>

<h1>Customers</h1>
<table>
  <tr>
    <th>Company Name</th>
    <th>Address</th>
    <th>City</th>
    <th>Phone</th>
  </tr>
<?php while ($record = $result->fetch_assoc()) { ?>
    <tr>
      <td><?= $record["CompanyName"] ?></td>
      <td><?= $record["Address"] ?></td>
      <td><?= $record["City"] ?></td>
      <td><?= $record["Phone"] ?></td>
    </tr>
  <?php
  }
?>
