<?php

require_once '../classes/Task.php';

if (isset($_POST['send'])) {

  $id = $_GET['emId'];


  $firstName = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $city = $_POST['city'];
  $gender = $_POST['gender'];
  $phone = $_POST['phone'];



  //validation





  //if date is valid
  if (true) {
    // update in db
    $data = [
      'name'=> $firstName,
      'email'=> $email,
      'password'=> $password,
      'city'=> $city,
      'gender'=> $gender,
      'phone'=> $phone
    ];
    // var_dump($data);
    // die();
    
    $tas = new Task;
    $result = $tas->updateInfo($id , $data);
    // var_dump($result);
    // die();
    if($result == true)
    {
      header('location:../myTasks.php?emId='.$id);
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
