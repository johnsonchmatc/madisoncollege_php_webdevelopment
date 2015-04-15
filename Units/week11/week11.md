#Files and Direcories
##Chapter 11
###Week 11 

---
#Unix File Permissions

* [https://archive.org/details/UnixFilePermissionsAndOwnership](https://archive.org/details/UnixFilePermissionsAndOwnership)

---
#File modes in PHP
![fit inline](https://dl.dropboxusercontent.com/s/fvxxh0esy9cgpyv/2015-04-07%20at%209.26%20PM.png)

---
#Opening a File
  ```php
  fopen(string $filename , string $mode)
  ```
* ```fopen()``` requires two parameters

---
![fit](https://dl.dropboxusercontent.com/s/njyt2k1k9ioso90/2015-04-07%20at%202.56%20PM.png)

---
#Opening a File for Reading

* Four PHP functions are used for reading text from a file: ```fgets()```, 
```fgetc()```, ```fread()```, and ```file_get_contents()```
* Before opening a file you need to make sure it's there and readable

---
#Opening a File for Reading
* ```file_exists()``` function checks to see if the file exists, and the 
* ```is_readable()``` function will return true if a file exists and has read permission.
* Example: [samples/uploadFile.php](samples/uploadFile.php)

---
#Opening a File for Writing and Appending
```php
fopen($filename, "wb")
```

---

```php
<html>
 <head>
  <title>Write a File with fwrite()</title>
 </head>
 <body bgcolor="lavender">
  <?php
    $name = "Joe Shmoe Jr.";
    $address = "100 Main St.";
    $email = "jshmoe@whatever.mil";
    $title = "Major";
    $outputstring = "$name\t$address\t$email\t$title\n";
    echo 'The data to be written:<br>';
    echo $outputstring .'<br>';
    
    $filename = './files/info.txt'; //note the realitive path
    $filehandle = fopen($filename, "wb");
    fwrite($filehandle, $outputstring, strlen($outputstring));
    fclose($filehandle);
  ?>
 </body>
</html>
```

---
#Appending
```php
fopen($filename, "ab")
```

---
#File Checks
![fit inline](https://dl.dropboxusercontent.com/s/32fc419o4aiut3g/2015-04-07%20at%209.32%20PM.png)

* Let's add some of these to the upload example

