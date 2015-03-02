<?php
  // script to process the lab6form HTML form
      $name = $_POST['name'];
      $address = $_POST['address'];
      $email = $_POST['email'];
      if (!empty($_POST['birth_month']) && !empty($_POST['birth_day']) &&
          !empty($_POST['birth_year']))
        $birthDate = $_POST['birth_month'] . "/" . $_POST['birth_day'] . "/" . $_POST['birth_year'];
      $gender = $_POST['gender'];
      $fiction = $_POST['fiction'];
      $horror = $_POST['horror'];
      $action = $_POST['action'];
      $comedy = $_POST['comedy'];
?>
<html>
 <head>
  <title>Lab 6 Output</title>
 </head>
 <body>
  <h2 align="center">Output My Information</h2>
  <p align="left"><B> Full Name </B></p>
  <p align="center">
  <?php
       //--- Validating the name Input value.
       if(empty($name))
         echo "***No name submitted***";
       else
       //--- Printing the name Input value.
         echo $name;
  ?>
  </p>
  <p align="left"><B> Address </B></p>
  <p align="center">
  <?php
       //--- Validating Value in the Address Text field
       if(empty($address))
         echo "***No address submitted***";
       else
       //--- Printing the Address Input value.
         echo $address;
  ?>
  </p>
  <p align="left"><B>Email</B> </p>
  <p align="center">
  <?php
       //--- Validating Value in the Email field
       if(empty($email))
         echo "***No email address submitted***";
       else
       //--- Printing the Email Input value.
         echo $email;
  ?>
  </p>
  <p align="left"><B>Birth Date</B> </p>
  <p align="center">
  <?php
       //--- Validating Value of Birth Date
       if(empty($birthDate))
         echo "***No birth date submitted***";
       else
       //--- Printing the birth date value.
         echo $birthDate;
  ?>
  </p>
  <p align="left"><B>Gender</B> </p>
  <p align="center">
  <?php
       //--- Validating gender
       if(empty($gender))
         echo "***No gender submitted***";
       else
       //--- Printing the gender.
         echo $gender;
  ?>
  </p>
  <p align="left"><B>Topics of Interest</B> </p>
  <p align="center">
  <?php
       //--- Validating topics
       if (empty($fiction) && empty($horror) && empty($action) &&
           empty($comedy)) 
         echo "***No Topics of Interest submitted***";
       else {
         if($fiction)
           echo "fiction <br>";
         if ($horror)
           echo "horror <br>";  
         if ($action) 
           echo "action <br>";
         if ($comedy) 
           echo "comedy <br>";
       }
  ?>
  </p>
 </body>
</html>

