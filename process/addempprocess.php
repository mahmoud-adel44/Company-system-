<?php
session_start();
require_once '../classes/Task.php';

if (isset($_POST['submit'])) {




  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $city = $_POST['city'];
  $gender = $_POST['gender'];
  $phone = $_POST['phone'];
  $birthday = $_POST['birthday'];

  //validation





  //if date is valid
  if (true) {
    // update in db
    $data = [
      'name' => $name,
      'email' => $email,
      'password' => $password,
      'city' => $city,
      'gender' => $gender,
      'phone' => $phone,
      'birthday' => $birthday
    ];

    //store
    $row = new Task;
    $result = $row->AddEmployee($data);
    // var_dump($result);
    // die();
    //if stored db succsess
    if ($result == true) {
      header('location:../viewEmployees.php');
    } else {
    }
  } else {
  }
} else {
  header('location:../addEmployee.php');
}
