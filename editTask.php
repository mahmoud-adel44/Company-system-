<?php

session_start();
require_once 'classes/Task.php';

$task_id = $_GET['task_id'];

$task = new Task;

$tasks = $task->getTaskData($task_id);



?>
<!DOCTYPE html>

<html>

<head>
  <title>Company Name</title>
  <!-- Icons font CSS-->
  <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
  <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
  <!-- Font special for pages-->
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

  <!-- Vendor CSS-->
  <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
  <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <!-- Main CSS-->
  <link href="css/main.css" rel="stylesheet" media="all">
  <link href="https://fonts.googleapis.com/css?family=Lobster|Montserrat" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/styleindex.css">
  <link rel="stylesheet" type="text/css" href="css/stylelogin.css">
  <link rel="stylesheet" type="text/css" href="css/styletasks.css">
  <link rel="stylesheet" type="text/css" href="css/styleavtar.css">

</head>

<body>

  <header>
    <nav>


      <ul id="navli">
        <li><a class="homered" href="allTasks.php">All tasks</a></li>
        <li><a class="homeblack" href="viewEmployees.php">view employees</a></li>
        <li><a class="homeblack" href="admLogin.php">Logout</a></li>

      </ul>
    </nav>
  </header>

  <div class="divider"></div>


  <!-- <form id = "registration" action="edit.php" method="POST"> -->
  <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
    <div class="wrapper wrapper--w680">
      <div class="card card-1">
        <div class="card-heading"></div>
        <div class="card-body">
          <form method="POST" action="process/handleEditTask.php?task_id=<?php echo $task_id ?>">
            <?php // foreach ($tasks as $oneTask) { 
            ?>

            <div class="input-group ">
              <h2 class="title">Project Info</h2>
            </div>

            <!-- <div class="input-group">
                <p> employee Id</p>
                <input class="input--style-1" type="text" name="emp_id" value="<?php // echo $tasks['emp_id']; 
                                                                                ?>">
              </div> -->

            <div class="input-group">
              <div class="rs-select2 js-select-simple select--no-search">
                <select name="empName">   
                  <option disabled="disabled" selected="selected"> <?php echo $tasks['name']; ?> </option>
                  <?php
                  $employee = new Task;
                  $result = $employee->employeesNames();

                  foreach ($result as $employeeName) { ?>
                    <option><?php echo $employeeName['name'] ?></option>
                  <?php } ?>


                </select>
                <div class="select-dropdown"></div>
              </div>
            </div>


            <div class="input-group">
              <input class="input--style-1" type="text" placeholder="Project name" name="task_name" value="<?php echo $tasks['task_name']; ?>"" >
              </div>

              <div class=" form-group">
              <label style="color: #666;" for="exampleFormControlTextarea1">Description</label>
              <textarea class="form-control" name="desc" rows="3"><?php echo $tasks['desc']; ?></textarea>
            </div>

            <div class="row row-space">
              <div class="col-5">
                <div class="input-group">
                  <p>status</p>
                  <input class="input--style-1" type="text" name="status" value="<?php echo $tasks['status']; ?>">

                </div>
              </div>


              <div class="input-group">
                <input class="input--style-1" style="color: #666;" type="date" placeholder="Deadline" name="deadline" value="<?php echo $tasks['deadline']; ?>">
              </div>

              <div class="p-t-20">
                <button class="btn btn--radius btn--green" name="send">Update Info</button>
              </div>

          </form>
        </div>
      </div>
    </div>
  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


  <!-- Jquery JS-->
  <!-- <script src="vendor/jquery/jquery.min.js"></script> -->
  <script src="vendor/jquery/jquery.min.js"></script>

  <script src="vendor/select2/select2.min.js"></script>
  <script src="vendor/datepicker/moment.min.js"></script>
  <script src="vendor/datepicker/daterangepicker.js"></script>

  <script src="js/global.js"></script>

</body>

</html>