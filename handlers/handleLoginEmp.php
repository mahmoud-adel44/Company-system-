<?php

session_start();

require_once '../classes/Employee.php';

if (isset($_POST['login-submit'])) {
  //read data from form admlogin
  $email = $_POST['email'];
  $password = $_POST['password'];

  // validation
  $admin = new Employee;
  $result = $admin->attempt($email, $password);

  //if data is valid
  if ($result !== null) {

    $_SESSION['empId'] = $result['id'];

    header('location:../myTasks.php');
  } else {
    header('location:../empLogin.php');
  }
} else {
  header('location:../empLogin.php');
}
