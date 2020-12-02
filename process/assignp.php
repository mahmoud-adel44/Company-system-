<?php

require_once '../classes/Task.php';

if (isset($_POST['submit'])) {

  $task_id = $_GET['task_id'];


  $emp_id = $_POST['eid'];
  $task_name = $_POST['pname'];
  $deadline = $_POST['duedate'];

  //validation





  //if date is valid
  if (true) {
    // update in db
    $data = [
      'emp_id'=> $emp_id,
      'task_name'=> $task_name,
      'deadline'=> $deadline
    ];
    
    $tas = new Task;
    $result = $tas->update($task_id , $data);
    // var_dump($result);
    // die();
    if($result == true)
    {
      header('location:../allTasks.php?task_id='.$task_id);
    }
    else
    {

    }
  }else{


  }
}
else
{
  header('location:../assignTask.php?task_id='.$task_id);
}
