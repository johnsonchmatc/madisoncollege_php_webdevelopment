footer:@johnsonch :: Chris Johnson :: Web Development with PHP and MySQL :: Week 7
autoscale: true

#Web Development with PHP and MySQL
##Chapter 7 and 7.5
###Week 7

---




---
#Labrat

* Get the code setup

```
$ cd ~/workspace/
$ cd labrat
$ git checkout week_07_start
$ git checkout -b week_07_in_class
```

* Update the database config

```
$ cp connectvars.php.example connectvars.php
```
* Edit connectvars.php to contain your database information

##Update the database
* open labrat.sql
* make sure mysql is started ```$ mysql-ctl start```
* connect to mysql ```$ mysql -u root```
* paste contents of labrat.sql

##Login Page
* Create a page called login.php and add the following code

```php
<?php

  require_once('header.php');
  require_once('db.php'); 

  $error_msg = "";

  if (!isset($_SESSION['user_id'])) 
  {
      if (isset($_POST['submit'])) 
      {

          $user_username = mysqli_real_escape_string($mysqli, trim($_POST['username']));
          $user_password = mysqli_real_escape_string($mysqli, trim($_POST['password']));

          if (!empty($user_username) && !empty($user_password)) 
          {
            $query = "SELECT id, Username FROM Users WHERE Username = '$user_username' AND Password = SHA('$user_password');";
            $data = mysqli_query($mysqli, $query);

              if (mysqli_num_rows($data) == 1) 
              {
                  $row = mysqli_fetch_array($data);
                  $_SESSION['user_id'] = $row['id'];
                  $_SESSION['username'] = $row['Username'];
                  setcookie('user_id', $row['user_id'], time() + (60 * 60 * 24 * 30));    
                  setcookie('username', $row['username'], time() + (60 * 60 * 24 * 30));  
                  header('Location: ' . SITE_ROOT . '/index.php');
              }
              else {
                 $error_msg = "Sorry, you must enter your username and password to log in.  $query";
              }
          }
          else {
              $error_msg = "Sorry, you must enter your username and password to log in.  $query";
          }
      }
  }


  if (empty($_SESSION['user_id'])) {
    echo '<p class="error">' . $error_msg . '</p>';
?>

<form class="form-horizontal" action="<?= $_SERVER['PHP_SELF']; ?>" method="post" role="form">
  <fieldset>
    <legend></legend>

    <div class="form-group">
      <label for="Username" class="col-lg-2 control-label">Username</label>
      <div class="col-lg-10">
      <input type="text" class="form-control" name="username" id="username" value="<?php if (!empty($user_username)) echo $user_username; ?>" >
      </div>
    </div>

    <div class="form-group">
      <label for="Password" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" name="password" id="password" >
      </div>
    </div>

    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" name="submit" value="submit" class="btn btn-primary">Log In</button>
      </div>
    </div>
  </fieldset>
</form>

<?php
  }
  else {
    // Confirm the successful log-in
    echo('<p class="login">You are logged in as ' . $_SESSION['username'] . '.</p>');
  }
?>

<?php
  // Insert the page footer
  require('footer.php');
?>
```


##Adding Users
* Create a folder called users
* Create new files in there for new.php, create.php and index.php
* First let's add the form for adding users to new.php

```php
<?php include('../header.php') ?>        
<?php require_once('../db.php') ?>
<form class="form-horizontal" action="create.php" method="post" role="form">
  <fieldset>
    <legend>Add new user</legend>

    <div class="form-group">
      <label for="FirstName" class="col-lg-2 control-label">First Name</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="FirstName" id="FirstName" >
      </div>
    </div>

    <div class="form-group">
      <label for="LastName" class="col-lg-2 control-label">Last Name</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="LastName" id="LastName" >
      </div>
    </div>

    <div class="form-group">
      <label for="Username" class="col-lg-2 control-label">Username</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="Username" id="Username" >
      </div>
    </div>

    <div class="form-group">
      <label for="Password" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" name="Password" id="Password" >
      </div>
    </div>

    <div class="form-group">
      <label for="PasswordConfirmation" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" name="PasswordConfirmation" id="PasswordConfirmation" >
      </div>
    </div>

    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>
<?php include('../footer.php') ?>        
```

* Then we can update create.php to take these parameters

```php
<?php include('../header.php') ?>        
<?php require_once('../db.php') ?>


<?php
    $data = array('first_name' => '', 
                  'last_name' => '', 
                  'username' => '', 
                  'password' => '', 
                  'password_confirmation' => '', 
                  'encrypted_password' => '');


    if (isset($_POST['submit'])) {
        if (isset($_POST['FirstName']) && !empty($_POST['FirstName']))
        {
            $data['first_name'] = mysqli_real_escape_string($mysqli, trim($_POST['FirstName']));
        }

        if (isset($_POST['LastName']) && !empty($_POST['LastName']))
        {
            $data['last_name'] = mysqli_real_escape_string($mysqli, trim($_POST['LastName']));
        }

        if (isset($_POST['Username']) && !empty($_POST['Username']))
        {
            $data['username'] = mysqli_real_escape_string($mysqli, trim($_POST['Username']));
        }

        if (isset($_POST['Password']) && !empty($_POST['Password']))
        {
            $data['password'] = mysqli_real_escape_string($mysqli, trim($_POST['Password']));
        }

        if (isset($_POST['PasswordConfirmation']) && !empty($_POST['PasswordConfirmation']))
        {
            $data['password_confirmation'] = mysqli_real_escape_string($mysqli, trim($_POST['PasswordConfirmation']));
        }

        if ($data['password'] != $data['password_confirmation'])
        {
          header('Location: new.php?error=password_match');
        }
        else
        {
            foreach($data as $item)
            {
              if (!isset($item) || empty($item))
              {
                  header('Location: new.php?error=missing_data');
              }
            }  

        }

    }
    else
    {
      //TODO: Send user back to new form with sticky data and error message
    }


    
    $first_name = $data['first_name']; 
    $last_name = $data['last_name']; 
    $username = $data['username'];
    $password = $data['password'];

    $query = "SELECT * FROM Users where Username = '$username';";
    $duplicate_username_results = mysqli_query($mysqli, $query);
    if (!$duplicate_username_results) {
        echo $query;
        exit("Database query error: ". mysql_error($mysqli));
    }

    $duplicate_usernames = mysqli_fetch_array($duplicate_username_results);

    if (count($duplicate_usernames) > 0)
    {
      header('Location: new.php?error=username');
    }
    else
    {
        $query = "INSERT INTO Users (FirstName, LastName, Username, Password) 
          VALUES ('$first_name', '$last_name', '$username', SHA('$password'));";

        $result = mysqli_query($mysqli, $query);
        if (!$result) {
          echo $query;
          exit("Database query error: ". mysql_error($mysqli));
        }
        else
        {
          header('Location: index.php');
        }
    }
     
?>

<?php include('../footer.php') ?>        
```

* Last let's add a way to see what users are in our system in the users/index.php

```php
<?php include('../header.php') ?>        
<?php require_once('../db.php') ?>
<?php
    $query = "SELECT * FROM Users;";
    $result = mysqli_query($mysqli, $query);
    if (!$result) {
        exit("Database query ($query) error: ". mysql_error($mysqli));
    }
?>

<div class="row">
  <h2>User Management</h2>
  <p><a href="new.php">Add User</a></p>
</div>
<div class="row">
<table class="table table-striped table-hover col-md-12">
  <thead>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($record = mysqli_fetch_array($result)) { ?>
        <tr>
          <td><?= $record['FirstName'] ?></td>
          <td><?= $record['LastName'] ?></td>
          <td><?= $record['Username'] ?></td>
        </tr>
    <?php } ?>
  </tbody>
</table>
</div>

<?php include('../footer.php') ?>        
```



##Logging Users out

* Create a file called logout.php and add the following code:

```php
<?php
  session_start();
  if (isset($_SESSION['user_id'])) 
  {
      $_SESSION = array();

      if (isset($_COOKIE[session_name()])) 
      {
          setcookie(session_name(), '', time() - 3600);
      }
      session_destroy();
  }

  setcookie('user_id', '', time() - 3600);
  setcookie('username', '', time() - 3600);

  $home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/index.php';
  header('Location: ' . $home_url);
?>
```
