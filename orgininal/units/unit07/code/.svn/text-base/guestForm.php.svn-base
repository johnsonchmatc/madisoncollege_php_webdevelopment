<?php
  include("header.inc.php");
  include("guestBook.php");
  // Was the form submitted?
  if (isset($_POST['submit'])) {
    extract($_POST);           // Get the form data
    /* Use the AddressBook Class */
    $entry= new GuestBook(); // Instantiate the class
    $entry->setName($your_name);  // Assign the properties
    $entry->setAddress($your_address);
    $entry->setPhone($your_phone);
    $entry->setBirthday($your_bd);
    $entry->setFile($your_file);
    $entry->showGuest();  // Call the class methods
    $entry->saveGuest();
  }
  else {
?>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>"
        method="POST">
  <div align="center">
  <font face="arial" size=+1>
  <table cellspacing="1" cellpadding="1" border="0">
   <tr><td>Enter your name:</td>
    <td><input type="text" size=50 name="your_name"></td>
   </tr>
   <tr><td>Enter your address:</td>
    <td><input type="text" size=50 name="your_address"></td>
   </tr>
   <tr><td> Enter your phone:</td>
    <td><input type="text" size=20 name="your_phone"></td>
   </tr>
   <tr><td>Enter your birthday:</td>
    <td><input type="text" size=12 name="your_bd"></td>
   </tr>
   <tr><td><input type=hidden name="your_file"
            value="guestbook.txt">
    </td>
    <td><input type="submit" name="submit"
                      value="Submit Entry"></td>
   </tr>
   <tr><td></td>
    <td><input type=reset value="Clear"></td>
   </tr>
  <table>
  </div>
  </form>
<?php
  }
  include("footer.inc.php");
?>
