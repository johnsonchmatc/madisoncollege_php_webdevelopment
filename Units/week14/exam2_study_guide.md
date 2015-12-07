##Exam 2 Study Guide

Be able to explain these functions and how the affect the variables in the script.
```
<?php
  $friend = "Sam";
  $friend2 = who();
  echo 'My friends are: ', $friend, ' ', $friend2, '<br />';

  function who() {
    $friend = "Joe";
    return $friend;
  }

  $friend3 = who();
  print 'My friends are: '. $friend .' '. $friend3 .'<br />';


  function raise_sal() {
    global $salary;
    $salary *= 1.1;
  }

  $salary = 50000;
  raise_sal();
  echo 'Congratulations! Your new salary is: $'. $salary .'<br />';
?>
```

In the following code know what each of the MySQL specific functions purpose is.

```
<?php
  // Sample1 Script

  $link = mysqli_connect('itins3.matcmadison.edu','astudent','phpmysql', 'Northwind');
  if (!$link)
    exit('Connection to MySQL server failed!');

  $query = 'SELECT CompanyName, Phone from Shippers';
  $result = mysqli_query($link, $query);
  if (!$result)
    die('Query failed: '. mysqli_error($link));

  $record = mysqli_fetch_assoc($result);
  foreach ($record as $key => $value) {
?>
    <?= "$key: $value" ?></br>
<?php
  }
  print '<br />';

  mysqli_close($link);
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

Where is this script looking for the file data.txt to be located?  What happens
if the file isn't there? If the file is there what does the script do?
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

What is the purpose of the function ```mysqli_fetch_field_direct()```? What does
```mysqli_num_fields()``` do?

```
<?php
    $db = mysqli_connect('localhost','root','', 'northwind');
    if (!$db) {
        exit('Connection to server failed: '. mysqli_error($db));
    }

    $result = mysqli_query($db, 'SELECT * FROM Customers');
    if (! $result) {
        exit('Database query error: '. mysqli_error($db));
    }
?>

<table>
    <?php for ($i=0; $i < mysqli_num_fields($result); $i++): ?>
        <th><u> <?= mysqli_fetch_field_direct($result, $i)->name ?> </u></th>
    <?php endfor; ?>

    <?php while ($record = mysqli_fetch_row($result)): ?>
        <tr>
            <?php for ($j=0; $j < mysqli_num_fields($result); $j++): ?>
                  <td><?= $record[$j] ?></td>
            <?php endfor; ?>
        </tr>
    <?php endwhile; ?>
</table>
```

In this code what is the purpose of ```enctype="multipart/form-data"```? What is
the ```move_uploaded_file()``` and what is the end result of it being run in this
php script?

####HTML Form
```
<html>
 <head>
  <title>Sample7 Form</title>
 </head>
 <body bgcolor="lavender">
  <form
       enctype="multipart/form-data"
       action="e2sample7.php"
       method="POST">
   Browse and select the file you want to upload: <br />
   <input name="my_file" type="file" />
   <br />
   <input type=submit value="Get File"/>
  </form>
 </body>
</html>
```

####PHP Script
```
<html>
 <head>
  <title>Sample7 Script</title>
 </head>
 <body bgcolor="#33ff33">
  <?php
    echo 'The uploaded file is: ',
         $_FILES['my_file']['tmp_name'],'<br />';
    $filename = $_FILES['my_file']['name'];
    $filesize = $_FILES['my_file']['size'];
    $directory = $_SERVER['DOCUMENT_ROOT'] .'/files/';
    $uploadFile = $directory . $filename;
    echo "The moved file is: $uploadFile<br />";
    if (move_uploaded_file($_FILES['my_file']['tmp_name'],
                           $uploadFile)) {
      echo 'The file was successfully uploaded.<br />';
      echo "The size of file, $filename, is $filesize bytes.<br />";
    }
  ?>
 </body>
</html>
```

In this code which class is the Parent class and which is the Child? What methods
are not available in the Child class?  What methods are available in the child
class?

```
class Member {

  public $username = "";
  private $loggedIn = false;

  public function login() {
    $this->loggedIn = true;
  }

  public function logout() {
    $this->loggedIn = false;
  }

  public function isLoggedIn() {
    return $this->loggedIn;
  }
}

class Administrator extends Member {

  public function createForum( $forumName ) {
    echo "$this->username created a new forum: $forumName<br>";
  }

  public function banMember( $member ) {
    echo "$this->username banned the member: $member->username<br>";
  }

}
```
