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
    <?php 

        $mysqli = mysqli_connect("localhost", "root", "root", "todo"); 
        $show_error = false;
        $show_delete_message = false;
        $task = "";
        $category = "";

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
    ?>

    <div class="container">
        <div class="row">
            <h1>Super Task List</h1>
        </div>

        <?php if($show_delete_message) { ?>
            <div class="alert alert-dismissible alert-success">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>Well done!</strong> You successfully completed a task.
            </div>
        <?php } ?>

        <?php if($show_error) { ?>
            <div class="alert alert-dismissible alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Oh snap!</strong> You need to fill out the task to add it! 
            </div>
        <?php } ?>

        <div class="col-md-6">
            <form class="form-horizontal" method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
              <fieldset>
                <legend>Add new task</legend>
                <div class="form-group">
                  <label for="task" class="col-lg-2 control-label">Task</label>
                  <div class="col-lg-10">
                  <input type="text" class="form-control" id="task" name="task" />
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

    </div>

    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>

</html>
