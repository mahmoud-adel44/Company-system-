<?php

session_start();

require_once '../classes/Admin.php';

if (isset($_POST['login-submit'])) {
  //read data from form admlogin
  $email = $_POST['email'];
  $password = $_POST['password'];

  // validation
  $admin = new Admin;
  $result = $admin->attempt($email, $password);
  
  //if data is valid
  if ($result !== null) {
    $_SESSION['id'] = $result['id'];
    header('location:../allTasks.php');
  } else {
    header('location:../index.php');
  }
}
else
{
  header('location:../admLogin.php');
}
