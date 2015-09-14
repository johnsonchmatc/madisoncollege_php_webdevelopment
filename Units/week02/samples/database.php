<?php
    $mysqli = mysqli_connect("localhost", "root", "root", "northwind");
    $result = mysqli_query($mysqli, "SELECT * from Products;");
    if (!$result) {
        exit('Database query error: '. mysql_error($db));
    }
?>
<h1>Products</h1>


<table>
    <tr>
      <th>Product Name</th>
      <th>Price</th>
      <th>In Stock?</th>
    </tr>
<?php while ($record = mysqli_fetch_assoc($result)) { ?>
    <tr>
      <td><?= $record["ProductName"]?></td>
      <td><?= $record["UnitPrice"]?></td>
      <td><?= $record["UnitsInStock"] > 0 ? "Yes" : "No" ?></td>
    </tr>
<?php } ?>
</table>
