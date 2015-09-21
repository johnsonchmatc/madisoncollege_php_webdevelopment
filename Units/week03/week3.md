#PHP Web Development with MySQL
##Chapter 3
###Week 3


---
#MySQL Data Types
##Numeric Data Types

![fit inline](https://dl.dropboxusercontent.com/s/pqi2ho8f1u0xat8/2015-09-21%20at%2012.35%20PM.png)

---
#MySQL Data Types
##String Types

![fit inline](https://dl.dropboxusercontent.com/s/xmyibj3r8mq1fkw/2015-09-21%20at%2012.37%20PM.png)

---
#MySQL Data Types
##Date and Time Types

![fit inline](https://dl.dropboxusercontent.com/s/iekahf1zxo3sv49/2015-09-21%20at%2012.37%20PM%20%281%29.png)


---
#MySQL Data Types
##Viewing data types

```sql
mysql> DESCRIBE Products;
+-----------------+---------------+------+-----+---------+----------------+
| Field           | Type          | Null | Key | Default | Extra          |
+-----------------+---------------+------+-----+---------+----------------+
| ProductID       | int(11)       | NO   | PRI | NULL    | auto_increment |
| ProductName     | varchar(40)   | NO   | MUL | NULL    |                |
| SupplierID      | int(11)       | YES  | MUL | NULL    |                |
| CategoryID      | int(11)       | YES  | MUL | NULL    |                |
| QuantityPerUnit | varchar(20)   | YES  |     | NULL    |                |
| UnitPrice       | decimal(10,4) | YES  |     | 0.0000  |                |
| UnitsInStock    | smallint(2)   | YES  |     | 0       |                |
| UnitsOnOrder    | smallint(2)   | YES  |     | 0       |                |
| ReorderLevel    | smallint(2)   | YES  |     | 0       |                |
| Discontinued    | bit(1)        | NO   |     | b'0'    |                |
+-----------------+---------------+------+-----+---------+----------------+
```

---
#Be careful

![fit inline](http://flibbertigiblets.com/phpWebDevMySQL/images/exploits_of_a_mom.png)

---
#Loops

---
#Loops

* while
* do/while
* for
* foreach

---
#While
##Count up

```php
$counter = 0;
while ($counter < 10)
{
    echo $counter;
    $counter++;
}
```

---
#While
##Count down
```php
$counter = 10;
while ($counter > 0)
{
    echo $counter;
    $counter--;
}
```


---
#do/while

```php
$die_1 = 1;
$die_2 = 2;
do
{
    $die_1 = rand(1,6);
    $die_2 = rand(1,6);
    echo "You rolled a $die_1 and a $die_2);
}while( $die_1 != $die_2 );
```

---
#for

```php
for( $counter = 0; $counter < 10; $counter++)
{
    echo $counter . ',';
}
```

---
#foreach

```php
$error_messages = ["something hosed", "user error", "pebkac error"];
foreach($error_messages as $error)
{
    echo $error;
}
```

---
#Let's build something

---
#Instasomething

---
#Notes

* Move layout into header and footer

```php
<?php include('header.php') ?>
```

* New photo page

```php
<?php include('header.php') ?>
<div class="row">
    <div class="col-lg-12">
        <h1>Instasomething</h1>
        <h2>Add a new photo</h2>
    </div>
</div>


<div class="row">
    <div class="col-lg-12">
      <form enctype="multipart/form-data" action="upload_photo.php" method="post" role="form">
          <div class="form-group">
            <input name="user_file" type="file"/>
          </div>
          <div class="form-group">
              Description:
              <textarea name="description" class="form-control" rows="3">
              </textarea>
          </div>
          <div class="form-group">
            <input type=submit value="Get File"/>
          </div>
      </form>
    </div>
</div>
<?php include('footer.php') ?>
```

* Uploder

```php
<?php
    $filename = $_FILES['user_file']['name'];
    $filesize = $_FILES['user_file']['size'];
    $directory = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';
    $uploadFile = $directory . $filename;

    if (file_exists($_FILES['user_file']['tmp_name']))
    {
        if (move_uploaded_file($_FILES['user_file']['tmp_name'], $uploadFile))
        {
            echo 'The file is valid and was successfully uploaded.  <br />';
            echo "The file, $filename, is $filesize bytes.<br />";

        }else{
          echo 'The file was not moved';
        }
    }
    else
    {
        echo "The file is not there!";
    }

?>
```

* Create the database and setup the table

```sql
CREATE DATABASE IF NOT EXISTS instasomething ;

CREATE TABLE `Posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text,
  `file_path` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
);
```

* Create a connection

```php
$mysqli = mysqli_connect("localhost", "root", "root", "instasomething");
```

* Do something with the description

```php
$description = $_POST['description'];
```

* Save data to the database

```php
$query = "INSERT INTO Posts (file_path,description) VALUES ('$filename', '$description');";
$result = mysqli_query($mysqli, $query);
if (!$result) {
    exit('Database query error: '. mysql_error($mysqli));
}
else
{
  // We want them to see their post
  header('Location: index.php');
}
```

* Home page should load data

```php
<?php
    $mysqli = mysqli_connect("localhost", "root", "root", "instasomething");
    $query = "SELECT * FROM Posts;";
    $result = mysqli_query($mysqli, $query);
    if (!$result) {
        exit('Database query error: '. mysql_error($mysqli));
    }
?>


<?php while ($record = mysqli_fetch_assoc($result)) { ?>
    <div class="col-lg-12">
        <img class="img-responsive center-block" 
             src="/uploads/<?= $record["file_path"]?>" width="300" alt="">
        <p>
            <span class="glyphicon glyphicon-time"></span> 
            Posted on August 24, 2013 at 9:00 PM
        </p>
        <p class="lead">
            <?= $record["description"]?>
        </p>
        <hr>
    </div>
<?php } ?>
```

* Sort by insert

```php
$query = "SELECT * FROM Posts ORDER BY id DESC;";
```

* A better error message

```php
exit("Database query error: mysql_error($mysqli) $query");
```

* Get the database ready for a date

```sql
ALTER TABLE `Posts` ADD `post_date` datetime;
```

* Get a time stamp during upload

```php
$today = date("Y-m-d H:i:s");
```

* Change our insert query

```php
$query = "INSERT INTO Posts (file_path,description,post_date) VALUES ('$filename', '$description', '$today');";
```

* Display the date

```php
<?= $record["post_date"]?>
```







```ini
; Maximum allowed size for uploaded files.
; http://php.net/upload-max-filesize
upload_max_filesize = 10M
```
