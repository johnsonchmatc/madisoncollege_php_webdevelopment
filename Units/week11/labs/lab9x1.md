#Exercise 1
* Create a directory named lab09 under your labs directory
* Create a HTML file named lab09.html in your lab09 directory
* Create a script file named lab09.php in your lab09 directory

* In your HTML file add the following form:

```
<form enctype="multipart/form-data" action="lab09.php" method="post">
 Type the name of the file to upload: <br />
 <input name="user_file" type="file"/>
 <br />
 <input type=submit value="Upload File"/>
</form>
```

* In your PHP file add the following script:
```
<?php

      $filename = $_FILES['user_file']['name'];
      $filesize = $_FILES['user_file']['size'];
      $directory = $_SERVER['DOCUMENT_ROOT'] .'/lab09/uploads/';
      $uploadFile = $directory . $filename;


  if (move_uploaded_file($_FILES['user_file']['tmp_name'], $uploadFile)) {
    echo 'The file is valid and was successfully uploaded.  <br />';
    echo "The file, $filename, is $filesize bytes.<br />";
  }
?>
```
* Make sure you have ```$directory``` set to a valid file path.
* Download the following text files to your local (not nitrous) computer to use as samples:
  * http://www.textfiles.com/computers/1105.txt
  * http://www.textfiles.com/computers/asp5301.txt
  * http://www.textfiles.com/computers/mac2tel.v2.txt
* Make sure you can upload the files and see them show up in your nitrous

#Exercise 2
* Modify your PHP script to output the contents of the file on the screen 

Show your results to your instructor 
