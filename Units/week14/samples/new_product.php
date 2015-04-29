<style>
  .error {
    color: red;
  }
</style>

<?php
  include "db.php";

  $supplier_rs = mysql_query('select SupplierID, CompanyName from Suppliers;', $db);
  if (!$supplier_rs) {
    exit('Database query error: '. mysql_error($db));
  }


  //default values
  $product_name = "";
  $unit_price = "";
  $supplier_id = "";

  if (isset($_POST['submit'])) {
    if (isset($_POST['ProductName'])){
      $product_name = $_POST['ProductName'];
    }
    if (isset($_POST['UnitPrice'])){
      $unit_price = $_POST['UnitPrice'];
    }
    if (isset($_POST['SupplierID'])){
      $supplier_id = $_POST['SupplierID'];
    }
    
    if ($product_name != "" && $unit_price != "" && $supplier_id != ""){
      $product_insert = mysql_query("INSERT INTO Products (ProductName, UnitPrice, SupplierID) VALUES ('$product_name', '$unit_price', '$supplier_id')", $db);
      if (!$product_insert) {
        exit('Database query error: '. mysql_error($db));
      }else{
        echo "<h2 class='success'>product $product_name added successfully <h2>";
      }
    }else{
      echo "<h2 class='error'>you are mising a value, please fill out all fields</h2>";
    }
  }
?>
<form method=POST action="<?php echo $_SERVER['PHP_SELF']?>">
  
  Product Name: <input type="text" size=30 name="ProductName" value="<?= $product_name ?>"><br />
  Product Price: <input type="text" size=30 name="UnitPrice" value="<?= $unit_price ?>"><br />
  Supplier: 
  <select name="SupplierID">
    <option>Select One:</option>
    <?php while ($record = mysql_fetch_assoc($supplier_rs)) { ?>
      <option value="<?= $record["SupplierID"] ?>" <?= $record["SupplierID"] == $supplier_id ? "selected" : ""  ?>><?= $record["CompanyName"] ?></option>
    <?php } ?>
  </select>
  
  <input type="submit" name="submit">
  
</form>