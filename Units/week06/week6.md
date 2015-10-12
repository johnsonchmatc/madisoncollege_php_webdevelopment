footer:@johnsonch :: Chris Johnson :: Web Development with PHP and MySQL :: Week 6
autoscale: true

#Web Development with PHP and MySQL
##Chapter 6
###Week 6

---
#Arrays
What is an array?

* a variable that can store a collection of scalars.
* ‘an ordered map’, simply a collection of key-value pairs (the ‘key’ is associated with the ‘value’).

---
#Arrays
##Two types of arrays

* Numeric
```php 
$products = array('bacon','hamburgers','tomatoes','buns');
echo $products[0]; //bacon
echo $products[3]; //buns 
```
  
Associative

```php
$ages = array('bob' => 34, 'kim' => 31, 'todd' => 62);
echo $ages['bob']; //34
echo $ages['kim']; //31
echo $ages['todd'];//62 
```

---
#Functions to create an array
##```array_combine()```

* Turn 2 different arrays into one Associative array

```php
$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b);
print_r($c); //Array ( [green] => avocado [red] => apple [yellow] => banana )
```
  
* Must be equal sizes

---
#Functions to create an array
##```compact()```

* Takes a variable number of parameters

* Each parameter can be either a string containing the name of the variable, or an array of variable names
* The array can contain other arrays of variable names inside it

```php
$city  = "San Francisco";
$state = "CA";
$event = "SIGGRAPH";
 
$location_vars = array("city", "state");
 
$result = compact("event", "nothing_here", $location_vars);
print_r($result); //Array ( [event] => SIGGRAPH [city] => San Francisco [state] => CA )
```

---
#Adding items to an array
##```array_push()```

```php  
$cars = array();
$cars[] = 'windstar';
array_push($cars, "cavalier");
$cars[] = "sorento";
array_push($cars, "cabrio");
 
print_r($cars);
```
 
---
#Accessing items from an array

```php 
$ages = array('bob' => 34, 'kim' => 31, 'todd' => 62);
echo $ages['bob']; //34
echo $ages['kim']; //31
echo $ages['todd'];//62
  
$variable['key/index']
```

---
#Looping with arrays

```
$cars = array("windstar","cavalier","sorento","cabrio");
 
for($i = 0; $i < count($cars); $i++)
{
  echo $cars[$i];
}
 
foreach($cars as $car)
{
  echo $car;
}
 
while($i < count($cars))
{
  echo $cars[$i];
  $i++;
}
```
   
---
#Security
##Simple username password, with basic HTTP Auth

```php
$username = 'rock';
$password = 'roll';

if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW']) ||
  ($_SERVER['PHP_AUTH_USER'] != $username) || ($_SERVER['PHP_AUTH_PW'] != $password)) {
  // The user name/password are incorrect so send the authentication headers
  header('HTTP/1.1 401 Unauthorized');
  header('WWW-Authenticate: Basic realm="Guitar Wars"');
  exit('<h2>Guitar Wars</h2>Sorry, you must enter a valid user name and password to access this page.');
}
```

---
#Security
##SQL Injection
* [http://www.unixwiz.net/techtips/sql-injection.html](http://www.unixwiz.net/techtips/sql-injection.html)


---
#Security
##SQL Injection

* ```trim()```
* ```mysqli_real_escape_string()```

---
#Project 1 group feedback
  * User input handling
  * Indentation spaces
  * Script order

---
* Whiteboard out your page(s) as wireframes

*  Start coding with a good html template

```php
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bare - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="http://bootswatch.com/cerulean/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div class="container">
        <div class="row">
            <h1>Super Task List</h1>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>

</html>
```

* Define your database

```sql
CREATE DATABASE todo;
use todo;
CREATE TABLE `list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `task` text,
  `created\_at` datetime,
  `category` varchar(255),
  `completed` tinyint,
  PRIMARY KEY (`id`)
);
```

* Then get your form in place 

```php
<div class="col-md-6">
    <form class="form-horizontal" method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
      <fieldset>
        <legend>Add new task</legend>
        <div class="form-group">
          <label for="task" class="col-lg-2 control-label">Task</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" id="task" name="task">
          </div>
        </div>

        <div class="form-group">
          <label for="category" class="col-lg-2 control-label">Category</label>
          <div class="col-lg-10">
            <select class="form-control" id="category" name="category">
              <option value="school">School</option>
              <option value="work">Work</option>
              <option value="home">Home</option>
              <option value="personal">Personal</option>
              <option value="other">Other</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </fieldset>
    </form>
</div>
```

* Now we can move on to handling the input from the form

```php
if(isset($_POST["submit"]))
{
    if(isset($_POST["task"]) && !empty($_POST["task"]) && isset($_POST["category"]) && !empty($_POST["category"]))
    {
        $task =  mysqli_real_escape_string($mysqli, trim($_POST["task"]));
        $category =  mysqli_real_escape_string($mysqli, trim($_POST["category"]));

        $time_added = date("Y-m-d H:i:s"); 

        $query = "INSERT INTO list (task, created_at, category) VALUES ('$task', '$time_added', '$category');";
        $insert = mysqli_query($mysqli, $query);

        if (!$insert) {
            exit("Database query ($query) error: ". mysql_error($mysqli));
        }
    } 
    else
    {
        $show_error = true; 
    }
}
```

* Now we should probably get a DB connection setup

```php
$mysqli = mysqli_connect("localhost", "root", "root", "todo"); 
```

* Now to define some variables

```php
$show_error = false;
$show_delete_message = false;
$task = "";
$category = "";
```


* Then we can display the task list which includes a complete form

```php
<div class="col-md-6">
    <?php
        $query = "SELECT * FROM list ORDER BY created_at DESC;";
        $tasks = mysqli_query($mysqli, $query);
        if (!$tasks) {
            exit("Database query ($query) error: ". mysql_error($mysqli));
        }
    ?>
    <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th>Task</th>
            <th>Date Added</th>
            <th>Category</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($tasks as $task){ ?>
              <tr>
                  <td><?= $task["task"] ?></td>
                  <td><?= $task["created_at"] ?></td>
                  <td><?= $task["category"] ?></td>
                  <td>
                        <form class="form-horizontal" method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
                            <input type="hidden" name="id" value="<?= $task["id"] ?>" />
                            <div class="form-group">
                              <div class="col-lg-10 col-lg-offset-2">
                                <button type="submit" name="complete" class="btn btn-primary">Completed</button>
                              </div>
                            </div>
                        </form>
                  </td>
              </tr>
          <?php } ?>
        </tbody>
    </table>
</div>
```

* Then we can handle the delete form

```php
if(isset($_POST["complete"]))
{
    if(isset($_POST["id"]) && !empty($_POST["id"]))
    {
        $id = $_POST["id"];
        $query = "DELETE FROM list where id = $id;";
        $delete = mysqli_query($mysqli, $query);

        if (!$delete) {
            exit("Database query ($query) error: ". mysql_error($mysqli));
        }
        else
        {
            $show_delete_message = true;
        }

    }
}
```
