<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
 
<?php
    $dbc = mysqli_connect('localhost', 'root', '', 'northwind')
        or die('Error connecting to MySQL server.');
    
    // Show the selected Product rows in a table
    if (isset($_POST['submit']) && isset($_POST['checked_values']))
    {
        echo "<table border='1px solid;'><tr><th>Product Name</th><th>Unit Price</th></tr>";
         
        foreach ($_POST['checked_values'] as $checked_id)
        {
            $query = "SELECT ProductName, UnitPrice FROM Products WHERE ProductID = $checked_id";
             
            $result = mysqli_query($dbc, $query)
                or die('Error querying database.');
                 
            $row = mysqli_fetch_array($result);
                 
            echo '<tr><td>' . $row['ProductName'] . '</td><td>' . $row['UnitPrice'] . '</td></tr>';
        }
        echo '</table>';
    }
 
    // Display Products with checkboxes for displaying
    $query = "SELECT ProductID, ProductName, UnitPrice FROM Products";
      
    $result = mysqli_query($dbc, $query)
        or die('Error querying database.');
      
    while($row = mysqli_fetch_array($result))
    {
        echo '<input type="checkbox" value="' . $row['ProductID'] 
                . '" name="checked_values[]" />';
        echo $row['ProductName'] . ' ' . $row['UnitPrice'] . '<br />';
    }
      
    mysqli_close($dbc);
?>
 
  <input type="submit" name="submit" value="Display" />
