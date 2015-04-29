##Exam 2 Study Guide

In the following code know what each of the MySQL specific functions purpose is.

```
<?php
  // Sample1 Script
  $link = mysql_connect('itins3.matcmadison.edu','astudent','phpmysql');
  if (!$link)
    exit('Connection to MySQL server failed!');

  $database = 'Northwind';
  if (! mysql_select_db($database, $link))
    exit('Selection of database '. $database .' failed!');

  $query = 'SELECT CompanyName, Phone from Shippers';
  $result = mysql_query($query, $link);
  if (!$result)
    die('Query failed: '. mysql_error($link));

  $record = mysql_fetch_assoc($result);
  foreach ($record as $key => $value) {
    print "$key: $value<br />";
  }
  print '<br />';

  mysql_close($link);
?>
```

Be able to determine what will be displayed for each of the loops. Also know
what each of the built in MySQL functions in this script do and return.

```
<?php
  // Sample5 Script
  @ $db = mysql_connect('itins3.matcmadison.edu','astudent','phpmysql');
  if (!$db) {
    exit('Connection to server failed: '. mysql_error());
  }
  if (! mysql_select_db('Northwind', $db)) {
    exit('Database select error: '. mysql_error($db));
  } 
  $result = mysql_query('SELECT * FROM Customers', $db);
  if (! $result) {
    exit('Database query error: '. mysql_error($db));
  }

  print "<table>";
  for ($i=0; $i < mysql_num_fields($result); $i++) {
    print '<th><u>'. mysql_field_name($result, $i) .'</u></th>';
  }
  while ($record = mysql_fetch_row($result)) {
    print '<tr>';
    for ($j=0; $j < mysql_num_fields($result); $j++) {
      print '<td>'. $record[$j] .'</td>';
    }
    print '</tr>';
  }
  print '</table>';
?>
```

In the following code know that the regular expression is looking for and what
results will be returned from the two regular expression functions.

```
<html>
  <head>
   <title>Sample2 Script</title>
  </head>
  <body bgcolor="lavender">
   <?php
     $regex = '/pat/i';
     $search_array = array('Fitzpatrick','Peggy','Patrick',
                           'Patricia','Johnathon');
     $newArray = preg_grep($regex, $search_array);
     print '<pre>Found '. count($newArray)." matches\n";
     print_r($newArray);

     $newArray = preg_grep($regex, $search_array, PREG_GREP_INVERT);
     print 'Found '. count($newArray)." that didn't match\n";
     print_r($newArray);
     print '</pre>';
   ?>
  </body>
</html>
```

Understand what each of the mysql commands is doing and what output it might produce.
```
$ mysql -u root -p
Enter password: 
Welcome to the MySQL monitor.  Commands end with ; or \g.
Your MySQL connection id is 1
Server version: 5.0.45 MySQL Community Server (GPL)

Type 'help;' or '\h' for help. Type '\c' to clear the buffer.

mysql> use sample3db;
Database changed
GRANT ALL PRIVILEGES ON sample3db.* TO 'bob'@'localhost' IDENTIFIED BY 'guess';
Query OK, 0 rows affected (0.00 sec)

mysql> set password for bob@localhost = password('robert');
Query OK, 0 rows affected (0.00 sec)

mysql> DELETE FROM mysql.user WHERE user = 'bob';
Query OK, 1 row affected (0.00 sec)

mysql> flush privileges;
Query OK, 0 rows affected (0.00 sec)
```

Understand what each of the PHP file functions do, and what is the purpose and 
location of ```$_SERVER['DOCUMENT_ROOT']``` on your nitrous box.

```   
<html>
 <head>
  <title>Sample4 Script</title>
 </head>
 <body bgcolor="lavender">
  <?php
    $filename = $_SERVER['DOCUMENT_ROOT'] .'/files/data.txt';

    if (! file_exists($filename)) {
      exit("No such file as: $filename");
    }
    
    $fh = fopen($filename,'rb');
    while(! feof($fh)) {
      $line = fgets($fh);   
      print $line .'<br />';
    }
    fclose($fh);
    
    $lines = file($filename);
    foreach ($lines as $line_num => $line) {
      $line_num++;
      echo '<b>'. $line_num .'</b>: '. $line .'<br />';
    }
  ?>
 </body>
</html>
```

Given the following contents in the text file e2sample6.txt
```
Steve Blenheim 100
Betty Boop 200
Igor Chevsky 300
Norma Cord 400
```

What would the following script produce for output?  What is the regular expression doing?

```
<?php
  // Sample6 Script
  $fh = fopen('e2sample6.txt','r');
  if (!$fh)
    exit('File e2sample6.txt not found.');
  $text = fgets($fh);
  while (!feof($fh)) {
    $new = preg_replace('/(\w+)\s(\w+)\s(\w+)/','$2, $1 $3',
                        $text);
    echo $new .'<br />';

    $text = fgets($fh);
  }
?>
```

Be able to determine what is going on with writing a file out to the disk.
Be able to explain each of the file functions do.
```
<html>
 <head><title>Sample8 Script</title></head>
 <body bgcolor="lightgreen">
  <?php
    $name = "John Doe";
    $address = "1001 Logic Dr.";
    $email = "johndoe@place.gov";
    $title = "VP";
    $outputstring="$name\t$address\t$email\t$title\n";
    echo 'The data to be written:<br />';
    echo $outputstring .'<br>';
    
    $filename = $_SERVER['DOCUMENT_ROOT'] .'/files/info.txt';
    $filehandle = fopen($filename, "ab");
    if (fwrite($filehandle, $outputstring,
               strlen($outputstring)) == FALSE) {
      echo "You cannot write to $filename.<br />";
    }
    else {
      $text = file_get_contents($filename);
      echo '<br />The contents of the file is:<br />';
      echo "<pre>$text</pre>";
    }
    fclose($filehandle);
  ?>
 </body>
</html>
```

In the following authentication and protected action scripts be able to explain
what is stopping a user from accessing the protected script and how. What the built
in functions are and how they work.

Authentication Script
```
<?php // Sample7 authentication
  session_start();
  if (isset($_POST['username']) &&
      ($_POST['username'] == 'user') &&
      isset($_POST['password']) &&
      ($_POST['password'] == 'pass')) {
    $_SESSION['Authenticated'] = 1;
  }
  else {
    $_SESSION['Authenticated'] = 0;
  }
  session_write_close();
  header('Location: e2sample7x2.php');
?>
```
Protected content script
```
<?php
  session_start();
?>
<html>
 <head><title>Sample7 protected content</title></head>
 <body>
  <?php
    if (isset($_SESSION['Authenticated']) && ($_SESSION['Authenticated'] == 1)) {
  ?>
  <p>Hello. Since you are logged in, you can view protected content!</p>
  <?php } else { ?>
  <p>Sorry, since you are not logged in, you cannot view protected content.</p>
  <?php } ?>
 </body>
</html>
```
