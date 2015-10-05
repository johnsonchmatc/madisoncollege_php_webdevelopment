footer:@johnsonch :: Chris Johnson :: Web Development with PHP and MySQL :: Week 5
autoscale: true

#Web Development with PHP and MySQL
##Chapter 5
###Week 5

---
#Uploading Files

* Add ```enctype="multipart/form-data"``` to the form
* Adjust the file upload properties of the ```php.ini``` file

```ini
;;;;;;;;;;;;;;;;
; File Uploads ;
;;;;;;;;;;;;;;;;

; Whether to allow HTTP file uploads.
; http://php.net/file-uploads
file_uploads = On

; Temporary directory for HTTP uploaded files (will use system default if not
; specified).
; http://php.net/upload-tmp-dir
;upload_tmp_dir =

; Maximum allowed size for uploaded files.
; http://php.net/upload-max-filesize
upload_max_filesize = 10M

; Maximum number of files that can be uploaded via a single request
max_file_uploads = 20
```


---
#Uploading Files
##Using the form file input field
```php

<form enctype="multipart/form-data" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <input type="hidden" name="MAX_FILE_SIZE" value="32768" />
  <label for="name">Description:</label>
  <input type="text" id="description" name="description" 
    value="<?= (!empty($description)) ? $description : '' ?>"/>
    <br />
  <label for="image">Stool image:</label>
  <input type="file" id="image" name="image" />
  <hr />
  <input type="submit" value="Add" name="submit" />
</form>
```

---
#The Super Global ```$_FILES[]```

* ```$_FILES[]``` is another PHP super global variable that holds information pertaining to the uploaded file
* The file information is accessed using the name attribute of the file input element from the form
* **Assume a file named genericStool.jpg is uploaded**
  * ```$FILES['image']['name']``` equals: genericStool.jpg
  * ```$FILES['image']['type']``` equals: image/jpg
  * ```$FILES['image']['size']``` equals: 4,797 (the size in bytes)
  * ```$FILES['image']['tmp_name']``` equals: /tmp/phpE7qJky (the temporary storage location of the file on the server)
  * ```$FILES['image']['error']``` equals: 0 (the error code for the file upload; 0 is good)

---
#Combining Files with a Database

* It’s not a good idea to store images in a database
* It is better to store image files on the server, and the file location in the database

^ Files can be cached then using content delivery networks (CDNs)

---
#Altering Tables
###Databases can be ALTERed using ALTER TABLE 

---
#Altering Tables
* Add a new column to a table with ADD COLUMN
  * ALTER TABLE table_name ADD COLUMN column_name DATA_TYPE

```sql
ALTER TABLE stoolCollection ADD COLUMN image VARCHAR(128);
```
  
---
#Altering Tables
* Drop a column from a table with DROP COLUMN
  * ALTER TABLE table_name DROP COLUMN column_name
  
```sql
ALTER TABLE stoolCollection DROP COLUMN uselessnotes;
```
  
---
#Altering Tables
* Change the name and data type of a column with CHANGE COLUMN
  * ALTER TABLE table_name CHANGE COLUMN old_column_name new_column_name DATA_TYPE
  
```sql
ALTER TABLE stoolCollection CHANGE COLUMN image image_file_name VARCHAR(128);
```
  
---
#Altering Tables
* Change the data type or position of a column within a table with MODIFY COLUMN
  * ALTER TABLE table_name MODIFY COLUMN column_name DATA_TYPE POSITION column_name
  
```sql
ALTER TABLE stoolCollection MODIFY COLUMN date DATETIME AFTER id;
```
  
---
#Using ```require_once()```
* require_once() is similar to include
  
```php
include 'appvars.php';
```
  
* However, require_once() will report an error if the included file is not found, and only include the file once
  
```php
require_once('appvars.php');
```

---
#Using ```unlink()```

* Files can be deleted using unlink()

```php
// Try to delete the temporary screen shot image file
if (file_exists($_FILES['image']['tmp_name']))
{
    unlink($_FILES['image']['tmp_name']);
}
```
  
* If you don’t care about reporting an error if there is a failure to delete the file use:
 
```php
// Try to delete the temporary screen shot image file
@unlink($_FILES['image']['tmp_name']);
```

---
#Using ```move_uploaded_file()```
* Files can be moved using move_uploaded_file()

```php
// Move the screen shot image file from temp storage to the image location
$target = SC_UPLOADPATH . $image;
move_uploaded_file($_FILES['image']['tmp_name'], $target);
```

---
#Using ```GET vs. POST```
* POST is a way of sending data to a server, as a payload and not a URL
 
```php
<form method="post" action="addStool.php">
```
  
* GET can be sent from a form (set the method attribute to get)
 
```php
<form method="get" action="addStool.php">
```
  
* GET can also be sent as a URL

```php 
<a href="removestool.php?id=1&date=2015-10-01%12:20:01&description=Generic%Stool&image=genericStool.jpg">Remove</a>
```

---
#Super Global ```$_GET[]```

---
