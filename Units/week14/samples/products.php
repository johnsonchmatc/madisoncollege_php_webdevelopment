<?php include "db.php" ?>
<?php
  $result = mysql_query('select * from Products;', $db);
  if (!$result) {
    exit('Database query error: '. mysql_error($db));
  }
?>
<h1>Products</h1>

<a href="new_product.php">Add a new product</a>

<table>
  <tr>
    <th>Product Name</th>
    <th>Price</th>
    <th>In Stock?</th>
  </tr>
<?php while ($record = mysql_fetch_assoc($result)) { ?>
    <tr>
      <td><?= $record["ProductName"]?></td>
      <td><?= $record["UnitPrice"]?></td>
      <td><?= $record["UnitsInStock"] > 0 ? "Yes" : "No" ?></td>
    </tr>
  <?php
  }
?>