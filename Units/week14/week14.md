#Accessing a MySQL Database Using PHP
##Chapter 15
##Week 14 

---
#Connecting to MySQL

```php
  @ $db = mysql_connect('localhost','root');
  if (!$db) {
    exit('Connection to server failed: '. mysql_error());
  }
  if (! mysql_select_db('northwind', $db)) {
    exit('Database select error: '. mysql_error($db));
  } 
```

^ the ```@``` ignores errors about ```mysql_connect``` being deprecated.

---
#Executing a query
```php
  $result = mysql_query('select * from Products;', $db);
  if (!$result) {
    exit('Database query error: '. mysql_error($db));
  }
```

---
#Using the results

```php
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
```

---
#Writing to the database

```php
// We always want to check to make sure our incoming data is OK
if (isset($_POST['ProductName'])){
  $product_name = $_POST['ProductName']; //May even want to validate data specificly
}
if (isset($_POST['UnitPrice'])){
  $unit_price = $_POST['UnitPrice'];
}
if (isset($_POST['SupplierID'])){
  $supplier_id = $_POST['SupplierID'];
}

if ($product_name != "" && $unit_price != "" && $supplier_id != ""){
  $product_insert = mysql_query("INSERT INTO Products 
                                (ProductName, UnitPrice, SupplierID) VALUES 
                                ('$product_name', '$unit_price', '$supplier_id')", $db);
  if (!$product_insert) {
    exit('Database query error: '. mysql_error($db));
  }else{
    echo "<h2 class='success'>product $product_name added successfully <h2>";
  }
}else{
  echo "<h2 class='error'>you are mising a value, please fill out all fields</h2>";
}
```

---
#```mysqli()``` - connection

```php
$db = new mysqli("localhost", "root", "", "northwind");
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $mysqli->connect_error;
}
```

---
#```mysqli()``` - execute query

```php
  $result = $db->query("select * from Customers;");
  if (!$result) {
    exit('Database query error: '. mysql_error($db));
  }
```

---
#```mysqli()``` - working with data

```php
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
```
