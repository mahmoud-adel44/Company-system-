<?php

require_once '../classes/Task.php';
require_once '../classes/Employee.php';


if (isset($_POST['send'])) {

  $task_id = $_GET['task_id'];
  $empName = $_POST['empName'];

  $emp = new Employee;
  $empId = $emp->getId($empName);

  $task_name = $_POST['task_name'];
  $desc = $_POST['desc'];
  $status = $_POST['status'];
  $deadline = $_POST['deadline'];

  //validation





  //if date is valid
  if (true) {
    // update in db
    // 'emp_id' => $emp_id,

    $data = [
      'empId' => $empId['id'],
      'task_name' => $task_name,
      'desc' => $desc,
      'status' => $status,
      'deadline' => $deadline
    ];

    $tas = new Task;
    $result = $tas->update($task_id, $data);


    if ($result == true) {
      header('location:../allTasks.php?task_id=' . $task_id);
    } else {
    }
  } else {
  }
} else {
  header('location:../assignTask.php?task_id=' . $task_id);
}
